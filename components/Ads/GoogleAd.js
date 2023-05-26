import { useEffect, useRef } from 'react';

const GoogleAd = () => {
  // ref to avoid re-render in dev (duplicate ad push call = error)
  const pushed = useRef(false);

  useEffect(() => {
    if (typeof window !== 'undefined' && !pushed.current) {
      try {
        pushed.current = true;
        (window.adsbygoogle = window.adsbygoogle || []).push({});
      } catch (e) {
        console.log('failed to push ad: ', e);
      }
    }
  }, []);

  // render border in dev (adTest) since there won't be any ads to see
  let borderClass = '';
  if (process.env.NODE_ENV !== 'production') {
    borderClass = ' border';
  }

  return (
    <div className={'container mb-2' + borderClass}>
      <ins
        className='adsbygoogle'
        style={{ display: 'block' }}
        data-ad-client='ca-pub-9849738621238699'
        data-ad-slot='4113761759'
        data-ad-format='auto'
        data-full-width-responsive='true'
      ></ins>
    </div>
  );
};

export default GoogleAd;
