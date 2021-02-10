<?php

### INCLUDES ###
# Include twrp variables
# TWRP OTF Table
$table = "lgg2_root_twrp";

## Fields
$field_version_number = "version_number";
$field_version_string = "version_string";
$field_version_info_url = "version_info_url";
$field_announcement = "announcement";
$field_current_ver = "current_version";
$field_beta_ver = "beta_version";
$field_disabled = "disabled";
# Variant Array (Lists ALL variants)
$variant_array = array(  //Must match name in mysql
	'd800'     ,
	'd801'     ,
	'd802'     ,
	'd803'     ,
	'f320'     ,
	'l01f'     ,
	'lgl22'    ,
	'ls980'    ,
	'vs980'
);
# Download Mirrors
$key_name = "key_name";
$dl_name = "name";
$field_dl = "sql_field";  // Set mirror to match filed in mysql
$dl_script_path = "script_path";
$target = "link_target";
$dl_mirrors = array(
	"budgetvm" => array(
		$key_name => "budgetvm",
		$dl_name => "BudgetVM",
		$field_dl => "budgetvm_dl",
		$dl_script_path => "/_include/scripts/download/budgetvm.php",
		$target => ""
	),
	"pcloud" => array(
		$key_name => "pcloud",
		$dl_name => "pCloud",
		$field_dl => "pcloud_dl",
		$dl_script_path => "/_include/scripts/download/pcloud.php",
		$target => "_blank"	)
);

# Location of local md5s
$md5_local_location = ($_SERVER['DOCUMENT_ROOT']."/_hosted_files/twrp/");
# Which mirror for MD5 Downloads (match to index name in dl_mirrors)
$md5_download_mirror = "budgetvm";

$show_hit_text = $_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/show_hits_text.php";


#### Variables
# The file we pass in through the url
if ( isset($_GET['version']) ) {
	$twrp_version_number=$_GET['version'];
}
else {
	$twrp_version_number="";
}


//echo $twrp_version_number; // debug

# Open SQL DB Connection ($sql_conn)
include ($_SERVER['DOCUMENT_ROOT']."/_include/scripts/connect_local_mysql.php");

## Step 1:  Figure out version of download to display
// If version != [nothing], determine if the version passed in via the URL is valid (i.e. in the database)
if ( $twrp_version_number != "" ) {
	$query = "SELECT * FROM `$table` WHERE $field_version_number='$twrp_version_number' && $field_disabled != 1 LIMIT 1";
	$result = mysqli_query($sql_conn, $query);
	# If the version is in the table, set the version string and announcement (if there is one)
	if ( mysqli_num_rows($result) > 0 ) {
		$value = mysqli_fetch_object($result);
		// don't set twrp version because it was supplied by user
		$twrp_version_string = $value->$field_version_string;
		$twrp_version_info_url = $value->$field_version_info_url;
		$twrp_announcement = $value->$field_announcement;
	}
	else {
		# If the version isn't in the database, set version to blank
		$twrp_version_number = "";
	}
}
if ( $twrp_version_number == "" ) { // if version blank, pick first current version
	$query = "SELECT * FROM `$table` WHERE $field_disabled != 1 && $field_current_ver = 1 && $field_beta_ver != 1 ORDER BY $field_version_number DESC";
	$result = mysqli_query($sql_conn, $query);
	$result_quantity = $result->num_rows;
	if ($result_quantity > 0) {
		$value = mysqli_fetch_object($result);
		$twrp_version_number = $value->$field_version_number;
		$twrp_version_string = $value->$field_version_string;
		$twrp_version_info_url = $value->$field_version_info_url;
		$twrp_announcement = $value->$field_announcement;
	}
}
if ( $twrp_version_number == "" ) { // if no current versions either, now we set to null
	$twrp_version_number = NULL;
}

// Drop Down Header
echo "<div class='dropdown mb-3'>";
echo "<button class='btn btn-primary dropdown-toggle mr-1 mb-1' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
if ( $twrp_version_number ) {
  echo "Version " . $twrp_version_number;
}
else {
  echo "Select Version";
}
echo "</button>";
echo "<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";

// Dropdown Entries
# Query CURRENT VERSION(S) and print the links
# If BETA is set, OVERRIDE and do NOT put in the CURRENT category
# List current versions
$query = "SELECT * FROM `$table` WHERE $field_disabled != 1 && $field_current_ver = 1 && $field_beta_ver != 1 ORDER BY $field_version_number DESC";
$result = mysqli_query($sql_conn, $query);
$result_quantity = $result->num_rows;
echo "<h6 class='dropdown-header'>Current Versions</h6>";
for ( $x = 0; $x < $result_quantity; $x++ ) {
  $print_version = mysqli_fetch_object($result)->$field_version_number;
  $id_version = strtr($print_version, array('.' => ''));
    // NOTE: Removing the periods because it is a jQuery selector and it messes up the id referenced in jquery code
  echo "<a class='dropdown-item twrp-version-link' id='" . $id_version . "-twrpver-dropdown' href='#download-section'>$print_version</a>";
}

# Check for BETA versions, print heading and links IF needed
$query = "SELECT * FROM `$table` WHERE $field_disabled != 1 && $field_beta_ver = 1 ORDER BY $field_version_number DESC";
$result = mysqli_query($sql_conn, $query);
$result_quantity = $result->num_rows;
if ( $result_quantity != 0 ) {
  echo "<h6 class='dropdown-header'>Beta Versions</h6>";
  for ( $x = 0; $x < $result_quantity; $x++ ) {
    $print_version = mysqli_fetch_object($result)->$field_version_number;
    $id_version = strtr($print_version, array('.' => ''));
    echo "<a class='dropdown-item twrp-version-link' id='" . $id_version . "-twrpver-dropdown' href='#download-section'>$print_version</a>";
  }
}

# Print all remaining versions
echo "<h6 class='dropdown-header'>Older Versions</h6>";
$query = "SELECT * FROM `$table` WHERE $field_disabled != 1 && $field_current_ver != 1 && $field_beta_ver != 1 ORDER BY $field_version_number DESC";
$result = mysqli_query($sql_conn, $query);
$result_quantity = $result->num_rows;

for ( $x = 0; $x < $result_quantity; $x++ ) {
  $print_version = mysqli_fetch_object($result)->$field_version_number;
  $id_version = strtr($print_version, array('.' => ''));
  echo "<a class='dropdown-item twrp-version-link' id='" . $id_version . "-twrpver-dropdown' href='#download-section'>$print_version</a>";
}

echo "</div></div>";
// End of Version Dropdown



// Make the table
if ( $twrp_version_number != NULL ) {

	// Put the announcement in place if it exists
	if ( $twrp_announcement ) {
		echo "<h6>Version Announcement:</h6>";
		echo "<p>" . $twrp_announcement . "</p>";
	}

	// Button for more details on version post
	if ( $twrp_version_info_url ) {
		echo "<a class='btn btn-secondary btn-md mb-3' href=" . $twrp_version_info_url . " role='button' target='_blank'>Version Information</a>";
	}

	echo "
		<!-- Responsive Display Ad - START -->
		<div class='container mb-2'>
			<ins class='adsbygoogle'
					 style='display:block'
					 data-ad-client='ca-pub-9849738621238699'
					 data-ad-slot='4113761759'
					 data-ad-format='auto'
					 data-full-width-responsive='true'
					 >
			</ins>
			<script>
					 (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<!-- Responsive Display Ad - END -->
	";

	echo "<div id='twrp-dl-table' class='table-responsive'>";

  echo "
  <table class='table table-striped' style='position:relative'>
    <thead class='thead-dark'>
      <tr>
        <th scope='col'>File</th>
        <th scope='col'>Mirror</th>
        <th scope='col'>MD5</th>
        <th scope='col'>Downloads</th>
      </tr>
    </thead>

    <tbody>";

  ## Step 6b(1):  SQL to create an array of variants that exist
  # Load one array with indexed results
  $mysqli_query = "SELECT * FROM `$table` WHERE $field_version_number='$twrp_version_number' LIMIT 1";
  $mysqli_result = mysqli_query($sql_conn, $mysqli_query);

  # Result array (has numeric and alpha key names)
  $mysqli_result_array = mysqli_fetch_array($mysqli_result);

  //var_dump($mysqli_result_array); // for debugging

  # Create empty array for our existing variant names
  $existing_variants = array();

  foreach ( $variant_array as $variant ) {
    if ($mysqli_result_array[$variant] == 1) {
      array_push($existing_variants, $variant);
    }
  }

  # Create empty array for existing mirrors
  $existing_mirrors = array();

  # Create an array with enabled mirror key names
  foreach ( $dl_mirrors as $mirror ) {
    if ($mysqli_result_array[$mirror[$field_dl]]) {
      array_push($existing_mirrors, $mirror[$key_name]);
    }
  }

  ## Step 6b(2):  Print a line in the Table for every existing variant
  foreach ( $existing_variants as $variant ) {

    echo "<tr><th scope='row'>";
    # If the variant is d802 or f320, it will get a special relabel
    if ( $variant == "d802") {
      echo "d802/5/6";
    }
    elseif ($variant == "f320") {
      echo "f320*";
    }
    # Else, just use the model name
    else {
      echo $variant;
    }
    echo "</th>";

    # Make a link for every mirror
    //for ( $y = 0; $y < count($existing_mirrors); $y++ ) {
    echo "<td>";
    foreach ( $existing_mirrors as $mirror) {
      echo "<a class='btn btn-sm btn-primary mr-1 mb-1 " . $dl_mirrors[$mirror][$key_name] . "-dl-link' target='" . $dl_mirrors[$mirror][$target] . "' href='" . $dl_mirrors[$mirror][$dl_script_path] . "?file=twrp-" . $twrp_version_number .
      "-" . $variant . "-bump-blastagator-signed.zip&amp;type=twrp&amp;version=" . $twrp_version_string . "' role='button'>" . $dl_mirrors[$mirror][$dl_name] ." </a>";
    }
    echo "</td>\n";

    # MD5
    $md5_local_file_name = $md5_local_location . $twrp_version_string . "/twrp-" . $twrp_version_number . "-" . $variant . "-bump-blastagator-signed.zip.md5";
    echo "<td>";
    if ( file_exists($md5_local_file_name) ) {
      $md5_value = substr( file_get_contents( $md5_local_file_name ), 0, 32);
      echo "<button type='button' class='btn btn-sm btn-info mr-1 mb-1' data-toggle='popover' data-placement='top' title='' data-content='" . $md5_value . "'>Show</button>";
    }
    echo "<a class='btn btn-sm btn-secondary mr-1 mb-1 " . $dl_mirrors[$md5_download_mirror][$key_name] . "-dl-link' target='" . $dl_mirrors[$md5_download_mirror][$target] . "' href='" . $dl_mirrors[$md5_download_mirror][$dl_script_path] . "?file=twrp-" . $twrp_version_number .
    "-" . $variant . "-bump-blastagator-signed.zip.md5&amp;type=twrp&amp;version=" . $twrp_version_string . "' role='button'>Download</a>";
    echo "</td>";

    # Hit counter php code must be run to get the number to print
    echo "<td>";
    $file_name = "twrp-$twrp_version_number-$variant-bump-blastagator-signed.zip";
		include($show_hit_text);
    echo "</td></tr>\n";
  }

  # End the table the same way, every time
//	echo "	<!-- Table End -->\n";
  echo "	</tbody></table>";

	echo "</div>";
}

echo "
	<!-- Responsive Display Ad - START -->
	<div class='container mb-2'>
		<ins class='adsbygoogle'
				 style='display:block'
				 data-ad-client='ca-pub-9849738621238699'
				 data-ad-slot='4113761759'
				 data-ad-format='auto'
				 data-full-width-responsive='true'
				 >
		</ins>
		<script>
				 (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	<!-- Responsive Display Ad - END -->
";


?>

<!-- Pass the version number to a js variable -->
<script type="text/javascript">
	var twrpVersionNumber = "<?php echo $twrp_version_number?>";
</script>
