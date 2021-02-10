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
              <th scope="col">Baseband / Radio</th>
              <th scope="col">Mirror</th>
              <th scope="col">MD5</th>
              <th scope="col">Downloads</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">Stock 10d (JB)</th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=d800-10d-modem-blastagator-signed.zip&type=modem&version=d800_original" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=d800-10d-modem-blastagator-signed.zip&type=modem&version=d800_original" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="b2067b82877a6d5b114aa50d497772be">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=d800-10d-modem-blastagator-signed.zip.md5&type=modem&version=d800_original" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "d800-10d-modem-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
            <tr>
              <th scope="row">Stock 10o (JB)</th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=d800-10o-modem-blastagator-signed.zip&type=modem&version=d800_original" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=d800-10o-modem-blastagator-signed.zip&type=modem&version=d800_original" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="d54ae1084654d1221ce30ad8b125e3aa">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=d800-10o-modem-blastagator-signed.zip.md5&type=modem&version=d800_original" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "d800-10o-modem-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
            <tr>
              <th scope="row">Stock 20c (KK)</th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=d800-20c-modem-blastagator-signed.zip&type=modem&version=d800_original" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=d800-20c-modem-blastagator-signed.zip&type=modem&version=d800_original" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="665a25ca88b934ddc72457affed4d294">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=d800-20c-modem-blastagator-signed.zip.md5&type=modem&version=d800_original" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "d800-20c-modem-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
            <tr>
              <th scope="row">Modeed 20c (KK) w/ 10d Radio</th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=d800-bb_20c-radio_10d-blastagator-signed.zip&type=modem&version=d800_custom" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=d800-bb_20c-radio_10d-blastagator-signed.zip&type=modem&version=d800_custom" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="ee19ea25a9904e7ab181f636c47fa144">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=d800-bb_20c-radio_10d-blastagator-signed.zip.md5&type=modem&version=d800_custom" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "d800-bb_20c-radio_10d-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
            <tr>
              <th scope="row">Stock 20y (KK)</th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=d800-20y-modem-blastagator-signed.zip&type=modem&version=d800_original" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=d800-20y-modem-blastagator-signed.zip&type=modem&version=d800_original" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="e0bd7bd87a437e8191214c63ec02b2b0">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=d800-20y-modem-blastagator-signed.zip.md5&type=modem&version=d800_original" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "d800-20y-modem-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
            <tr>
              <th scope="row">Stock 30f (LP)</th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=d800-30f-modem-blastagator-signed.zip&type=modem&version=d800_original" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=d800-30f-modem-blastagator-signed.zip&type=modem&version=d800_original" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="bc2c498923d07b81411dafcb147854b3">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=d800-30f-modem-blastagator-signed.zip.md5&type=modem&version=d800_original" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "d800-30f-modem-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
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
