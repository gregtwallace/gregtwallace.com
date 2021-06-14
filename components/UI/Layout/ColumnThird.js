const Row = (props) => {
  return (
    <div className='col-sm-4 px-1'>
      {props.children}
    </div>
  );
};

export default Row;
