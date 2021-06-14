const CardWithImage = (props) => {
  return (
    <div className='card h-100'>
      <img
        className='card-img-top'
        src={props.imageSrc}
        alt={props.imageAlt}
      />
      <div className='card-body'>
        <h2 className='h3'>{props.title}</h2>
        {props.children}
      </div>
    </div>
  );
};

export default CardWithImage;
