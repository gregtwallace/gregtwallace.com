import Row from '../UI/Layout/Row';
import ColumnWhole from '../UI/Layout/ColumnWhole';
import Card from '../UI/Layout/Card';
import Button from '../UI/Button';

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
