// Reload the download dropdown and table
function genDownloadSection() {
  var urlParams = new URLSearchParams(window.location.search);
  $("#download-content").load("/_include/scripts/lg-g2/g2-twrp/gen_download_section.php" + "?version=" + urlParams.get('version'), function() {
    postDownloadGen();
  });
}

// 'activate' the download table content
function postDownloadGen() {
  // Reload when clicking a version
  $(".twrp-version-link").click(function() {
    // Need this if condition to truncate the html comment if we re-click the active version (because it will have a span on it)
    if ( $(this).html().includes("<span") ) {
      var thisVersion = $(this).html().substr(0, $(this).html().indexOf("<"));
    }
    else {
      var thisVersion = $(this).html();
    }
    history.pushState("", "", "?version=" + thisVersion + "#download-section");
    genDownloadSection();
  });

  // Mark active after loading
  $(function() {
    var activeVersionId = "#" + (twrpVersionNumber).toString().split('.').join('') + "-twrpver-dropdown"; // again need to remove periods due to jQuery
    markAsActive(activeVersionId);
  });

  afterPageLoad();
}
