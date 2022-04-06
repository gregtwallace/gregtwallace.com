import Row from '../Layout/Row';
import ColumnWhole from '../Layout/ColumnWhole';
import Card from '../Layout/Card';
import Button from '../Button';

const DownloadMirrors = (props) => {
  return (
    <Row>
      <ColumnWhole>
        <Card>
          <h5 id='download-section'>Download</h5>
          <p className='text-danger'>
            Please do not repost without permission. Thank you!
          </p>

          {props.mirrors.map((value, index) => {
            return (
              <Button key={index} className='mr-2' href={value.href} target='_blank'>{value.name}</Button>
            );
          })}
        </Card>
      </ColumnWhole>
    </Row>
  );
};

export default DownloadMirrors;
