import Link from 'next/link';

import { Fragment } from 'react';

const NavbarBrand = (props) => {
  return (
    <Fragment>
      <img
        src={props.image_src}
        width='40px'
        height='40px'
        alt={props.image_alt}
      />
      <Link href='/' className='navbar-brand ml-2'>
        {props.children}
      </Link>
    </Fragment>
  );
};

export default NavbarBrand;
