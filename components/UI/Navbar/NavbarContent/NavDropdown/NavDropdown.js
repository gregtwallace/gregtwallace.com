import { useRouter } from 'next/router';

const NavDropdown = (props) => {
  const router = useRouter();
  const isActive = router.pathname.startsWith(props.hrefParent);

  return (
    <li className='nav-item dropdown'>
      <a
        className={`nav-link dropdown-toggle ${isActive ? 'active' : ''}`}
        href='#'
        role='button'
        data-toggle='dropdown'
        aria-haspopup='true'
        aria-expanded='false'
      >
        {props.name}
      </a>

      <div className='dropdown-menu' aria-labelledby='navbarDropdown'>
        {props.children}
      </div>
    </li>
  );
};

export default NavDropdown;
