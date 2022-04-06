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
    href: 'https://u.pcloud.link/publink/show?code=kZVPSfXZAR8LFhE8HcYxVIvGTWGUD8T5DOok',
  },
];

const DorimanxSELinuxPage = () => {
  return (
    <Fragment>
      <Head>
        <title>SELinux for Dorimanx - LG G2 - Greg T. Wallace</title>
        <meta
          name='description'
          content='Dorimanx kernel is a great kernel for stock G2 ROMs. However, by default SELinux
          is disabled. This re-enables SELinux.'
        />

        <GoogleAdsHead />
      </Head>

      <Jumbotron
        title='Dorimanx LP Kernel SELinux Enable Script'
        lead='This enables SELinux on Dorimanx kernel, which is disabled by default.'
        paragraph='Supports all G2 models supported by Dorimanx.'
        button1='Download'
        button1_href='#download-section'
        button2='More on XDA'
        button2_href='https://forum.xda-developers.com/t/dorimanx-lp-v2-9-selinux-enabler-script-to-enable-selinux.3134013/'
        button2_target='_blank'
      />

      <GoogleAd />

      <Row>
        <ColumnHalf>
          <Card title='What This Is'>
            <p>
              As of Dorimanx Lollipop Kernel version 2.9, kernel defaults to
              completely disabled SELinux. This is done via the kernel command
              line. Dorimanx created a script to change the command line back
              and forth, thus turning SELinux on/off.
            </p>
            <p>
              With this change, you can get some off loss of /data setting if
              you boot with SELinux off and then turn it ON and reboot. The way
              around this would be to enable SELinux before doing first boot.
            </p>
            <p>
              By flashing this script after the kernel, you can avoid the data
              loss by avoiding the boot with SELinux off.
            </p>
          </Card>
        </ColumnHalf>
        <ColumnHalf>
          <Card title='Installation'>
            <h6>Current kernel versions (script version 1.2)</h6>
            <p>
              <ol className='list-group ml-3'>
                <li>
                  Download the script you want. There is a separate script for
                  Enforcing or Permissive.
                </li>
                <li>Flash Dorimanx LP Kernel (version &gt;= 8.0)</li>
                <li>Flash the script</li>
                <li>Reboot</li>
              </ol>
            </p>
            <h6>Old kernel versions (script version 1.1)</h6>
            <p>
              <ol className='list-group ml-3'>
                <li>
                  Flash Dorimanx LP Kernel (version &gt;= 2.9, and &lt; 8.0)
                </li>
                <li>Flash this script</li>
                <li>
                  Reboot
                  <br />
                  <strong>Note: </strong>SELinux will default to permissive in
                  version 1.1 of the script.
                </li>
              </ol>
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

export default DorimanxSELinuxPage;
