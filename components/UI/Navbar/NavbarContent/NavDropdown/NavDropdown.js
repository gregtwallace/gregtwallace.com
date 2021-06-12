const NavDropdown = (props) => {
  return (
    <li className='nav-item dropdown'>
      <a
        className='nav-link dropdown-toggle'
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
