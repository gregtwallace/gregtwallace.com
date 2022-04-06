import { Fragment } from 'react';
import Head from 'next/head';

import Jumbotron from '../../../components/UI/Jumbotron';
import Row from '../../../components/UI/Layout/Row';
import ColumnHalf from '../../../components/UI/Layout/ColumnHalf';
import Card from '../../../components/UI/Layout/Card';
import DownloadMirrors from '../../../components/PageSections/DownloadMirrors';

import GoogleAdsHead from '../../../components/PageSections/GoogleAdsHead';
import GoogleAd from '../../../components/PageSections/GoogleAd';

const fileMirrors = [
  {
    name: 'pCloud',
    href: 'https://u.pcloud.link/publink/show?code=kZSMSfXZUa4hMDIP8xuM93LDacROQmLboRiy',
  },
];

const D800ModemsPage = () => {
  return (
    <Fragment>
      <Head>
        <title>d800 Modems - LG G2 - Greg T. Wallace</title>
        <meta
          name='description'
          content='Prepackaged modems (radios) for LG G2, model d800.'
        />

        <GoogleAdsHead />
      </Head>

      <Jumbotron
        title='d800 Modems'
        lead='These are the stock modems/basebands, packaged as flashable zips.'
        paragraph2='Supports Model d800 ONLY!'
        button1='Download'
        button1_href='#download-section'
        button2='More on XDA'
        button2_href='https://forum.xda-developers.com/att-g2/development/modems-att-stock-modems-t3106221s'
        button2_target='_blank'
      />

      <GoogleAd />

      <Row>
        <ColumnHalf>
          <Card title='What This Is'>
            <p>
              These are flashable packages that install stock basebands/modems.
              There is a zip for each stock d800 ROM.
            </p>
            <h6>
              Modded KK Radio{' ('}
              <a
                href='https://forum.xda-developers.com/att-g2/development/modem-kk-modem-patched-10d-radio-t2863727'
                target='_blank'
              >
                More on XDA
              </a>
              )
            </h6>
            <p>
              The radio contained in the 20c KK modem image has an issue with
              SMS messages being delayed. The modded modem patches in the old
              radio file to correct the bug. However, since the new modem files
              are kept, sensors in 20c based KK ROMs continue to work.
            </p>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card title='What Changes This Makes'>
            <p>
              The only change this makes is to flash the relevant modem
              partition.
            </p>
          </Card>
        </ColumnHalf>
      </Row>

      <Row>
        <ColumnHalf>
          <Card title='Installation'>
            <ol className='list-group ml-3'>
              <li>Boot into recovery, flash your desired baseband/modem.</li>
              <li>Reboot into ROM</li>
            </ol>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card title='Troubleshooting'>
            <h6>Compatibility</h6>
            <p>
              Your ROM must support the baseband you flash. A mismatch will
              result in certain sensors not working (e.g. GPS) or even worse,
              you may end up in a bootloop. Only flash the baseband recommended
              by your ROM developer.
            </p>
            <p>You can't just use the newest version to "fix" things.</p>
            <h6>Modded KK Modem</h6>
            <p>
              ROMs that require the 20c KK Modem (for rotation to work) cause
              SMS messages to randomly get stuck, causing ~2 minute delay when
              sending. The modded modem resolves this issue while keeping
              sensors fully functional.
            </p>
          </Card>
        </ColumnHalf>
      </Row>

      <GoogleAd />

      <DownloadMirrors mirrors={fileMirrors} />

      <GoogleAd />
    </Fragment>
  );
};

export default D800ModemsPage;
