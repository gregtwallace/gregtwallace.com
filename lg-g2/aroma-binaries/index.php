<!doctype html>

<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/lg-g2/header.html"; include_once($path); ?>

    <title>AROMA - Greg T. Wallace</title>
    <meta name="description" content="AROMA provides a graphical interface for Android recovery install zips.">

  </head>

  <body>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container">
      <div class="jumbotron">
        <h1 class="display-4">AROMA Binaries</h1>
        <p class="lead ">Known working AROMA binaries.</p>
        <hr class="my-4">
        <p class="text">These binaries work on G2 (and likely many other devices).</p>
        <a class="btn btn-primary btn-md mr-1 mb-1" href="#download-section" role="button">Download</a>
        <a class="btn btn-secondary btn-md mr-1 mb-1" href="https://forum.xda-developers.com/showpost.php?p=66747442&postcount=2591" role="button" target="_blank">More on XDA</a>
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
              <p>Sometimes the g2 has problems with AROMA and the graphics become distorted when AROMA launches.  Swapping the binaries in your zip file to a newer version is often sufficient to fix the problem.
                Known working binaries are contained within this download.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>Installation:</h5>
              <p>If your chosen zip file ["your zip"] has AROMA and it does not work, you need to replace a couple of binary files in your zip.</p>
              <ol class="list-group">
                <li>Download the AROMA Binary zip ["my zip"].</li>
                <li>Open ["your zip"] file.</li>
                <li>Navigate within ["your zip"] to the folder: /META-INF/com/google/android</li>
                <li>Delete the files in ["your zip"]: update-binary & update-binary-installer</li>
                <li>Copy the two files from ["my zip"] into ["your zip"].</li>
              </ol>
              <p>You should now be able to flash ["your zip"].</p>
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
              <th scope="col">Version</th>
              <th scope="col">Mirror</th>
              <th scope="col">MD5</th>
              <th scope="col">Downloads</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <th scope="row">v1.0</th>
              <td>
                <a class="btn btn-sm btn-primary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=cloudy-g2-aroma.rar&type=miscellaneous&version=aroma" role="button">BudgetVM</a>
                <a class="btn btn-sm btn-primary pcloud-dl-link mr-1 mb-1" href="/_include/scripts/download/pcloud.php?file=cloudy-g2-aroma.rar&type=miscellaneous&version=aroma" role="button">pCloud</a>
              </td>
              <td>
                <button type="button" class="btn btn-sm btn-info mr-1 mb-1" data-toggle="popover" data-placement="top" title="" data-content="de5ca1c278cde7f4a89ac1e278f5d8ee">Show</button>
                <a class="btn btn-sm btn-secondary budgetvm-dl-link mr-1 mb-1" href="/_include/scripts/download/budgetvm.php?file=cloudy-g2-aroma.rar.md5&type=miscellaneous&version=aroma" role="button">Download</a>
              </td>
              <td>
                <?php
                  $file_name = "cloudy-g2-aroma.rar";
                  include($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php");
                ?>
              </td>
            </tr>
          </tbody>
        </table>

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
