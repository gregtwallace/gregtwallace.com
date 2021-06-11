import Head from 'next/head';
import Image from 'next/image';

import Jumbotron from '../../components/UI/Jumbotron';

const DonatePage = () => {
  return (
    <>
      <Head>
        <title>Greg T. Wallace</title>
        <meta
          name='description'
          content="Greg T. Wallace's personal website for android, development, and other fun. This also serves as the
            primary repository for Greg's LG G2 projects."
        />
      </Head>

      <Jumbotron title='Donate'>
        Help cover the costs of hosting this site, or just buy me a beer to say thanks.
      </Jumbotron>

      <div className='row'>
        <div className='col-sm-4'>
          <div className='card h-100'>
            <Image
              className='card-img-top'
              src='/images/donate/zelle_logo.webp'
              width={348}
              height={174}
            />
            <div className='card-body'>
              <h5>Zelle</h5>
              <p>No fees & instant delivery.</p>
              <p>
                <strong>Send via Zelle App to:</strong> greg@gregtwallace.com
              </p>
            </div>
          </div>
        </div>
        <div className='col-sm-4'>
          <div className='card h-100'>
            <Image
              className='card-img-top'
              src='/images/donate/venmo_logo.webp'
              width={348}
              height={174}
            />
            <div className='card-body'>
              <h5>Venmo</h5>
              <p>No fees.</p>
              <a
                href='https://venmo.com/gtwallace'
                className='btn btn-primary'
                target='_blank'
              >
                Venmo Me
              </a>
            </div>
          </div>
        </div>
        <div className='col-sm-4'>
          <div className='card h-100'>
            <Image
              className='card-img-top'
              src='/images/donate/paypal_logo.webp'
              width={348}
              height={174}
            />
            <div className='card-body'>
              <h5>Paypal</h5>
              <p>
                They steal part of the money, but I'll still be very grateful!
              </p>
              <a
                href='https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=44ZHKU4BWDUKN'
                className='btn btn-primary'
                target='_blank'
              >
                PayPal Me
              </a>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default DonatePage;
