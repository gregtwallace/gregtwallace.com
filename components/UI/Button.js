const Button = (props) => {
  // default to a primary button but allow override
  var buttonColorClass = 'btn-primary';
  if (props.color) {
    buttonColorClass = 'btn-' + props.color;
  }

  const buttonClasses = 'btn ' + buttonColorClass;

  // return a link if using a button as a link
  if (props.href) {
    return (
      <a href={props.href} className={buttonClasses} target={props.target}>
        {props.children}
      </a>
    );
  }

  // to-do - button element
  return <button></button>;
};

export default Button;
