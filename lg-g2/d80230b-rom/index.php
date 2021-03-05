<!doctype html>

<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/lg-g2/header.html"; include_once($path); ?>

    <title>d800 Modded ROM - LG G2 - Greg T. Wallace</title>
    <meta name="description" content="This is the stock LG G2 d802 lollipop (30b) ROM converted to d800 with unnecessary components removed
    (i.e. de-bloated).">

  </head>

  <body>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container">
      <div class="jumbotron">
        <h1 class="display-4">Stripped 30b Stock ROM for d800</h1>
        <p class="lead ">This is a stripped down version of the d80230b (Lollipop) stock ROM for d802, patched for d800.</p>
        <hr class="my-4">
        <p class="text-danger">Supports Model d800 ONLY!</p>
        <a class="btn btn-primary btn-md mr-1 mb-1" href="#download-section" role="button">Download</a>
        <a class="btn btn-secondary btn-md mr-1 mb-1" href="https://forum.xda-developers.com/att-g2/development/rom-stock-lollipop-30b-stripped-t3144195" role="button" target="_blank">More on XDA</a>
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
              <p>I took the stock d80230b kdz, extracted system. Made the appropriate modifications to run on d800 (basically my ROM patch). Then I gutted the thing by removing just about everything I could (see 3rd post for list of what is/isn't removed). I've been running this for a few days and haven't come across anything that is broken. On first boot I think there are only something like 66-68 apps, and the app drawer is virtually empty.</p>
              <p>I added Root and ES File Explorer (because I took stock file explorer out).</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>What this isn't:</h5>
              <p>No extra mods!</p>
              <p>No customization!</p>
              <p>Idea was to keep fully stock experience, just remove all the JUNK!</p>
              <p>Wanted to make this to be a good option for using Dorimanx Kernel.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>Installation:</h5>
              <p>I recommend a full wipe in TWRP.</p>
              <p><span class="text-danger font-weight-bold">CAUTION:</span> If you don't have TWRP 2.8.7.1, your internal storage may not get formatted correctly, and ROM won't boot!</p>
              <p>To install ROM, just flash the zip! (Note: The zip isn't signed.) My zip flashes everything you need for the ROM to work correctly.</p>
              <p>Recommended: Flash @dorimanx kernel after install. My zip includes stock 30f kernel.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>Go Back to KitKat ROM:</h5>
              <ol class="list-group">
                <li>Boot into recovery, flash my KK bootloader zip from my bootloaders page. (I recommend 20y.)</li>
                <li>(2) Reflash KK ROM/Kernel/Modem as normal. (Don't forget Modem!)</li>
                <li>Wipe data, dalvik, and cache.</li>
                <li>Reboot.</li>
              </ol>
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
                <a class="btn btn-sm btn-primary" href="https://www.androidfilehost.com/?fid=817550096634741212" target="_blank" role="button">AFH</a>
                <a class="btn btn-sm btn-primary" href="https://u.pcloud.link/publink/show?code=kZETSfXZObhWyfgnWsHd50311bnHmJM8UBby" target="_blank" role="button">pCloud</a>
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
