import NavbarBrand from './NavbarBrand';
import NavbarToggle from './NavbarToggle';
import NavbarContent from './NavbarContent/NavbarContent';

const Navbar = () => {
  return (
    <div className='container mb-2'>
      <nav className='navbar navbar-expand-lg navbar-dark bg-dark'>
        <NavbarBrand
          image_src='/images/greg_small.webp'
          image_alt='Headshot of Greg T. Wallace'
        >
          GTW
        </NavbarBrand>

        <NavbarToggle />

        <NavbarContent />
      </nav>
    </div>
  );
};

export default Navbar;
