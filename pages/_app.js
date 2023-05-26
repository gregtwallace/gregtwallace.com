import { Fragment } from 'react';
import Head from 'next/head';

import GoogleAdsHead from '../components/Ads/GoogleAdsHead';
import Navbar from '../components/PageSections/Navbar/Navbar';
import AlwaysFooter from '../components/PageSections/AlwaysFooter';
import AlwaysJavascript from '../components/PageSections/AlwaysJavascript';

import './app.css';

const MyApp = ({ Component, pageProps }) => {
  return (
    <Fragment>
      <Head>
        <meta
          name='viewport'
          content='width=device-width, initial-scale=1, shrink-to-fit=no'
        />

        <link rel='icon' href='/favicon.ico' />

        <meta property='og:title' content='Greg T. Wallace' />
        <meta property='og:type' content='website' />
        <meta
          property='og:description'
          content="Greg T. Wallace's personal website for android, development, and other fun."
        />
        <meta
          property='og:image'
          content='https://www.gregtwallace.com/images/og/og_image.png'
        />
        <meta property='og:url' content='https://www.gregtwallace.com/' />
      </Head>

      {/* TODO: custom css? */}
      <link
        rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T'
        crossOrigin='anonymous'
      />

      <GoogleAdsHead />

      <div className='container'>
        <Navbar />

        <Component {...pageProps} />

        <AlwaysFooter />
      </div>

      <AlwaysJavascript />
    </Fragment>
  );
};

export default MyApp;
