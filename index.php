<!doctype html>

<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>

    <title>Greg T. Wallace</title>
    <meta name="description" content="Greg T. Wallace's personal website for android, development, and other fun. This also serves as the
    primary repository for Greg's LG G2 projects.">

    <meta property="og:title" content="Greg T. Wallace" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Greg T. Wallace's personal website for android, development, and other fun." />
    <meta property="og:image" content="https://www.gregtwallace.com/_include/images/og/og_image.png" />
    <meta property="og:url" content="https://www.gregtwallace.com/" />

  </head>

  <body>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container">

      <div class="jumbotron">
        <h1 class="display-4">Welcome!</h1>
        <p class="lead">This is my personal and professional project site.</p>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div class="card h-100">
            <img class="card-img-top" src="/_include/images/home/north_carolina.webp" alt="Photo of Greg T. Wallace standing in the mountains of North Carolina.">
            <div class="card-body">
              <h5>Who I Am</h5>
              <p>I am an IT Professional, lawyer, development enthusiast, Android tinkerer, and self-proclaimed nerd.</p>
              <p>I grew up in Palm Bay, Florida.  I obtained my Bachelor's in Accounting from the University of Florida before attending law school at Florida State
                University.</p>
              <p>I practiced law for a little over three years before starting my career in IT.</p>
              </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card h-100">
            <img class="card-img-top" src="/_include/images/home/workstation-336369_1280.webp" alt="Stock photo of computer, phone, notepad, and teacup.">
            <div class="card-body">
              <h5>Career</h5>
              <p>My skill set bridges the gap between IT, legal, finance, and healthcare.</p>
              <p>I deal with numerous technology related issues (contracts, licensing, budgeting, etc.) primarily by interfacing between my
                company's IT department, legal team, and finance team. While I don't currently practice law, I am licensed to practice law in Florida. I also
                manage two teams within IT (a hardware team and a purchasing team).</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card h-100">
            <img class="card-img-top" src="/_include/images/home/jump-1209647_1280.webp" alt="Stock photo of a person swinging on a rope and launching into a large lake.">
            <div class="card-body">
              <h5>Fun</h5>
              <p>I enjoy visiting theme parks, trying new restaurants, watching football, and playing Xbox.</p>
              <p>In my spare time I supplement my education with online webinars and courses to advance my interests in development and other technology
                topics.
              <p>I also compile TWRP and piece together other Android projects for LG and other Android mobile phones.
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/javascript.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/footer.html"; include_once($path); ?>

  </body>
</html>
