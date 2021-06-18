import { Fragment, useEffect } from 'react';
import Head from 'next/head';

import Button from '../../../components/UI/Button';

const TicTacToePage = (props) => {
  useEffect (() => {
    const scriptTag = document.createElement('script');
    scriptTag.src='/javascript/tic-tac-toe.js';
    document.body.appendChild(scriptTag);
    
    return () => {
      document.body.removeChild(scriptTag);
    };
  }, []);

  return (
    <Fragment>
      <Head>
        <title>Tic-Tac-Toe</title>
        <meta
          name='description'
          content='A javascript implementation of Tic-Tac-Toe.'
        />
      </Head>

      <div className='container text-center' id='gamecontainer'>
        <h1 className='m-1' id='gametitle'>
          Tic-Tac-Toe
        </h1>
        <p>A basic implmentation of Tic-Tac-Toe that I wrote in javascript.</p>
        <canvas id='gameboard' className='m-0 p-0'></canvas>
        <h2 id='gamestatus'></h2>
        <Button id='restart-button' className='btn btn-primary'>
          Restart Game
        </Button>
      </div>
    </Fragment>
  );
};

export default TicTacToePage;
