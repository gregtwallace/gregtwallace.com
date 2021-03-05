<!doctype html>

<html lang="en">

  <head>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/lg-g2/header.html"; include_once($path); ?>

    <title>SELinux for Dorimanx - LG G2 - Greg T. Wallace</title>
    <meta name="description" content="Dorimanx kernel is a great kernel for stock G2 ROMs. However, by default SELinux
    is disabled. This re-enables SELinux.">

  </head>

  <body>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

    <div class="container">
      <div class="jumbotron">
        <h1 class="display-4">Dorimanx LP Kernel SELinux Enable Script</h1>
        <p class="lead ">This enables SELinux on Dorimanx kernel, which is disabled by default.</p>
        <hr class="my-4">
        <p class="text">Supports all G2 models supported by Dorimanx.</p>
        <a class="btn btn-primary btn-md mr-1 mb-1" href="#download-section" role="button">Download</a>
        <a class="btn btn-secondary btn-md mr-1 mb-1" href="https://forum.xda-developers.com/lg-g2/development/dorimanx-lp-script-to-enable-selinux-t3134013" role="button" target="_blank">More on XDA</a>
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
              <p>As of Dorimanx Lollipop Kernel version 2.9, kernel defaults to completely disabled SELinux. This is done via the kernel command line. Dorimanx created a script to change the command line back and forth,
                thus turning SELinux on/off.</p>
              <p>With this change, you can get some off loss of /data setting if you boot with SELinux off and then turn it ON and reboot. The way around this would be to enable SELinux before doing first boot.</p>
              <p>By flashing this script after the kernel, you can avoid the data loss by avoiding the boot with SELinux off.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>Installation:</h5>
              <h6>Current kernel versions (script version 1.2)</h6>
              <p>
                <ol class="list-group">
                  <li>Download the script you want. There is a separate script for Enforcing or Permissive.</li>
                  <li>Flash Dorimanx LP Kernel (version >= 8.0)</li>
                  <li>Flash the script</li>
                  <li>Reboot</li>
                </ol>
              </p>
              <h6>Old kernel versions (script version 1.1)</h6>
              <p>
                <ol class="list-group">
                  <li>Flash Dorimanx LP Kernel (version >= 2.9, and < 8.0)</li>
                  <li>Flash this script</li>
                  <li>Reboot<br>
                    <strong>Note: </strong>SELinux will default to permissive in version 1.1 of the script.</li>
                </ol>
              </p>
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
                <a class="btn btn-sm btn-primary" href="https://u.pcloud.link/publink/show?code=kZVPSfXZAR8LFhE8HcYxVIvGTWGUD8T5DOok" target="_blank" role="button">pCloud</a>
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
