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
              <th scope="col">Mirror</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>
                <a class="btn btn-sm btn-primary" href="https://u.pcloud.link/publink/show?code=kZvnSfXZzgiSfSNCTOHCOfv29nmg55JCy6hV" target="_blank" role="button">pCloud</a>
              </td>
            </tr>
          </tbody>
        </table>

        <div id="download-notes" class="container">
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
