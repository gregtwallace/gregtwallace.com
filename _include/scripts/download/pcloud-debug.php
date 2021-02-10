<?php

#### This file to be called directly via a clickable link
#### Format: download.php?file=<filename.zip>&type=<project_type>&version=<file version>
#### pCloud directory structure is /XDA_Share/<project_type>/<file_version>/<filename>


#### pCloud Variables
# pCloud API Settings
$dlpcloud_api_url = 'https://api.pcloud.com/';
$dlpcloud_username = 'greg@gregtwallace.com';
include ($_SERVER['DOCUMENT_ROOT']."/_include/scripts/credentials/pcloud.php");
$dlpcloud_curl_useragent = 'gregtwallace.com cURL';

# pCloud Share Root Dir
$dlpcloud_root_dir = "/XDA_Share";

# Errors
$dlpcloud_error_dir = ($_SERVER['DOCUMENT_ROOT']."/_include/errors/download");
$dlpcloud_invalidlink_html = $dlpcloud_error_dir . "/invalidlink.php";
$dlpcloud_loginfail_html = $dlpcloud_error_dir . "/badapi.php";
$dlpcloud_fileproblem_html = $dlpcloud_error_dir . "/badfile.php";
$dlpcloud_unknownerror_html = $dlpcloud_error_dir . "/unknown.php";

# hit_counter add_a_hit link
$hit_add_a_hit = $_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/add_a_hit.php";

# pCloud Public Link Tracking Table
$table = "lgg2_private_scripts_download_pcloud";

## Fields
$field_linkid = "linkid";
$field_file_name = "file_name";
$field_unix_expiration = "unix_expiration";



##########################


# Open SQL DB Connection ($sql_conn) (needed for monitoring linkids)
include ($_SERVER['DOCUMENT_ROOT']."/_include/scripts/connect_local_mysql.php");



$file_name = "twrp-3.3.0-0-d800-bump-blastagator-signed.zip.md5";
$file_type = "twrp";
$file_version = "2019.04.29_(3.3.0-0)";

$dir_prefix = $dlpcloud_root_dir . "/" . $file_type . "/" . $file_version;


## Step 1:  Get a digest
$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => $dlpcloud_api_url."getdigest",
	CURLOPT_USERAGENT => $dlpcloud_curl_useragent,
	CURLOPT_POST => 1,
	CURLOPT_POSTFIELDS => array(
		'username' => $dlpcloud_username
	),
));

$digest_json = json_decode(curl_exec($curl), true);
$digest = $digest_json["digest"];
unset($digest_json);

## Step 2: Calculate password digest
$passworddigest = sha1($dlpcloud_password.sha1($dlpcloud_username).$digest);

## Step 3: Login to get an Auth Token
curl_setopt_array($curl, array(
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => $dlpcloud_api_url."userinfo",
	CURLOPT_USERAGENT => $dlpcloud_curl_useragent,
	CURLOPT_POST => 1,
	CURLOPT_POSTFIELDS => array(
		'getauth' => 1,
		'logout' => 1,
		'username' => $dlpcloud_username,
		'digest' => $digest,
		'passworddigest' => $passworddigest
	),
));

$userinfo_json = json_decode(curl_exec($curl), true);
print_r($userinfo_json);
unset($digest);
unset($passworddigest);

if ($userinfo_json["result"] != 0){		# If pCloud API login failed, error and stop
	unset($userinfo_json);
	curl_close($curl);
	#redirect to error page
	include $dlpcloud_loginfail_html;
}


## Check for successful API login
else {						# Successful API login ("result" = 0)
	$auth_token = $userinfo_json["auth"];
	unset($userinfo_json);

		//DEBUGGING	Displays current auth_token and list of active auth tokens.  DEBUGGING

	//echo $auth_token."<br> <br>";

	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $dlpcloud_api_url."listtokens",
		CURLOPT_USERAGENT => $dlpcloud_curl_useragent,
		CURLOPT_POST => 1,
		CURLOPT_POSTFIELDS => array(
			'auth' => $auth_token
		),
	));
	echo curl_exec($curl)."<br> <br>";


curl_setopt_array($curl, array(
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => $dlpcloud_api_url."listpublinks",
	CURLOPT_USERAGENT => $dlpcloud_curl_useragent,
	CURLOPT_POST => 1,
	CURLOPT_POSTFIELDS => array(
		'auth' => $auth_token,
	),
));

echo curl_exec($curl)."<br> <br>";
curl_exec($curl);



	## Step 5: Logout (so auth_tokens don't pile up)
	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $dlpcloud_api_url."logout",
		CURLOPT_USERAGENT => $dlpcloud_curl_useragent,
		CURLOPT_POST => 1,
		CURLOPT_POSTFIELDS => array(
			'auth' => $auth_token
		),
	));
	curl_exec($curl);
	unset($auth_token);
	#Close curl resource
	curl_close($curl);
}


?>
