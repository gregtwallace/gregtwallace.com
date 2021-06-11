import NavItem from './NavItem';
import NavDropdown from './NavDropdown/NavDropdown';
import NavDropItem from './NavDropdown/NavDropItem';
import NavDropDivide from './NavDropdown/NavDropDivide';

const NavbarContent = () => {
  return (
    <div className='collapse navbar-collapse' id='navbarSupportedContent'>
      <ul className='navbar-nav mr-auto'>
        <NavItem href='/'>Home</NavItem>

        <NavDropdown name='LG G2'>
          <NavDropItem href='/lg-g2/g2-twrp'>
            TWRP w/ Thermal Control and F2FS
          </NavDropItem>

          <NavDropDivide />

          <NavDropItem href='/lg-g2/d80230b-rom'>
            d80230b Stripped Lollipop Stock ROM
          </NavDropItem>
          <NavDropItem href='/lg-g2/d800-rom-patch'>
            d800 Lollipop ROM Patch
          </NavDropItem>
          <NavDropItem href='/lg-g2/d800-modems'>
            d800 Modems (Radios)
          </NavDropItem>
          <NavDropItem href='/lg-g2/d800_d801-bootloaders'>
            d800/1 Bootloaders
          </NavDropItem>

          <NavDropDivide />

          <NavDropItem href='/lg-g2/dorimanx-selinux'>
            Dorimanx SELinux Enabler
          </NavDropItem>
          <NavDropItem href='/lg-g2/aroma-binaries'>AROMA Binaries</NavDropItem>
        </NavDropdown>

        <NavDropdown name='Misc. Projects'>
          <NavDropItem href='/portfolio/tic-tac-toe'>Tic-Tac-Toe</NavDropItem>
        </NavDropdown>

        <NavDropdown name='My Github'>
          <NavDropItem href='https://github.com/gregtwallace' target='_blank'>
            Greg T. Wallace
          </NavDropItem>
          <NavDropItem href='https://github.com/blastagator' target='_blank'>
            blastagator
          </NavDropItem>
        </NavDropdown>

        <NavItem
          href='https://www.linkedin.com/in/gregtwallace'
          target='_blank'
        >
          LinkedIn
        </NavItem>
        <NavItem href='/donate'>Donate</NavItem>
        <NavItem href='mailto:greg@gregtwallace.com'>Contact</NavItem>
      </ul>
    </div>
  );
};

export default NavbarContent;
