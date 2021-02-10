<!doctype html>

<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>

    <title>Donate - Greg T. Wallace</title>
    <meta name="description" content="Help buy me keep the site running, or just buy me a beer.">

  </head>

  <body>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container">

      <div class="jumbotron">
        <h1 class="display-4">Donate</h1>
        <p class="lead ">Help cover the costs of hosting this site, or just buy me a beer to say thanks.</p>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div class="card h-100">
            <img class="card-img-top" src="/_include/images/donate/zelle_logo.webp">
            <div class="card-body">
              <h5>Zelle</h5>
              <p>No fees & instant delivery.</p>
              <p><strong>Send via Zelle App to:</strong> greg@gregtwallace.com</p>
              </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card h-100">
            <img class="card-img-top" src="/_include/images/donate/venmo_logo.webp">
            <div class="card-body">
              <h5>Venmo</h5>
              <p>No fees.</p>
              <a href="https://venmo.com/gtwallace" class="btn btn-primary" target="_blank">Venmo Me</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card h-100">
            <img class="card-img-top" src="/_include/images/donate/paypal_logo.webp">
            <div class="card-body">
              <h5>Paypal</h5>
              <p>They steal part of the money, but I'll still be very grateful!</p>
              <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=44ZHKU4BWDUKN" class="btn btn-primary" target="_blank">PayPal Me</a>
            </div>
          </div>
        </div>
      </div>
    </div>

		<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/javascript.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/footer.html"; include_once($path); ?>

  </body>
</html>
