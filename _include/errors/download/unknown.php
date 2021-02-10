<!doctype html>

<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>
  </head>

  <body>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container">
      <h1>Unknown Error</h1>
      <p>There was an unknown error. Try again later.</p>
      <p>Contact the administratior if this error persists.</p>
    </div>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/footer.html"; include_once($path); ?>

  </body>
</html>
