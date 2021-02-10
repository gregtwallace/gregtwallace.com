<?php

#### This file to be called directly via a clickable link
#### Format: download.php?file=<filename.zip>&type=<project_type>&version=<file version>

ignore_user_abort(true);
set_time_limit(0); // disable the time limit for this script

### INCLUDES ###

# Hosted Files Root
$file_dir = $_SERVER['DOCUMENT_ROOT']."/_hosted_files";

# Errors
$error_dir = ($_SERVER['DOCUMENT_ROOT']."/_include/errors/download");
$invalidlink_html =  $error_dir . "/invalidlink.php";
$fileproblem_html =  $error_dir . "/badfile.php";

# hit_counter add_a_hit link
$hit_add_a_hit = $_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/add_a_hit.php";


#########################

# Variables from visitor url
# The file we pass in through the url
$file_name = $_GET["file"];
$file_type = $_GET["type"];
$file_version = $_GET["version"];

#### Actual Script

### Don't do anything if we don't get all three parameters
if ( $file_name == NULL || $file_type == NULL || $file_version == NULL ){
	include $invalidlink_html;
	exit;
}

# Put the file directory together
$file = $file_dir . "/" . $file_type . "/" . $file_version . "/" . $file_name;

if (file_exists($file)) {

    header('Content-Description: File Transfer');
    header('Content-type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));

	include ($hit_add_a_hit);

	ob_clean();
    flush();
    readfile($file);
}
else { // If file doesn't exist
	include($fileproblem_html);
}

?>
