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
    href: 'https://u.pcloud.link/publink/show?code=kZ5TSfXZSb2xwyuae6uH5wUlRg5AuLkS9Ooy',
  },
];

const ROMPatchPage = () => {
  return (
    <Fragment>
      <Head>
        <title>d800 ROM Patch - LG G2 - Greg T. Wallace</title>
        <meta
          name='description'
          content='Most LG G2 stock ROMs can be converted to d800 ROMs. This replaces the necessary
          files to convert non-d800 ROMs to d800 ROMs.'
        />

        <GoogleAdsHead />
      </Head>

      <Jumbotron
        title='d800 Lollipop ROM Patch'
        lead='This patch turns other LG G2 variant Lollipop ROMs into d800 ROMs.'
        paragraph2='Supports Model d800 ONLY!'
        button1='Download'
        button1_href='#download-section'
        button2='More on XDA'
        button2_href='https://forum.xda-developers.com/att-g2/development/stock-patch-stock-g2-rom-att-t3124809'
        button2_target='_blank'
      />

      <GoogleAd />

      <Row>
        <ColumnHalf>
          <Card title='What This Is'>
            <p>
              This patch can be flashed after flashing a full non-d800 ROM (
              <span className='text-danger'>
                DO NOT REBOOT AFTER FLASHING A NON-D800 ROM, even into recovery!
              </span>
              ) It changes the appropriate system files to the d800 variant
              version, as well as makes the proper build.prop changes. Note: If
              you use a vs980, ls980, l01f, or f320 specific ROM, there may be
              additional build.prop changes that need to be made. I didn't add
              all those because most of the development is on d80* models. Even
              if it is specific to these other models, patch will likely work
              just fine.
            </p>
            <p>
              I took the basic idea from @dev>null (
              <a
                href='http://forum.xda-developers.com/showpost.php?p=60712439&postcount=553'
                target='_blank'
              >
                see here
              </a>
              ) I had previously dumped all of our stock, d80030f partitions. I
              took those dumps and combined them with the basic gist of this
              other patch dev>null made.
            </p>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card title='What Changes This Makes'>
            <ul className='list-group ml-3'>
              <li>
                Your entire bootloader is replaced. (a hybrid of 20y and 30f is
                applied)
              </li>
              <li>Stock lollipop 30f modem/baseband is installed.</li>
              <li>
                Stock lollipop 30f boot image, that has been bumped, is
                installed.
              </li>
              <li>
                Variant specific /system files are deleted. Then they are
                replaced with the d800 30f version of those files.
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
                Boot into recovery, flash your desired ROM. (for my test, I used
                a d802 ROM){' '}
                <span className='text-danger'>
                  DO NOT REBOOT RECOVERY, DO NOT!!!! If your ROM asks you to
                  reboot after install, DO NOT!!!!!
                </span>
              </li>
              <li>Flash this patch.</li>
              <li>That's it, you're done! It is okay to reboot now.</li>
              <p>
                <strong>Note:</strong> Some ROMs might replace your /recovery
                partition, in which case you should re-flash your recovery
                before rebooting.
              </p>
            </ol>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card title='Troubleshooting'>
            <h6>SELinux / Bootloop</h6>
            <p>
              This patch properly sets permissions on the files it replaces.
              That being said, the boot.img in this patch is set to selinux
              ENFORCING. This means if the ROM you flashed does not have proper
              support for selinux to begin with, you'll get a boot loop, or hang
              on the glowing notification LED. Go yell at your ROM dev to fix
              it, or flash a boot.img that has selinux PERMISSIVE.
            </p>
            <h6>ROMs for models other than d80*</h6>
            <p>
              There are some additional build.prop changes that might need to be
              made if the ROM you want to use is f320/ls980/vs980/l01f. There
              isn't much development on ROMs specific to those models. I'll
              probably release a version 2 of the patch, eventually, to make
              these extra tweaks. However, it should work fine as is! The big
              exception is l01f ROMs. These ROMs are missing NFC files, so
              either NFC won't work, or the whole thing will fail.
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

export default ROMPatchPage;
