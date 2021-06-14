const Jumbotron = (props) => {
  return (
    <div className='jumbotron mb-2'>
      <h1>{props.title}</h1>
      <p className='lead'>{props.children}</p>
    </div>
  );
};

export default Jumbotron;
