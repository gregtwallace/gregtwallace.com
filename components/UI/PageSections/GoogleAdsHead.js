import { Fragment } from 'react';

const GoogleAdsHead = () => {
  let adTesting = 'off';

  if ( process.env.NODE_ENV !== "production" ) {
    console.log(process.env.NODE_ENV)
    adTesting = 'on';
  };

  return (
    <Fragment>
      <script
        async
        data-adbreak-test={adTesting}
        src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'
      ></script>
    </Fragment>
  );
};

export default GoogleAdsHead;
