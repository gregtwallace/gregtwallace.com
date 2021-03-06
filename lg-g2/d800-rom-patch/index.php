<!doctype html>

<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/lg-g2/header.html"; include_once($path); ?>

    <title>d800 ROM Patch - LG G2 - Greg T. Wallace</title>
    <meta name="description" content="Most LG G2 stock ROMs can be converted to d800 ROMs. This replaces the necessary
    files to convert non-d800 ROMs to d800 ROMs.">

  </head>

  <body>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container">
      <div class="jumbotron">
        <h1 class="display-4">d800 Lollipop ROM Patch</h1>
        <p class="lead ">This patch turns other LG G2 variant Lollipop ROMs into d800 ROMs.</p>
        <hr class="my-4">
        <p class="text-danger">Supports Model d800 ONLY!</p>
        <a class="btn btn-primary btn-md mr-1 mb-1" href="#download-section" role="button">Download</a>
        <a class="btn btn-secondary btn-md mr-1 mb-1" href="https://forum.xda-developers.com/att-g2/development/stock-patch-stock-g2-rom-att-t3124809" role="button" target="_blank">More on XDA</a>
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
              <p>This patch can be flashed after flashing a full non-d800 ROM (<span class="text-danger">DO NOT REBOOT AFTER FLASHING A NON-D800 ROM, even
                into recovery!</span>) It changes the appropriate system files to the d800 variant version, as well as makes the proper build.prop changes. Note: If you use a vs980, ls980,
                l01f, or f320 specific ROM, there may be additional build.prop changes that need to be made. I didn't add all those because most of the
                development is on d80* models. Even if it is specific to these other models, patch will likely work just fine.</p>
              <p>I took the basic idea from @dev>null (<a href="http://forum.xda-developers.com/showpost.php?p=60712439&postcount=553" target="_blank">see here</a>) I had previously dumped all of our stock, d80030f partitions. I took those dumps and
                combined them with the basic gist of this other patch dev>null made.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>What changes this makes:</h5>
              <ul class="list-group">
                <li>Your entire bootloader is replaced. (a hybrid of 20y and 30f is applied)</li>
                <li>Stock lollipop 30f modem/baseband is installed.</li>
                <li>Stock lollipop 30f boot image, that has been bumped, is installed.</li>
                <li>Variant specific /system files are deleted. Then they are replaced with the d800 30f version of those files.</li>
              </ul>
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
                <li>Boot into recovery, flash your desired ROM. (for my test, I used a d802 ROM)
                  <span class="text-danger">DO NOT REBOOT RECOVERY, DO NOT!!!! If your ROM asks you to reboot after install, DO NOT!!!!!</span></li>
                <li>Flash this patch.</li>
                <li>That's it, you're done! It is okay to reboot now.</li>
                <p><strong>Note:</strong> Some ROMs might replace your /recovery partition, in which case you should re-flash your recovery before rebooting.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>Troubleshooting:</h5>
              <h6>SELinux / Bootloop</h6>
              <p>This patch properly sets permissions on the files it replaces. That being said, the boot.img in this patch is set to selinux ENFORCING.
                This means if the ROM you flashed does not have proper support for selinux to begin with, you'll get a boot loop, or hang on the glowing
                notification LED. Go yell at your ROM dev to fix it, or flash a boot.img that has selinux PERMISSIVE.</p>
              <h6>ROMs for models other than d80*</h6>
              <p>There are some additional build.prop changes that might need to be made if the ROM you want to use is f320/ls980/vs980/l01f. There isn't
                much development on ROMs specific to those models. I'll probably release a version 2 of the patch, eventually, to make these extra tweaks.
                However, it should work fine as is! The big exception is l01f ROMs. These ROMs are missing NFC files, so either NFC won't work, or the
                whole thing will fail.</p>
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
                <a class="btn btn-sm btn-primary" href="https://u.pcloud.link/publink/show?code=kZ5TSfXZSb2xwyuae6uH5wUlRg5AuLkS9Ooy" target="_blank" role="button">pCloud</a>
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
