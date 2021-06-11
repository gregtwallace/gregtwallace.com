import Link from 'next/link';

const NavItem = (props) => {
  return (
    <li className='nav-item'>
    <Link href={props.href}>
      <a className='nav-link' target={props.target}>
        {props.children}
      </a>
    </Link>
  </li>
  );
};

export default NavItem;