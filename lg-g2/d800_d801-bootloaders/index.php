<!doctype html>

<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/lg-g2/header.html"; include_once($path); ?>

    <title>Bootloaders - LG G2 - Greg T. Wallace</title>
    <meta name="description" content="Prepackaged bootloaders for LG G2 models d800 and d801.">

  </head>

  <body>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container">
      <div class="jumbotron">
        <h1 class="display-4">d800 & d801 Bootloaders</h1>
        <p class="lead ">All of the bootloaders for d800 and a couple for d801, packaged as flashable zips.</p>
        <hr class="my-4">
        <p class="text-danger">Ensure you download the correct version for your phone! Improperly flashing your bootloader (or flashing the wrong one) will result in a bricked device.</p>
        <a class="btn btn-primary btn-md mr-1 mb-1" href="#download-section" role="button">Download</a>
        <a class="btn btn-secondary btn-md mr-1 mb-1" href="https://forum.xda-developers.com/att-g2/development/bootloader-flash-jb-kk-bootloader-t2965755" role="button" target="_blank">More on XDA</a>
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
              <p>These are flashable packages that install the bootloader partitions. There is a zip for each stock d800 ROM and a couple for d801.</p>
              <p>Included partitions are aboot, dbi, laf, persist, rpm, sbl1, and tz.</p>
              <p>These packages flash all of your bootloader partitions.  Modem/Radio should be flashed as a separage package.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>File sources:</h5>
              <p>10d & 20c were extracted directly from tot file.</p>
              <p>20y & 30f required flashing my phone to 20c, then did FOTA to 20y and extracted the partitions. Then FOTA to 30f and again extracted the partitions.</p>
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
                <li>Boot into recovery, flash your desired bootloader package.</li>
                <li>Flash other needed zips for compatibility.
                  <br><strong>Note: </strong>This is your responsibility.  If you do not flash a correct combination, you will brick your phone.</li>
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
              <p>You muse ensure your ROM, boot, recovery, and modem/radio partitions are all compatible with the bootloader you flash.</p>
              <p>You can't just use the newest version to "fix" things.</p>
              <h6>What is your current bootloader?</h6>
              <p>There are really only two ways to know for sure.  Either flash a bootloader package or manually extract your bootloader partitions and examine the files.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <h5 id="download-section">Download</h5>
      <p class="text-danger">Please do not repost without permission. Thank you!</p>

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

      <div class="table-responsive">

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
              <th scope="row">d800 10d (JB)</th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootstack-d800-JB_10d-v1.1-blastagator-signed.zip&type=bootloader&version=d800" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=bootstack-d800-JB_10d-v1.1-blastagator-signed.zip&type=bootloader&version=d800" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="a7b2839f0cdd6fbfd5d6917a26541fc6">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootstack-d800-JB_10d-v1.1-blastagator-signed.zip.md5&type=bootloader&version=d800" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "bootstack-d800-JB_10d-v1.1-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
            <tr>
              <th scope="row">d800 20c (KK)</th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootstack-d800-KK_20c-v1.1-blastagator-signed.zip&type=bootloader&version=d800" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=bootstack-d800-KK_20c-v1.1-blastagator-signed.zip&type=bootloader&version=d800" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="5dfebc87b3470a0dade6c167e4d4c0f3">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootstack-d800-KK_20c-v1.1-blastagator-signed.zip.md5&type=bootloader&version=d800" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "bootstack-d800-KK_20c-v1.1-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
            <tr>
              <th scope="row">d800 20y (KK)</th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootstack-d800-KK_20y-v1.1-blastagator-signed.zip&type=bootloader&version=d800" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=bootstack-d800-KK_20y-v1.1-blastagator-signed.zip&type=bootloader&version=d800" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="ee2b9fb0e36046614699b88759c84bf0">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootstack-d800-KK_20y-v1.1-blastagator-signed.zip.md5&type=bootloader&version=d800" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "bootstack-d800-KK_20y-v1.1-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
            <tr>
              <th scope="row">d800 30f (LP) Bumped <a href="#download-note-1"><sup>Note 1</sup></a></th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootstack-d800-LP_30f-bump-v1.1-blastagator-signed.zip&type=bootloader&version=d800" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-lin mr-1 mb-1k" href="/_include/scripts/download/pcloud.php?file=bootstack-d800-LP_30f-bump-v1.1-blastagator-signed.zip&type=bootloader&version=d800" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="0f5281d268f437923e467648f27cce7d">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootstack-d800-LP_30f-bump-v1.1-blastagator-signed.zip.md5&type=bootloader&version=d800" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "bootstack-d800-LP_30f-bump-v1.1-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
            <tr>
              <th scope="row">d800 30f (LP) Stock <a href="#download-note-2"><sup>Note 2</sup></a></th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootstack-d800-LP_30f-v1.1-blastagator-signed.zip&type=bootloader&version=d800" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=bootstack-d800-LP_30f-v1.1-blastagator-signed.zip&type=bootloader&version=d800" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="cfd329dc1710fba3bb52afc1115876d2">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootstack-d800-LP_30f-v1.1-blastagator-signed.zip.md5&type=bootloader&version=d800" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "bootstack-d800-LP_30f-v1.1-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
            <tr>
              <th scope="row">d801 10c (JB)</th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootloader-d801-JB_10c-blastagator-signed.zip&type=bootloader&version=d801" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=bootloader-d801-JB_10c-blastagator-signed.zip&type=bootloader&version=d801" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="d8ac4d56bf7231afd1a7525247687682">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootloader-d801-JB_10c-blastagator-signed.zip.md5&type=bootloader&version=d801" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "bootloader-d801-JB_10c-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
            <tr>
              <th scope="row">d801 20e (KK)</th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootloader-d801-KK_20e-blastagator-signed.zip&type=bootloader&version=d801" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=bootloader-d801-KK_20e-blastagator-signed.zip&type=bootloader&version=d801" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="4b8a656146109cf09d7f61173f728255">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=bootloader-d801-KK_20e-blastagator-signed.zip.md5&type=bootloader&version=d801" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "bootloader-d801-KK_20e-blastagator-signed.zip";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
          </tbody>
        </table>

        <div id="download-notes" class="container ml-1">
          <p id="download-note-1" class="download-note"><strong>Note 1: </strong>To use unofficial lollipop ROM, you need modified boot stack. Bump Lollipop bootloader has lollipop partitions with KK-20y aboot.</p>
          <p id="download-note-2" class="download-note"><strong>Note 2: </strong>Do not use Stock LP if you do not know what you're doing, you will most likely brick!</p>
        </div>

      </div> <!-- Responsive Table Container -->

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

    </div> <!-- Download Container -->

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/javascript.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/footer.html"; include_once($path); ?>

  </body>
</html>
