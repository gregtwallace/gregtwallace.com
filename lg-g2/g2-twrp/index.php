<!doctype html>

<html lang="en">

	<head>
		<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/header.html"; include_once($path); ?>
		<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/lg-g2/header.html"; include_once($path); ?>


		<title>TWRP - LG G2 - Greg T. Wallace</title>
    <meta name="description" content="TWRP custom recovery built for all LG G2 models.">

	</head>

	<body>

		<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/navbar.html"; include_once($path); ?>

		<div class="container">
      <div class="jumbotron">
        <h1 class="display-4">TWRP for LG G2</h1>
        <p class="lead ">Built with updated source tree and kernel with thermal control and f2fs built-in.</p>
        <hr class="my-4">
        <p>For all variants.</p>
				<p class="text-danger">For ls980 and vs980, there seem to be issues with signal after booting newer versions of recovery. It is recommend you use an
					older recovery if you have this issue. Please let me know if you have a solution.</p>
        <a class="btn btn-primary btn-md mr-1 mb-1" href="#download-section" role="button">Download</a>
        <a class="btn btn-secondary btn-md mr-1 mb-1" href="https://forum.xda-developers.com/lg-g2/development/twrp-twrp-2-8-0-0-kernel-f2fs-tools-t2898705?nocache=1&nocache=1" role="button" target="_blank">More on XDA</a>
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
              <p>These are the latest builds of TWRP with a customized kernel and f2fs support added in.</p>
							<p>Originally I just wanted a TWRP version that supported f2fs for my d800. However, this grew into a compilation of TWRP for all LG G2 devices.
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>Features:</h5>
              <ul class="list-group">
                <li><span class="text-success">Added: </span>Modified cm-14.1 kernel with thermal and other changes. (as of 3.1.0-0)</li>
								<li><span class="text-success">Added: </span>Full F2FS support, including updated driver and f2fs-tools.<br>
									<strong>Note: </strong>You must NOT have "Use rm -rf instead of formatting." in the Settings page. If you have this option enabled, you will not be able to change partition type.</li>
								<li><span class="text-success">Added: </span>Proper support for f320 & lgl22 External SD Card.</li>
								<li><span class="text-success">Added: </span>Tap to wake.</li>
								<li><span class="text-success">Added: </span>NTFS support.</li>
								<li><span class="text-success">Added: </span>Working decryption support.<br>
								<span class="text-danger">Do not encrypt f2fs - Bootloop of ROM and Recovery will occur!</span></li>
								<li><span class="text-success">Added: </span>AROMA hack to fix graphics.</li>
								<li><span class="text-success">Uses: </span>dr87's auto-select correct panel type.</li>
								<li><span class="text-success">Uses: </span>Bump (So loki isn't needed)</li>
								<li>All of the goodies that already come packed in to the latest version of TWRP!</li>

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
                <li>Get any version of TWRP installed and working. I'd recommend using Autorec to get initial TWRP running.
									This is the <a href="http://forum.xda-developers.com/showthread.php?t=2715496" target="_blank">Link for KK</a>
									There is also an apk for lollipop, this is much preferred! You can use any number of other
									methods to get some version of TWRP installed and running.</li>
								<li>Once you have a working TWRP, simply flash my zip to upgrade to latest version.<br>
									<strong>Note: </strong>If you flash the image directly, the panel detection script will not run!
									This is only important if you have a jdi LCD panel.</li>
							</ol>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card h-100">
            <div class="card-body">
              <h5>Troubleshooting:</h5>
              <p>Always refer to general TWRP bugs.</p>
							<p>I do my best to test all builds, however, I only have model d800 so usage of these builds is <span class="text-danger">at your own risk!</span></p>
							<p>Please report any bugs on the xda thread.</p>
							<p>It is currently known there is a signal issue after installing latest versions of TWRP on ls/vs model. Let me know if you find a solution to this.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


		<div class="container">
			<h5 id="download-section">Download</h5>
			<p class='text-danger'>Please do not repost without permission. Thank you!</p>

			<!-- Div for PHP Page Generation of the Downloads section -->
			<div id="download-content">
					<?php
					if ( isset($_GET['version']) ) {
						$twrp_version_number=$_GET['version'];
					}
					else {
						$twrp_version_number="";
					}
					$path = $_SERVER['DOCUMENT_ROOT']; $path .= ("/_include/scripts/lg-g2/g2-twrp/gen_download_section.php");
					include_once($path); ?>
			</div>

		</div>


		<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/javascript.html"; include_once($path); ?>

    <script src="/_include/js_public/lg-g2/g2-twrp/functions-1.0.js" type="text/javascript"></script>

		<!-- Run the post-dl gen script on the initial page load -->
		<script type="text/javascript">
			postDownloadGen();
		</script>

		<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/_include/page_components/footer.html"; include_once($path); ?>

	</body>
</html>
