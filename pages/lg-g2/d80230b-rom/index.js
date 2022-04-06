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
    name: 'AFH',
    href: 'https://www.androidfilehost.com/?fid=817550096634741212',
  },
  {
    name: 'pCloud',
    href: 'https://u.pcloud.link/publink/show?code=kZETSfXZObhWyfgnWsHd50311bnHmJM8UBby',
  },
];

const StrippedROMPage = () => {
  return (
    <Fragment>
      <Head>
        <title>d800 Modded ROM - LG G2 - Greg T. Wallace</title>
        <meta
          name='description'
          content='This is the stock LG G2 d802 lollipop (30b) ROM converted to d800 with unnecessary components removed
          (i.e. de-bloated).'
        />

        <GoogleAdsHead />
      </Head>

      <Jumbotron
        title='Stripped 30b Stock ROM for d800'
        lead='This is a stripped down version of the d80230b (Lollipop) stock ROM for d802, patched for d800.'
        paragraph2='Supports Model d800 ONLY!'
        button1='Download'
        button1_href='#download-section'
        button2='More on XDA'
        button2_href='https://forum.xda-developers.com/t/rom-d80030b-v1-2015-06-26-stock-lollipop-30b-stripped-down.3144195/'
        button2_target='_blank'
      />

      <GoogleAd />

      <Row>
        <ColumnHalf>
          <Card title='What This Is'>
            <p>
              I took the stock d80230b kdz, extracted system. Made the
              appropriate modifications to run on d800 (basically my ROM patch).
              Then I gutted the thing by removing just about everything I could
              (see 3rd post for list of what is/isn't removed). I've been
              running this for a few days and haven't come across anything that
              is broken. On first boot I think there are only something like
              66-68 apps, and the app drawer is virtually empty.
            </p>
            <p>
              I added Root and ES File Explorer (because I took stock file
              explorer out).
            </p>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card title="What This Isn't">
            <p>No extra mods!</p>
            <p>No customization!</p>
            <p>
              Idea was to keep fully stock experience, just remove all the JUNK!
            </p>
            <p>
              Wanted to make this to be a good option for using Dorimanx Kernel.
            </p>
          </Card>
        </ColumnHalf>
      </Row>

      <Row>
        <ColumnHalf>
          <Card title='Installation'>
            <p>I recommend a full wipe in TWRP.</p>
            <p>
              <span className='text-danger font-weight-bold'>CAUTION:</span> If you
              don't have TWRP 2.8.7.1, your internal storage may not get
              formatted correctly, and ROM won't boot!
            </p>
            <p>
              To install ROM, just flash the zip! (Note: The zip isn't signed.)
              My zip flashes everything you need for the ROM to work correctly.
            </p>
            <p>
              Recommended: Flash @dorimanx kernel after install. My zip includes
              stock 30f kernel.
            </p>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card title='Go Back to KitKat ROM'>
            <ol className='list-group ml-3'>
              <li>
                Boot into recovery, flash my KK bootloader zip from my
                bootloaders page. (I recommend 20y.)
              </li>
              <li>
                (2) Reflash KK ROM/Kernel/Modem as normal. (Don't forget Modem!)
              </li>
              <li>Wipe data, dalvik, and cache.</li>
              <li>Reboot.</li>
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

export default StrippedROMPage;
