<?php

#### Call this directly from a webpage.
#### file_name must be passed in



### Include to return $hits for any given file_name
include ($_SERVER['DOCUMENT_ROOT']."/include/scripts/hit_counter/common/return_hits_value.php");


### DISPLAY THE HITS ###
# Using Images

# Create a string of the number of hits with leading 0s, up to the billions place
$hits_string = str_pad ($hits, 10, '0', STR_PAD_LEFT);


## Set a variable for each digit to display
# Always display ones, tens, hundreds, thousands
$ones        = substr($hits_string,-1,1);
$tens        = substr($hits_string,-2,1);
$hundreds    = substr($hits_string,-3,1);
$thous       = substr($hits_string,-4,1);

# For remaining digits, only set if the hits value is that big */
if ($hits     >=     10000)      { $ten_thou    = substr($hits_string,-5,1); }
if ($hits     >=     100000)     { $hun_thou    = substr($hits_string,-6,1); }
if ($hits     >=     1000000)    { $mills       = substr($hits_string,-7,1); }
if ($hits     >=     10000000)   { $ten_mills   = substr($hits_string,-8,1); }
if ($hits     >=     100000000)  { $hun_mills   = substr($hits_string,-9,1); }
if ($hits     >=     1000000000) { $bills       = substr($hits_string,-10,1); }


## Actually display the digits for the hit counter

# Height and Width of each digit, in pixels (easy resizing), the actual digit image size is 54x54
# Set defaults if there isn't a width/height already set
if (isset($digit_width[0]) == false)  { $digit_width[0] = 30; }
if (isset($digit_height[0]) == false) { $digit_height[0] = 40; }

## Create digit image array (Array position is equal to the digit it would print)
$digit_images_path="/_private/images/hc";
$digit_images=array( $digit_images_path."/0.jpg", $digit_images_path."/1.jpg", $digit_images_path."/2.jpg", $digit_images_path."/3.jpg", $digit_images_path."/4.jpg", $digit_images_path."/5.jpg", $digit_images_path."/6.jpg", $digit_images_path."/7.jpg", $digit_images_path."/8.jpg", $digit_images_path."/9.jpg" );



# Only display digits that were set above.
if (isset($bills) == true)         { echo "<img style=\"width: $digit_width[0]px; height: $digit_height[0]px;\" alt=\"$bills\" src=\"$digit_images[$bills]\">"; }
if (isset($hun_mills) == true)     { echo "<img style=\"width: $digit_width[0]px; height: $digit_height[0]px;\" alt=\"$hun_mills\" src=\"$digit_images[$hun_mills]\">"; }
if (isset($ten_mills) == true)     { echo "<img style=\"width: $digit_width[0]px; height: $digit_height[0]px;\" alt=\"$ten_mills\" src=\"$digit_images[$ten_mills]\">"; }
if (isset($mills) == true)         { echo "<img style=\"width: $digit_width[0]px; height: $digit_height[0]px;\" alt=\"$mills\" src=\"$digit_images[$mills]\">"; }
if (isset($hun_thou) == true)      { echo "<img style=\"width: $digit_width[0]px; height: $digit_height[0]px;\" alt=\"$hun_thou\" src=\"$digit_images[$hun_thou]\">"; }
if (isset($ten_thou) == true)      { echo "<img style=\"width: $digit_width[0]px; height: $digit_height[0]px;\" alt=\"$ten_thou\" src=\"$digit_images[$ten_thou]\">"; }
if (isset($thous) == true)         { echo "<img style=\"width: $digit_width[0]px; height: $digit_height[0]px;\" alt=\"$thous\" src=\"$digit_images[$thous]\">"; }
if (isset($hundreds) == true)      { echo "<img style=\"width: $digit_width[0]px; height: $digit_height[0]px;\" alt=\"$hundreds\" src=\"$digit_images[$hundreds]\">"; }
if (isset($tens) == true)          { echo "<img style=\"width: $digit_width[0]px; height: $digit_height[0]px;\" alt=\"$tens\" src=\"$digit_images[$tens]\">"; }
if (isset($ones) == true)          { echo "<img style=\"width: $digit_width[0]px; height: $digit_height[0]px;\" alt=\"$ones\" src=\"$digit_images[$ones]\">"; }


# Unset local variables
unset($hits);
unset($hits_string);
unset($ones);
unset($tens);
unset($hundreds);
unset($thous);
unset($ten_thou);
unset($hun_thou);
unset($mills);
unset($ten_mills);
unset($hun_mills);
unset($bills);
unset($digit_images_path);
unset($digit_images);



?>
