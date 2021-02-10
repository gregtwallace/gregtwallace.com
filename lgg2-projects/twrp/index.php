
<!doctype html>

<html lang="en">

<?php

$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
if ( isset($_GET['version']) ) {
	$twrp_version_string= "?version=" . $_GET['version'];
}
else {
	$twrp_version_string="";
}

header("HTTP/1.1 301 Moved Permanently");
header("Location: $root/lg-g2/g2-twrp/$twrp_version_string");
?>

</html>
