import Button from './Button';

const Jumbotron = (props) => {
  let renderHr = false;
  if (props.paragraph || props.paragraph2 || props.button1 || props.button2) {
    renderHr = true;
  }

  return (
    <div className='jumbotron mb-2'>
      <h1>{props.title}</h1>
      <p className='lead'>{props.lead}</p>
      {renderHr && <hr className='my-4'></hr>}
      {props.paragraph && <p className='text'>{props.paragraph}</p>}
      {props.paragraph2 && <p className='text-danger'>{props.paragraph2}</p>}
      {props.button1 && (
        <Button
          className='mr-2'
          href={props.button1_href}
          target={props.button1_target}
        >
          {props.button1}
        </Button>
      )}
      {props.button2 && (
        <Button
          color='secondary'
          href={props.button2_href}
          target={props.button2_target}
        >
          {props.button2}
        </Button>
      )}
    </div>
  );
};

export default Jumbotron;
