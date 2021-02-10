<!doctype html>

<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>
  </head>

  <body>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container">
      <h1>Forbidden (403)</h1>
      <p>You don't have permission to access this resource.</p>
      <p>If you believe you have received this message in error, contact the administrator.</p>
    </div>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/javascript.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/footer.html"; include_once($path); ?>

  </body>
</html>
