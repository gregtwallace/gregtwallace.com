import { Fragment } from 'react';
import Head from 'next/head';

import Navbar from '../components/UI/Navbar/Navbar';
import AlwaysFooter from '../components/UI/PageSections/AlwaysFooter';

import Container from 'react-bootstrap/Container';

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

        <link
          rel='stylesheet'
          href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css'
          integrity='sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA=='
          crossOrigin='anonymous'
        />
      </Head>

      <Container>
        <Navbar />

        <Component {...pageProps} />

        <AlwaysFooter />
      </Container>

    </Fragment>
  );
};

export default MyApp;
