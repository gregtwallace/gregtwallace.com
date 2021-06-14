const Card = (props) => {
  var cardImage = null;

  if (props.imageSrc) {
    cardImage = (
      <img
        className='card-img-top'
        src={props.imageSrc}
        alt={props.imageAlt}
      />
    );
  };

  return (
    <div className='card h-100'>
      {cardImage}
      <div className='card-body'>
        <h2 className='h3'>{props.title}</h2>
        {props.children}
      </div>
    </div>
  );
};

export default Card;
