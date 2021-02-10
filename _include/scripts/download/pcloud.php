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
$dlpcloud_root_dir = "/Shares/XDA_Share";

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

#### Actual Script

# Don't do anything if we don't get all three parameters
if ( !(isset($_GET["file"])) || !(isset($_GET["type"])) || !(isset($_GET["version"])) ){
	include $dlpcloud_invalidlink_html;
	exit;
}

# Variables from visitor link
# The file we pass in through the url
$file_name = $_GET["file"];
$file_type = $_GET["type"];
$file_version = $_GET["version"];

# Put the file directory together
$dir_prefix = $dlpcloud_root_dir . "/" . $file_type . "/" . $file_version;

# Open SQL DB Connection ($sql_conn) (needed for monitoring linkids)
include ($_SERVER['DOCUMENT_ROOT']."/_include/scripts/connect_local_mysql.php");

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
unset($digest);
unset($passworddigest);

echo $userinfo_json["result"];

if ( !isset($userinfo_json["result"]) || $userinfo_json["result"] != 0){		# If pCloud API login failed, error and stop
	unset($userinfo_json);
	curl_close($curl);
	#redirect to error page
	include $dlpcloud_loginfail_html;
}


## Check for successful API login
else {						# Successful API login ("result" = 0)
	$auth_token = $userinfo_json["auth"];
	unset($userinfo_json);

/*		DEBUGGING	Displays current auth_token and list of active auth tokens.  DEBUGGING

	//echo $auth_token."<br> <br>";

	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $dlpcloud_api_url."listtokens",
		CURLOPT_USERAGENT => $dlpcloud_curl_useragent,
		CURLOPT_POST => 1,
		CURLOPT_POSTFIELDS => array(
			auth => $auth_token
		),
	));
	echo curl_exec($curl)."<br> <br>";
*/

	## Step 4a: Delete any expired links for this file
	# Find Public Links, that are expired, and are for this file
	$unix_time = time();
	$query = "SELECT * FROM $table WHERE $field_file_name = '$file_name' ORDER BY $field_linkid ASC";
	$result = mysqli_query($sql_conn, $query);
	$result_quantity = $result->num_rows;
	echo "<br>" . $result_quantity . "<br>";

	# Delete existing public links
	for ( $x = 0; $x < $result_quantity; $x++ ) {
		# Select oldest result
		$query = "SELECT * FROM $table WHERE $field_file_name = '$file_name' ORDER BY $field_linkid ASC LIMIT 1";
		$result = mysqli_query($sql_conn, $query);
		$result_val = mysqli_fetch_object($result);
		$linkid_to_delete = $result_val->$field_linkid;
		echo "<br>" . $linkid_to_delete . "<br>";

		# Delete the link from mysql
		$query = "DELETE FROM $table WHERE $field_file_name = '$file_name' ORDER BY $field_linkid ASC LIMIT 1";	// Use LIMIT 1 and the loop, so pCloud can be updated on each deletion
		$result = mysqli_query($sql_conn, $query);

		# Remove download quantity cap before deleting (it seems pcloud has a bug when remaking the link) - this is to do some cleanup work
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $dlpcloud_api_url."changepublink",
			CURLOPT_USERAGENT => $dlpcloud_curl_useragent,
			CURLOPT_POST => 1,
			CURLOPT_POSTFIELDS => array(
				'auth' => $auth_token,
				'linkid' => $linkid_to_delete,
				'maxdownloads' => 0
			),
		));
		//echo curl_exec($curl)."<br> <br>";
		curl_exec($curl);

		# Delete linkid from pCloud
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $dlpcloud_api_url."deletepublink",
			CURLOPT_USERAGENT => $dlpcloud_curl_useragent,
			CURLOPT_POST => 1,
			CURLOPT_POSTFIELDS => array(
				'auth' => $auth_token,
				'linkid' => $linkid_to_delete
			),
		));
		//echo curl_exec($curl)."<br> <br>";
		curl_exec($curl);
	}


	## Step 4: Obtain the direct download link
	# Link will only survive 30 seconds
	$expire_time_unix = $unix_time + 25;

// WARNING: Do not set a max downloads -- causes pcloud api fuck ups all over
	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $dlpcloud_api_url."getfilepublink",
		CURLOPT_USERAGENT => $dlpcloud_curl_useragent,
		CURLOPT_POST => 1,
		CURLOPT_POSTFIELDS => array(
			'auth' => $auth_token,
			'path' => $dir_prefix."/".$file_name,
			'expire' => $expire_time_unix
		),
	));

	$testing_debug = curl_exec($curl);
	echo $testing_debug;
	$filelink_json = json_decode($testing_debug, true);

	## Check validity of file
	if ($filelink_json["result"] == 0) {				# We got a good link!
		$filelink_url = $filelink_json["link"];
		echo $filelink_url;
		$filelink_id = $filelink_json["linkid"];

		// Fix buggy pcloud links by removing download count cap
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $dlpcloud_api_url."changepublink",
			CURLOPT_USERAGENT => $dlpcloud_curl_useragent,
			CURLOPT_POST => 1,
			CURLOPT_POSTFIELDS => array(
				'auth' => $auth_token,
				'linkid' => $filelink_id,
				'maxdownloads' => 0
			),
		));
		//echo curl_exec($curl)."<br> <br>";
		curl_exec($curl);

		# Do -NOT- redirect here, need to let the script continue & do logout
		// echo $filelink_url."<br> <br>";

		## Log our valid link in mysql db
		$query = "INSERT INTO `$table` (`$field_linkid`, `$field_file_name`, `$field_unix_expiration`) VALUES ('$filelink_id', '$file_name', '$expire_time_unix')";
		$result = mysqli_query($sql_conn, $query);

		unset($filelink_json);
	}

	else {
		# Parameters to pass to the error page
		$errno = $filelink_json["result"];
		$errname = $filelink_json["error"];
		unset($filelink_json);

		if ($errno == 1004 || $errno == 2002 || $errno == 2009 || $errno == 2010) {
			# If pCloud returns a file error
			# 1004 = no file or path, 2002 = part of path is missing, 2009 = file not found, 2010 = invalid path
			include $dlpcloud_fileproblem_html;
		}

		else {		# If pCloud returns any other error
			include $dlpcloud_unknownerror_html;
		}

	}

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

	## If we succefully got a download link, do the redirect here, now that everything is closed out
	if (isset($filelink_url) == true){

		# Increment the download hit counter
		include ($hit_add_a_hit);

		# Redirect to the actual download
		header("Location: " . $filelink_url);
		//echo "<br>" . $filelink_url;

	}

}


?>
