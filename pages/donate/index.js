import { Fragment } from 'react';
import Head from 'next/head';

import Jumbotron from '../../components/UI/Jumbotron';
import Row from '../../components/UI/Layout/Row';
import ColumnThird from '../../components/UI/Layout/ColumnThird';
import Card from '../../components/UI/Layout/Card';
import Button from '../../components/UI/Button';

const DonatePage = () => {
  return (
    <Fragment>
      <Head>
        <title>Greg T. Wallace</title>
        <meta
          name='description'
          content="Greg T. Wallace's personal website for android, development, and other fun. This also serves as the
            primary repository for Greg's LG G2 projects."
        />
      </Head>

      <Jumbotron title='Donate'>
        Help cover the costs of hosting this site, or just buy me a beer to say
        thanks.
      </Jumbotron>

      <Row>
        <ColumnThird>
          <Card
            imageSrc='/images/donate/zelle_logo.webp'
            imageAlt='Zelle logo.'
            title='Zelle'
          >
            <p>No fees & instant delivery.</p>
            <p>
              <strong>Send via Zelle App to:</strong> greg@gregtwallace.com
            </p>
          </Card>
        </ColumnThird>

        <ColumnThird>
          <Card
            imageSrc='/images/donate/venmo_logo.webp'
            imageAlt='Venmo logo.'
            title='Venmo'
          >
            <p>No fees.</p>
            <Button
              href='https://venmo.com/gtwallace'
              target='_blank'
            >
              Venmo Me
            </Button>
          </Card>
        </ColumnThird>

        <ColumnThird>
          <Card
            imageSrc='/images/donate/paypal_logo.webp'
            imageAlt='PayPal logo.'
            title='PayPal'
          >
            <p>They steal part of the money, but I'll still be very grateful!</p>
            <Button
              href='https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=44ZHKU4BWDUKN'
              target='_blank'
            >
              PayPal Me
            </Button>
          </Card>
        </ColumnThird>
      </Row>
    </Fragment>
  );
};

export default DonatePage;
