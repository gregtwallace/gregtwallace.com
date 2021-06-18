
// // Adjustable variablest to modify game appearance
var maxBoardSize = 500;
var boardPadding = 15;
var piecePadding = 15;
var lineWidth = 5.5; // using .5 to remove some fuzzy

// // some initial stuff
// variable for our game canvas
var gameboard = document.getElementById('gameboard');

// Make sure things initialize properly
if (gameboard.getContext) {
  var context = gameboard.getContext('2d');
} else {
  throw new Error('Something went badly wrong!');
}

// // meat and potatoes
function horizLine(yAxis) {
  context.beginPath();
  context.moveTo(boardPadding, yAxis);
  context.lineTo(gameboard.clientWidth - boardPadding, yAxis);
  context.lineWidth = lineWidth;
  context.strokeStyle = 'black';
  context.stroke();
}
function vertLine(xAxis) {
  context.beginPath();
  context.moveTo(xAxis, boardPadding);
  context.lineTo(xAxis, gameboard.clientHeight - boardPadding);
  context.lineWidth = lineWidth;
  context.strokeStyle = 'black';
  context.stroke();
}

function drawBoard() {
  // set the game element sizes based on title (size of which is controlled by bootstrap)
  var navwidth = document
    .getElementById('gametitle')
    .getBoundingClientRect().width;
  if (navwidth < maxBoardSize) {
    document.getElementById('gameboard').width = navwidth;
    document.getElementById('gameboard').height = navwidth;
  } else {
    document.getElementById('gameboard').width = maxBoardSize;
    document.getElementById('gameboard').height = maxBoardSize;
  }

  // Draw the board lines
  horizLine((gameboard.clientHeight - boardPadding * 2) / 3 + boardPadding);
  horizLine(
    ((gameboard.clientHeight - boardPadding * 2) / 3) * 2 + boardPadding
  );
  vertLine((gameboard.clientWidth - boardPadding * 2) / 3 + boardPadding);
  vertLine(((gameboard.clientWidth - boardPadding * 2) / 3) * 2 + boardPadding);
}

// define game vars in global scope before using function to set (we'll reuse the same vars in subsequent games)
var boardSquares;
var playerTurn;
var movesMade;
var gameOver;
var halfPieceXIncrement;
var halfPieceYIncrement;

function setPlayerTurn(player) {
  document.getElementById('gamestatus').innerHTML = player + "'s Turn";
  playerTurn = player;
}

function initializeGame() {
  // Erase the entire canvas before we start (or start again)
  context.clearRect(0, 0, gameboard.clientWidth, gameboard.clientHeight);

  drawBoard();

  document.getElementById('gamestatus').style.fontWeight = 'normal';
  document.getElementById('gamestatus').style.color = 'black';
  setPlayerTurn('X');
  movesMade = 0;
  gameOver = false;

  // spacing for the pieces
  halfPieceXIncrement = (gameboard.clientWidth - boardPadding * 2) / 6;
  halfPieceYIncrement = (gameboard.clientHeight - boardPadding * 2) / 6;

  // Board Layout
  //  0,0 | 0,1 | 0,2
  // -----------
  //  1,0 | 1,1 | 1,2
  // -----------
  //  2,0 | 2,1 | 2,2

  // boardSquares[x-val][y-val][X]
  //  X =
  //    0 piece in the space
  //    1 x-coord for circle center
  //    2 y-coord for circle center

  // to-do later if I make the board bigger or something
  var boardRows = 3;
  var boardCols = 3;

  boardSquares = [];
  for (i = 0; i < boardRows; i++) {
    boardSquares[i] = [];
    for (j = 0; j < boardCols; j++) {
      boardSquares[i][j] = [];
      boardSquares[i][j][0] = '';
      boardSquares[i][j][1] = halfPieceXIncrement * (i * 2 + 1) + boardPadding;
      boardSquares[i][j][2] = halfPieceYIncrement * (j * 2 + 1) + boardPadding;
    }
  }
}

function placeX(row, col) {
  context.beginPath();
  // top left to bottom right line
  context.moveTo(
    boardSquares[row][col][1] - halfPieceXIncrement + piecePadding,
    boardSquares[row][col][2] - halfPieceYIncrement + piecePadding
  );
  context.lineTo(
    boardSquares[row][col][1] + halfPieceXIncrement - piecePadding,
    boardSquares[row][col][2] + halfPieceYIncrement - piecePadding
  );
  // bottom left to top right line
  context.moveTo(
    boardSquares[row][col][1] - halfPieceXIncrement + piecePadding,
    boardSquares[row][col][2] + halfPieceYIncrement - piecePadding
  );
  context.lineTo(
    boardSquares[row][col][1] + halfPieceXIncrement - piecePadding,
    boardSquares[row][col][2] - halfPieceYIncrement + piecePadding
  );

  context.lineWidth = lineWidth;
  context.strokeStyle = 'blue';
  context.stroke();
  boardSquares[row][col][0] = 'X';
}

function placeO(row, col) {
  context.beginPath();
  context.ellipse(
    boardSquares[row][col][1],
    boardSquares[row][col][2],
    halfPieceXIncrement - piecePadding,
    halfPieceYIncrement - piecePadding,
    0,
    0,
    2 * Math.PI
  );
  context.lineWidth = lineWidth;
  context.strokeStyle = 'red';
  context.stroke();
  boardSquares[row][col][0] = 'O';
}

function checkForWin(player) {
  var winConditions = [
    [
      [0, 0],
      [0, 1],
      [0, 2],
    ], // rows
    [
      [1, 0],
      [1, 1],
      [1, 2],
    ],
    [
      [2, 0],
      [2, 1],
      [2, 2],
    ],
    [
      [0, 0],
      [1, 0],
      [2, 0],
    ], // cols
    [
      [0, 1],
      [1, 1],
      [2, 1],
    ],
    [
      [0, 2],
      [1, 2],
      [2, 2],
    ],
    [
      [0, 0],
      [1, 1],
      [2, 2],
    ], // diags
    [
      [2, 0],
      [1, 1],
      [0, 2],
    ],
  ];

  for (i = 0; i < winConditions.length; i++) {
    if (
      player ==
        boardSquares[winConditions[i][0][0]][winConditions[i][0][1]][0] &&
      boardSquares[winConditions[i][0][0]][winConditions[i][0][1]][0] ==
        boardSquares[winConditions[i][1][0]][winConditions[i][1][1]][0] &&
      boardSquares[winConditions[i][1][0]][winConditions[i][1][1]][0] ==
        boardSquares[winConditions[i][2][0]][winConditions[i][2][1]][0]
    ) {
      document.getElementById('gamestatus').innerHTML = player + ' has Won!';
      document.getElementById('gamestatus').style.fontWeight = 'bold';
      if (player == 'X') {
        document.getElementById('gamestatus').style.color = 'blue';
      } else if (player == 'O') {
        document.getElementById('gamestatus').style.color = 'red';
      }
      gameOver = true;
      return true;
    }
  }

  return false;
}

gameboard.addEventListener('mousedown', function () {
  // don't do anything if the game already ended
  if (gameOver == true) {
    return;
  }

  var gameboardRect = gameboard.getBoundingClientRect();

  var clickLeft = event.clientX - gameboardRect.left;
  var clickTop = event.clientY - gameboardRect.top;

  var row;
  var col;

  // determine col of clicked square
  if (
    clickLeft > halfPieceXIncrement * 0 + boardPadding &&
    clickLeft < halfPieceXIncrement * 2 + boardPadding - lineWidth / 2
  ) {
    row = 0;
  } else if (
    clickLeft > halfPieceXIncrement * 2 + boardPadding + lineWidth / 2 &&
    clickLeft < halfPieceXIncrement * 4 + boardPadding - lineWidth / 2
  ) {
    row = 1;
  } else if (
    clickLeft > halfPieceXIncrement * 4 + boardPadding + lineWidth / 2 &&
    clickLeft < halfPieceXIncrement * 6 + boardPadding - lineWidth / 2
  ) {
    row = 2;
  } else {
    return;
  }

  // determine row of clicked square
  if (
    clickTop > halfPieceYIncrement * 0 + boardPadding &&
    clickTop < halfPieceYIncrement * 2 + boardPadding - lineWidth / 2
  ) {
    col = 0;
  } else if (
    clickTop > halfPieceYIncrement * 2 + boardPadding + lineWidth / 2 &&
    clickTop < halfPieceYIncrement * 4 + boardPadding - lineWidth / 2
  ) {
    col = 1;
  } else if (
    clickTop > halfPieceYIncrement * 4 + boardPadding + lineWidth / 2 &&
    clickTop < halfPieceYIncrement * 6 + boardPadding - lineWidth / 2
  ) {
    col = 2;
  } else {
    return;
  }

  var pieceInSquare = boardSquares[row][col][0];

  if (pieceInSquare == '') {
    if (playerTurn == 'X') {
      placeX(row, col);
      movesMade += 1;
      setPlayerTurn('O');
    } else if (playerTurn == 'O') {
      placeO(row, col);
      movesMade += 1;
      setPlayerTurn('X');
    }

    // check win conditions
    if (checkForWin('X')) {
      return;
    } else if (checkForWin('O')) {
      return;
    }
    // check for draw if win hasn't occured yet
    else if (movesMade == 9) {
      document.getElementById('gamestatus').innerHTML = 'Game Ends in a Draw!';
      gameOver = true;
    }
  }
});

// play the first game
initializeGame();

// restart button
document.getElementById('restart-button').onclick = function () {
  initializeGame();
};
