import Image from 'next/image';
import Link from 'next/link';

import { Fragment } from 'react';

const NavbarBrand = (props) => {
  return (
    <Fragment>
      <Image
        src={props.image_src}
        width='40px'
        height='40px'
        alt={props.image_alt}
      />
      <Link href='/'>
        <a className='navbar-brand ml-2'>{props.children}</a>
      </Link>
    </Fragment>
  );
};

export default NavbarBrand;
