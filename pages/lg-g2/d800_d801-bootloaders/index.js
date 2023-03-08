import { Fragment } from 'react';
import Head from 'next/head';

import Jumbotron from '../../../components/UI/Jumbotron';
import Row from '../../../components/UI/Layout/Row';
import ColumnHalf from '../../../components/UI/Layout/ColumnHalf';
import Card from '../../../components/UI/Layout/Card';
import DownloadMirrors from '../../../components/PageSections/DownloadMirrors';

import GoogleAdsHead from '../../../components/Ads/GoogleAdsHead';
import GoogleAd from '../../../components/Ads/GoogleAd';

const fileMirrors = [
  {
    name: 'pCloud',
    href: 'https://u.pcloud.link/publink/show?code=kZvnSfXZzgiSfSNCTOHCOfv29nmg55JCy6hV',
  },
];

const D800801BootloaderPage = () => {
  return (
    <Fragment>
      <Head>
        <title>Bootloaders - LG G2 - Greg T. Wallace</title>
        <meta
          name='description'
          content='Prepackaged bootloaders for LG G2 models d800 and d801.'
        />

        <GoogleAdsHead />
      </Head>

      <Jumbotron
        title='d800 & d801 Bootloaders'
        lead='All of the bootloaders for d800 and a couple for d801, packaged as flashable zips.'
        paragraph2='Ensure you download the correct version for your phone! Improperly flashing your bootloader (or flashing the wrong one) will result in a bricked device.'
        button1='Download'
        button1_href='#download-section'
        button2='More on XDA'
        button2_href='https://forum.xda-developers.com/att-g2/development/bootloader-flash-jb-kk-bootloader-t2965755'
        button2_target='_blank'
      />

      <GoogleAd />

      <Row>
        <ColumnHalf>
          <Card title='What This Is'>
            <p>
              These are flashable packages that install the bootloader
              partitions. There is a zip for each stock d800 ROM and a couple
              for d801.
            </p>
            <p>
              Included partitions are aboot, dbi, laf, persist, rpm, sbl1, and
              tz.
            </p>
            <p>
              These packages flash all of your bootloader partitions.
              Modem/Radio should be flashed as a separage package.
            </p>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card title='File Sources'>
            <p>10d & 20c were extracted directly from tot file.</p>
            <p>
              20y & 30f required flashing my phone to 20c, then did FOTA to 20y
              and extracted the partitions. Then FOTA to 30f and again extracted
              the partitions.
            </p>
          </Card>
        </ColumnHalf>
      </Row>

      <Row>
        <ColumnHalf>
          <Card title='Installation'>
            <ol className='list-group ml-3'>
              <li>
                Boot into recovery, flash your desired bootloader package.
              </li>
              <li>
                Flash other needed zips for compatibility.
                <br />
                <strong>Note: </strong>This is your responsibility. If you do
                not flash a correct combination, you will brick your phone.
              </li>
              <li>Reboot into ROM</li>
            </ol>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card title='Troubleshooting'>
            <h6>Compatibility</h6>
            <p>
              You muse ensure your ROM, boot, recovery, and modem/radio
              partitions are all compatible with the bootloader you flash.
            </p>
            <p>You can't just use the newest version to "fix" things.</p>
            <h6>What is your current bootloader?</h6>
            <p>
              There are really only two ways to know for sure. Either flash a
              bootloader package or manually extract your bootloader partitions
              and examine the files.
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

export default D800801BootloaderPage;
