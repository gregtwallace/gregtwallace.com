const GoogleAdsHead = () => {
  // if not production, set ads to test mode
  if (process.env.NODE_ENV !== 'production') {
    return (
      <script
        async
        data-adbreak-test='on'
        src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'
        crossorigin='anonymous'
      ></script>
    );
  }

  // production ads
  return (
    <script
      async
      src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'
      crossorigin='anonymous'
    ></script>
  );
};

export default GoogleAdsHead;
