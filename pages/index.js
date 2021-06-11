import Head from 'next/head';

import Jumbotron from '../components/UI/Jumbotron';

const HomePage = (props) => {
  return (
    <>
      <Head>
        <title>Greg T. Wallace</title>
        <meta
          name='description'
          content="Greg T. Wallace's personal website for android, development, and other fun. This also serves as the
            primary repository for Greg's LG G2 projects."
        />
      </Head>

      <Jumbotron title='Welcome!'>
        This is my personal and professional project site.
      </Jumbotron>

      <div className='row'>
        <div className='col-sm-4'>
          <div className='card h-100'>
            <img
              className='card-img-top'
              src='/images/home/north_carolina.webp'
              alt='Photo of Greg T. Wallace standing in the mountains of North Carolina.'
            />
            <div className='card-body'>
              <h5>Who I Am</h5>
              <p>
                I am an IT Professional, lawyer, development enthusiast, Android
                tinkerer, and self-proclaimed nerd.
              </p>
              <p>
                I grew up in Palm Bay, Florida. I obtained my Bachelor's in
                Accounting from the University of Florida before attending law
                school at Florida State University.
              </p>
              <p>
                I practiced law for a little over three years before starting my
                career in IT.
              </p>
            </div>
          </div>
        </div>
        <div className='col-sm-4'>
          <div className='card h-100'>
            <img
              className='card-img-top'
              src='/images/home/workstation-336369_1280.webp'
              alt='Stock photo of computer, phone, notepad, and teacup.'
            />
            <div className='card-body'>
              <h5>Career</h5>
              <p>
                My skill set bridges the gap between IT, legal, finance, and
                healthcare.
              </p>
              <p>
                I deal with numerous technology related issues (contracts,
                licensing, budgeting, etc.) primarily by interfacing between my
                company's IT department, legal team, and finance team. While I
                don't currently practice law, I am licensed to practice law in
                Florida. I also manage two teams within IT (a hardware team and
                a purchasing team).
              </p>
            </div>
          </div>
        </div>
        <div className='col-sm-4'>
          <div className='card h-100'>
            <img
              className='card-img-top'
              src='/images/home/jump-1209647_1280.webp'
              alt='Stock photo of a person swinging on a rope and launching into a large lake.'
            />
            <div className='card-body'>
              <h5>Fun</h5>
              <p>
                I enjoy visiting theme parks, trying new restaurants, watching
                football, and playing Xbox.
              </p>
              <p>
                In my spare time I supplement my education with online webinars
                and courses to advance my interests in development and other
                technology topics.
              </p>
              <p>
                I also compile TWRP and piece together other Android projects
                for LG and other Android mobile phones.
              </p>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default HomePage;
