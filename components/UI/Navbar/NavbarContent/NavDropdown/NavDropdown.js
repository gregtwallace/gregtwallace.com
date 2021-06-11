import Link from 'next/link';

const NavDropdown = (props) => {
  return (
    <li className='nav-item dropdown'>
      <Link href='#'>
        <a
          className='nav-link dropdown-toggle'
          role='button'
          data-toggle='dropdown'
          aria-haspopup='true'
          aria-expanded='false'
        >
          {props.name}
        </a>
      </Link>
      <div className='dropdown-menu' aria-labelledby='navbarDropdown'>
        {props.children}
      </div>
    </li>
  );
};

export default NavDropdown;
