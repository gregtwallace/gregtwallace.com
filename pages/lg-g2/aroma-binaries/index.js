import { Fragment } from 'react';
import Head from 'next/head';

import Jumbotron from '../../../components/UI/Jumbotron';
import Row from '../../../components/UI/Layout/Row';
import ColumnHalf from '../../../components/UI/Layout/ColumnHalf';
import Card from '../../../components/UI/Layout/Card';
import Button from '../../../components/UI/Button';
import DownloadMirrors from '../../../components/UI/PageSections/DownloadMirrors';

import GoogleAdsHead from '../../../components/UI/PageSections/GoogleAdsHead';
import GoogleAd from '../../../components/UI/PageSections/GoogleAd';

const fileMirrors = [
  {
    name: 'pCloud',
    href: 'https://u.pcloud.link/publink/show?code=kZyWSfXZWfJeKQ0wodFbu1Hsn8vIaLGLrJCk',
  },
];

const G2Aroma = () => {
  return (
    <Fragment>
      <Head>
        <title>Greg T. Wallace</title>
        <meta
          name='description'
          content='AROMA provides a graphical interface for Android recovery install zips.'
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
          <Card title='What This Is'>
            <p>
              Sometimes the g2 has problems with AROMA and the graphics become
              distorted when AROMA launches. Swapping the binaries in your zip
              file to a newer version is often sufficient to fix the problem.
              Known working binaries are contained within this download.
            </p>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card title='Installation'>
            <p>
              If your chosen zip file ["your zip"] has AROMA and it does not
              work, you need to replace a couple of binary files in your zip.
            </p>
            <ol class='list-group ml-3'>
              <li>Download the AROMA Binary zip ["my zip"].</li>
              <li>Open ["your zip"] file.</li>
              <li>
                Navigate within ["your zip"] to the folder:
                /META-INF/com/google/android
              </li>
              <li>
                Delete the files in ["your zip"]: update-binary &
                update-binary-installer
              </li>
              <li>Copy the two files from ["my zip"] into ["your zip"].</li>
            </ol>
          </Card>
        </ColumnHalf>
      </Row>

      <GoogleAd />

      <DownloadMirrors mirrors={fileMirrors} />

      <GoogleAd />
    </Fragment>
  );
};

export default G2Aroma;
