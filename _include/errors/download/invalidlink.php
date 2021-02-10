<!doctype html>

<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>
  </head>

  <body>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container">
      <h1>Invalid Link</h1>
      <p>The download link is malformed. Contact the administratior.</p>
      <p>Contact the administratior and report the link.</p>
    </div>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/footer.html"; include_once($path); ?>

  </body>
</html>
