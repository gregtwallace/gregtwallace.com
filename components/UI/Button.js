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
    className: `${buttonClasses}${props.className ? ' ' + props.className : ''}`
  }
  // remove children and color from being passed as properties to the rendered element
  delete buttonProps.children;
  delete buttonProps.color;

  // return a link if using a button as a link
  if (buttonProps.href) {
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
