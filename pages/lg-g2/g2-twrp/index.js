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
    href: 'https://u.pcloud.link/publink/show?code=kZvYSfXZ9qk0Tc4TGkjoCFVum3sSwmoRR7yk',
  },
];

const G2TwrpPage = () => {
  return (
    <Fragment>
      <Head>
        <title>TWRP - LG G2 - Greg T. Wallace</title>
        <meta
          name='description'
          content='TWRP custom recovery built for all LG G2 models.'
        />

        <GoogleAdsHead />
      </Head>

      <Jumbotron
        title='TWRP for LG G2'
        lead='Built with updated source tree and kernel with thermal control and f2fs built-in.'
        paragraph='For all variants.'
        paragraph2='For ls980 and vs980, there seem to be issues with signal after booting newer versions of recovery. It is recommend you use an
        older recovery if you have this issue. Please let me know if you have a solution.'
        button1='Download'
        button1_href='#download-section'
        button2='More on XDA'
        button2_href='https://forum.xda-developers.com/lg-g2/development/twrp-twrp-2-8-0-0-kernel-f2fs-tools-t2898705'
        button2_target='_blank'
      />

      <GoogleAd />

      <Row>
        <ColumnHalf>
          <Card title='What This Is'>
            <p>
              These are the latest builds of TWRP with a customized kernel and
              f2fs support added in.
            </p>
            <p>
              Originally I just wanted a TWRP version that supported f2fs for my
              d800. However, this grew into a compilation of TWRP for all LG G2
              devices.
            </p>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card title='Features'>
            <ul className='list-group ml-3'>
              <li>
                <span className='text-success'>Added: </span>Modified cm-14.1 kernel
                with thermal and other changes. (as of 3.1.0-0)
              </li>
              <li>
                <span className='text-success'>Added: </span>Full F2FS support,
                including updated driver and f2fs-tools.
                <br />
                <strong>Note: </strong>You must NOT have "Use rm -rf instead of
                formatting." in the Settings page. If you have this option
                enabled, you will not be able to change partition type.
              </li>
              <li>
                <span className='text-success'>Added: </span>Proper support for f320
                & lgl22 External SD Card.
              </li>
              <li>
                <span className='text-success'>Added: </span>Tap to wake.
              </li>
              <li>
                <span className='text-success'>Added: </span>NTFS support.
              </li>
              <li>
                <span className='text-success'>Added: </span>Working decryption
                support.
                <br />
                <span className='text-danger'>
                  Do not encrypt f2fs - Bootloop of ROM and Recovery will occur!
                </span>
              </li>
              <li>
                <span className='text-success'>Added: </span>AROMA hack to fix
                graphics.
              </li>
              <li>
                <span className='text-success'>Uses: </span>dr87's auto-select
                correct panel type.
              </li>
              <li>
                <span className='text-success'>Uses: </span>Bump (So loki isn't
                needed)
              </li>
              <li>
                All of the goodies that already come packed in to the latest
                version of TWRP!
              </li>
            </ul>
          </Card>
        </ColumnHalf>
      </Row>

      <Row>
        <ColumnHalf>
          <Card title='Installation'>
            <ol className='list-group ml-3'>
              <li>
                Get any version of TWRP installed and working. I'd recommend
                using Autorec to get initial TWRP running. This is the{' '}
                <a
                  href='http://forum.xda-developers.com/showthread.php?t=2715496'
                  target='_blank'
                >
                  link for KitKat
                </a>
                .<br />
                There is also an apk for lollipop, this is much preferred! You
                can use any number of other methods to get some version of TWRP
                installed and running.
              </li>
              <li>
                Once you have a working TWRP, simply flash my zip to upgrade to
                latest version.
                <br />
                <strong>Note: </strong>If you flash the image directly, the
                panel detection script will not run! This is only important if
                you have a jdi LCD panel.
              </li>
            </ol>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card title='Troubleshooting'>
            <p>Always refer to general TWRP bugs.</p>
            <p>
              I do my best to test all builds, however, I only have model d800
              so usage of these builds is{' '}
              <span className='text-danger'>at your own risk!</span>
            </p>
            <p>Please report any bugs on the xda thread.</p>
            <p>
              It is currently known there is a signal issue after installing
              latest versions of TWRP on ls/vs model. Let me know if you find a
              solution to this.
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

export default G2TwrpPage;
