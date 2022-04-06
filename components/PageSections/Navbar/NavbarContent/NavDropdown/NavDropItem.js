import Link from 'next/link';
import { useRouter } from 'next/router';

const NavDropItem = (props) => {
  const router = useRouter();
  const isActive = router.pathname === props.href;

  return (
    <Link href={props.href}>
      <a
        className={`dropdown-item ${isActive ? 'active' : ''}`}
        target={props.target}
      >
        {props.children}
      </a>
    </Link>
  );
};

export default NavDropItem;
