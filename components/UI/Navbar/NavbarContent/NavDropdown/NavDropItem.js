import Link from 'next/link';

const NavDropItem = (props) => {
  return (
    <Link href={props.href}>
      <a className='dropdown-item' target={props.target}>
        {props.children}
      </a>
    </Link>
  );
};

export default NavDropItem;
