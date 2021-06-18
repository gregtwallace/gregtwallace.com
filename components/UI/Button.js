const Button = (props) => {
  // default to a primary button but allow override
  let buttonColorClass = 'btn-primary';
  if (props.color) {
    buttonColorClass = 'btn-' + props.color;
  }
  const buttonClasses = 'btn ' + buttonColorClass;

  // update class names
  let buttonProps = {
    ...props,
    className: buttonClasses
  }
  // remove children from being passed as properties to the rendered element
  delete buttonProps.children;

  // return a link if using a button as a link
  if (props.href) {
    return (
      <a {...buttonProps}>
        {props.children}
      </a>
    );
  }

  // to-do - button element
  return (
    <button {...buttonProps}
    >
      {props.children}
    </button>
  );
};

export default Button;
