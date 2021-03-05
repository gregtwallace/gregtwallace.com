<!doctype html>
<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>

    <title>Concentration</title>
    <meta name="description" content="A javascript implementation of Concentration.">

    <style>

      .tile {
        width: 25%;
      }
      .tile-inner {
        padding-top: 100%;
        background-color: grey;
      }

    </style>

  </head>

  <body>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container text-center" id="gamecontainer">
      <h1 class="m-1" id="gametitle">Concentration</h1>
      <p>A basic implmentation of Concentration that I wrote in javascript.</p>



    </div>

    <script type="text/javascript">



    </script>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/javascript.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/footer.html"; include_once($path); ?>

  </body>
</html>
