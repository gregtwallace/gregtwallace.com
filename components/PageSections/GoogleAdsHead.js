import { Fragment } from 'react';

const GoogleAdsHead = () => {

  // if not production, set ads to test mode
  if (process.env.NODE_ENV !== 'production') {
    <Fragment>
      <script
        async
        data-adbreak-test='on'
        src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'
      ></script>
    </Fragment>;
  }

  // production ads
  return (
    <Fragment>
      <script
        async
        src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'
      ></script>
    </Fragment>
  );
};

export default GoogleAdsHead;
