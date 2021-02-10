<!doctype html>

<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>

    <title>Tic-Tac-Toe</title>
    <meta name="description" content="A javascript implementation of Tic-Tac-Toe.">

  </head>

  <body>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container text-center" id="gamecontainer">
      <h1 class="m-1" id="gametitle">Tic-Tac-Toe</h1>
      <p>A basic implmentation of Tic-Tac-Toe that I wrote in javascript.</p>
      <canvas id="gameboard" class="m-0 p-0"></canvas>
      <h2 id="gamestatus"></h3>
      <button id="restart-button" class="btn btn-primary">Restart Game</button>
    </div>

    <script type="text/javascript">

      // // Adjustable variablest to modify game appearance
      var maxBoardSize = 500;
      var boardPadding = 15;
      var piecePadding = 15;
      var lineWidth = 5.5; // using .5 to remove some fuzzy


      // // some initial stuff
      // variable for our game canvas
      var gameboard = document.getElementById("gameboard");

      // Make sure things initialize properly
      if (gameboard.getContext) {
        var context = gameboard.getContext('2d');
      }
      else {
        throw new Error("Something went badly wrong!");
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
        var navwidth = document.getElementById("gametitle").getBoundingClientRect().width;
        if (navwidth < maxBoardSize) {
          document.getElementById("gameboard").width = navwidth;
          document.getElementById("gameboard").height = navwidth;
        }
        else {
          document.getElementById("gameboard").width = maxBoardSize;
          document.getElementById("gameboard").height = maxBoardSize;
        }


        // Draw the board lines
        horizLine(((gameboard.clientHeight - (boardPadding * 2)) / 3) + boardPadding);
        horizLine(((gameboard.clientHeight - (boardPadding * 2)) / 3 * 2) + boardPadding);
        vertLine(((gameboard.clientWidth - (boardPadding * 2)) / 3) + boardPadding);
        vertLine(((gameboard.clientWidth - (boardPadding * 2)) / 3 * 2) + boardPadding);
      }

      // define game vars in global scope before using function to set (we'll reuse the same vars in subsequent games)
      var boardSquares;
      var pieces;
      var playerTurn;
      var movesMade;
      var gameOver;

      function setPlayerTurn(player) {
        document.getElementById("gamestatus").innerHTML = player + "'s Turn";
        playerTurn = player;
      }

      function initializeGame() {
        // Erase the entire canvas before we start (or start again)
        context.clearRect(0, 0, gameboard.clientWidth, gameboard.clientHeight);

        drawBoard();

        document.getElementById("gamestatus").style.fontWeight = "normal";
        document.getElementById("gamestatus").style.color = "black";
        setPlayerTurn("X");
        movesMade = 0;
        gameOver = false;

        // create array for game pieces & board
          // Array Layout re: board
          //  0 | 1 | 2
          // -----------
          //  3 | 4 | 5
          // -----------
          //  6 | 7 | 8

        // boardSquares[x-val][y-val]
        boardSquares = [
          [0, 3, 6],
          [1, 4, 7],
          [2, 5, 8]
        ]

        // spacing for the pieces
        halfPieceXIncrement = ((gameboard.clientWidth - (boardPadding * 2)) / 6);
        halfPieceYIncrement = ((gameboard.clientHeight - (boardPadding * 2)) / 6);

        // array to contain the pieces and info about them
          // [0] x-coord for circle center
          // [1] y-coord for circle center
          // [2] piece in the space
        pieces = [
          [halfPieceXIncrement * 1 + boardPadding, halfPieceYIncrement * 1 + boardPadding, ""],
          [halfPieceXIncrement * 3 + boardPadding, halfPieceYIncrement * 1 + boardPadding, ""],
          [halfPieceXIncrement * 5 + boardPadding, halfPieceYIncrement * 1 + boardPadding, ""],

          [halfPieceXIncrement * 1 + boardPadding, halfPieceYIncrement * 3 + boardPadding, ""],
          [halfPieceXIncrement * 3 + boardPadding, halfPieceYIncrement * 3 + boardPadding, ""],
          [halfPieceXIncrement * 5 + boardPadding, halfPieceYIncrement * 3 + boardPadding, ""],

          [halfPieceXIncrement * 1 + boardPadding, halfPieceYIncrement * 5 + boardPadding, ""],
          [halfPieceXIncrement * 3 + boardPadding, halfPieceYIncrement * 5 + boardPadding, ""],
          [halfPieceXIncrement * 5 + boardPadding, halfPieceYIncrement * 5 + boardPadding, ""]
        ];

      }

      function placeX(pieceLocation) {
        context.beginPath();
        // top left to bottom right line
        context.moveTo(pieces[pieceLocation][0] - halfPieceXIncrement + piecePadding, pieces[pieceLocation][1] - halfPieceYIncrement + piecePadding);
        context.lineTo(pieces[pieceLocation][0] + halfPieceXIncrement - piecePadding, pieces[pieceLocation][1] + halfPieceYIncrement - piecePadding)
        // bottom left to top right line
        context.moveTo(pieces[pieceLocation][0] - halfPieceXIncrement + piecePadding, pieces[pieceLocation][1] + halfPieceYIncrement - piecePadding);
        context.lineTo(pieces[pieceLocation][0] + halfPieceXIncrement - piecePadding, pieces[pieceLocation][1] - halfPieceYIncrement + piecePadding)

        context.lineWidth = lineWidth;
        context.strokeStyle = 'blue';
        context.stroke();
        pieces[pieceLocation][2] = "X";
      }

      function placeO(pieceLocation) {
        context.beginPath();
        context.ellipse(pieces[pieceLocation][0], pieces[pieceLocation][1], (halfPieceXIncrement - piecePadding), (halfPieceYIncrement - piecePadding), 0, 0, 2 * Math.PI);
        context.lineWidth = lineWidth;
        context.strokeStyle = 'red';
        context.stroke();
        pieces[pieceLocation][2] = "O";
      }

      function checkForWin(player) {
        if ( pieces[0][2] + pieces[1][2] + pieces[2][2] == player + player + player ||  // top row
             pieces[3][2] + pieces[4][2] + pieces[5][2] == player + player + player ||  // middle row
             pieces[6][2] + pieces[7][2] + pieces[8][2] == player + player + player ||  // bottom row

             pieces[0][2] + pieces[3][2] + pieces[6][2] == player + player + player ||  // left col
             pieces[1][2] + pieces[4][2] + pieces[7][2] == player + player + player ||  // middle col
             pieces[2][2] + pieces[5][2] + pieces[8][2] == player + player + player ||  // right col

             pieces[0][2] + pieces[4][2] + pieces[8][2] == player + player + player ||  // top left diag
             pieces[2][2] + pieces[4][2] + pieces[6][2] == player + player + player     // top right diag
        ) {
            document.getElementById("gamestatus").innerHTML = player + " has Won!";
            document.getElementById("gamestatus").style.fontWeight = "bold";
            if (player == "X") {
              document.getElementById("gamestatus").style.color = "blue";
            }
            else if (player == "O") {
              document.getElementById("gamestatus").style.color = "red";
            }
            gameOver = true;
            return true;
        }
        return false;
      }

      gameboard.addEventListener('mousedown', function() {
        // don't do anything if the game already ended
        if ( gameOver == true ) {
          return;
        }

        var gameboardRect = gameboard.getBoundingClientRect()

        var clickLeft = event.clientX - gameboardRect.left;
        var clickTop = event.clientY - gameboardRect.top;

        var xLocation;
        var yLocation;

        // determine col of clicked square
        if (( clickLeft > halfPieceXIncrement * 0 + boardPadding ) && (clickLeft < halfPieceXIncrement * 2 + boardPadding - (lineWidth / 2) )) {
          xLocation = 0;
        }
        else if (( clickLeft > halfPieceXIncrement * 2 + boardPadding + (lineWidth / 2) ) && (clickLeft < halfPieceXIncrement * 4 + boardPadding - (lineWidth / 2) )) {
          xLocation = 1;
        }
        else if (( clickLeft > halfPieceXIncrement * 4 + boardPadding + (lineWidth / 2) ) && (clickLeft < halfPieceXIncrement * 6 + boardPadding - (lineWidth / 2) )) {
          xLocation = 2;
        }
        else {
          return;
        }

        // determine row of clicked square
        if (( clickTop > halfPieceYIncrement * 0 + boardPadding ) && (clickTop < halfPieceYIncrement * 2 + boardPadding - (lineWidth / 2) )) {
          yLocation = 0;
        }
        else if (( clickTop > halfPieceYIncrement * 2 + boardPadding + (lineWidth / 2) ) && (clickTop < halfPieceYIncrement * 4 + boardPadding - (lineWidth / 2) )) {
          yLocation = 1;
        }
        else if (( clickTop > halfPieceYIncrement * 4 + boardPadding + (lineWidth / 2) ) && (clickTop < halfPieceYIncrement * 6 + boardPadding - (lineWidth / 2) )) {
          yLocation = 2;
        }
        else {
          return;
        }

        var clickedSquare = boardSquares[xLocation][yLocation];
        var pieceInSquare = pieces[clickedSquare][2];

        if ( pieceInSquare == "" ) {
          if ( playerTurn == "X" ) {
            placeX(clickedSquare);
            movesMade += 1;
            setPlayerTurn("O");
          }
          else if ( playerTurn == "O") {
            placeO(clickedSquare);
            movesMade += 1;
            setPlayerTurn("X");
          }

          // check win conditions
          if ( checkForWin("X") ) {
            return;
          }
          else if ( checkForWin("O") ) {
            return;
          }
          // check for draw if win hasn't occured yet
          else if ( movesMade == 9 ) {
            document.getElementById("gamestatus").innerHTML = "Game Ends in a Draw!";
            gameOver = true;
          }
        }

      });

      // // play the first game
      initializeGame();

      // restart button
      document.getElementById("restart-button").onclick = function() {
        initializeGame();
      };

    </script>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/javascript.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/footer.html"; include_once($path); ?>

  </body>
</html>






</html>
