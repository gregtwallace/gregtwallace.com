import Script from 'next/script';

const GoogleAdsHead = () => {
  // default adTest, but if production turn adTest off
  let adTest = 'on';
  if (process.env.NODE_ENV === 'production') {
    adTest = undefined;
  }

  return (
    <Script
      id='Adsense-Script'
      async
      onError={(e) => {
        console.error('Script failed to load', e);
      }}
      strategy='afterInteractive'
      data-adbreak-test={adTest}
      src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9849738621238699'
      crossOrigin='anonymous'
    ></Script>
  );
};

export default GoogleAdsHead;
