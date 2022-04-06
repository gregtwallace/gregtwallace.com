import { Fragment } from 'react';
import Head from 'next/head';

import Jumbotron from '../../../components/UI/Jumbotron';
import Row from '../../../components/UI/Layout/Row';
import ColumnHalf from '../../../components/UI/Layout/ColumnHalf';
import Card from '../../../components/UI/Layout/Card';

import GoogleAdsHead from '../../../components/UI/PageSections/GoogleAdsHead';
import GoogleAd from '../../../components/UI/PageSections/GoogleAd';

const G2Aroma = () => {
  return (
    <Fragment>
      <Head>
        <title>Greg T. Wallace</title>
        <meta
          name='description'
          content="AROMA provides a graphical interface for Android recovery install zips."
        />

        <GoogleAdsHead />
      </Head>

      <Jumbotron
        title='AROMA Binaries'
        lead='Known working AROMA binaries.'
        paragraph='These binaries work on G2 (and likely many other devices).'
        button1='Download'
        button1_href='#download-section'
        button2='More on XDA'
        button2_href='https://forum.xda-developers.com/showpost.php?p=66747442&postcount=2591'
        button2_target='_blank'
      />

      <GoogleAd />

      <Row>
        <ColumnHalf>
          <Card
            imageSrc='/images/home/north_carolina.webp'
            imageAlt='Photo of Greg T. Wallace standing in the mountains of North Carolina.'
            title='Who I Am'
          >
            <p>
              I am an IT Professional, lawyer, development enthusiast, Android
              tinkerer, and self-proclaimed nerd.
            </p>
            <p>
              I grew up in Palm Bay, Florida. I obtained my Bachelor's in
              Accounting from the University of Florida before attending law
              school at Florida State University.
            </p>
            <p>
              I practiced law for a little over three years before starting my
              career in IT.
            </p>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card
            imageSrc='/images/home/workstation-336369_1280.webp'
            imageAlt='Stock photo of computer, phone, notepad, and teacup.'
            title='Career'
          >
            <p>
              My skill set bridges the gap between IT, legal, finance, and
              healthcare.
            </p>
            <p>
              I deal with numerous technology related issues (contracts,
              licensing, budgeting, etc.) primarily by interfacing between my
              company's IT department, legal team, and finance team. While I
              don't currently practice law, I am licensed to practice law in
              Florida. I also manage two teams within IT (a hardware team and a
              purchasing team).
            </p>
          </Card>
        </ColumnHalf>

      </Row>
    </Fragment>
  );
};

export default G2Aroma;
