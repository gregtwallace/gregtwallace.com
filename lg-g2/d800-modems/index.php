<!doctype html>

<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/lg-g2/header.html"; include_once($path); ?>

    <title>d800 Modems - LG G2 - Greg T. Wallace</title>
    <meta name="description" content="Prepackaged modems (radios) for LG G2, model d800.">

  </head>

  <body>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container">
      <div class="jumbotron">
        <h1 class="display-4">d800 Modems</h1>
        <p class="lead ">These are the stock modems/basebands, packaged as flashable zips.</p>
        <hr class="my-4">
        <p class="text-danger">Supports Model d800 ONLY!</p>
        <a class="btn btn-primary btn-md mr-1 mb-1" href="#download-section" role="button">Download</a>
        <a class="btn btn-secondary btn-md mr-1 mb-1" href="https://forum.xda-developers.com/att-g2/development/modems-att-stock-modems-t3106221" role="button" target="_blank">Modems on XDA</a>
        <a class="btn btn-secondary btn-md mr-1 mb-1" href="https://forum.xda-developers.com/att-g2/development/modem-kk-modem-patched-10d-radio-t2863727" role="button" target="_blank">Modded Modem on XDA</a>
      </div>

      <!-- Responsive Display Ad - START -->
      <div class="container mb-2">
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-9849738621238699"
             data-ad-slot="4113761759"
             data-ad-format="auto"
             data-full-width-responsive="true"
             >
        </ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
      <!-- Responsive Display Ad - END -->

      <div class="row mb-3">
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>What this is:</h5>
              <p>These are flashable packages that install stock basebands/modems. There is a zip for each stock d800 ROM.</p>
              <h6>Modded KK Radio</h6>
              <p>The radio contained in the 20c KK modem image has an issue with SMS messages being delayed.  The modded modem patches in the old radio file to correct the bug. However,
                  since the new modem files are kept, sensors in 20c based KK ROMs continue to work.
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>What changes this makes:</h5>
              <p>The only change this makes is to flash the relevant modem partition.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>Installation:</h5>
              <ol class="list-group">
                <li>Boot into recovery, flash your desired baseband/modem.</li>
                <li>Reboot into ROM</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>Troubleshooting:</h5>
              <h6>Compatibility</h6>
              <p>Your ROM must support the baseband you flash. A mismatch will result in certain sensors not working (e.g. GPS) or
              even worse, you may end up in a bootloop. Only flash the baseband recommended by your ROM developer.</p>
              <p>You can't just use the newest version to "fix" things.</p>
              <h6>Modded KK Modem</h6>
              <p>ROMs that require the 20c KK Modem (for rotation to work) cause SMS messages to randomly get stuck, causing ~2 minute delay when sending. The
                modded modem resolves this issue while keeping sensors fully functional.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <h5 id="download-section">Download</h5>
      <p class="text-danger">Please do not repost without permission. Thank you!</p>
      <div class="table-responsive">

        <!-- Responsive Display Ad - START -->
        <div class="container mb-2">
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-9849738621238699"
               data-ad-slot="4113761759"
               data-ad-format="auto"
               data-full-width-responsive="true"
               >
          </ins>
          <script>
               (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <!-- Responsive Display Ad - END -->

        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Mirror</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>
                <a class="btn btn-sm btn-primary" href="https://u.pcloud.link/publink/show?code=kZSMSfXZUa4hMDIP8xuM93LDacROQmLboRiy" target="_blank" role="button">pCloud</a>
              </td>
            </tr>
          </tbody>
        </table>

        <!-- Responsive Display Ad - START -->
        <div class="container mb-2">
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-9849738621238699"
               data-ad-slot="4113761759"
               data-ad-format="auto"
               data-full-width-responsive="true"
               >
          </ins>
          <script>
               (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        <!-- Responsive Display Ad - END -->

      </div> <!-- Responsive Table Container -->

    </div> <!-- Download Container -->

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/javascript.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/footer.html"; include_once($path); ?>

  </body>
</html>
