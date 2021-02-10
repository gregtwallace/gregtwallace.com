<?php

#### Call this directly from a webpage or download.  If file_name is not passed in, it will track the calling page
#### If file_name is passed in, it will add a hit to that


### INCLUDES ###
# Open SQL DB Connection ($sql_conn)
include ($_SERVER['DOCUMENT_ROOT']."/_include/scripts/connect_local_mysql.php");

# Include hit_counter variables
include ($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/common/vars.php");



### ADD A HIT ###

## Set file_name to the calling page if a file_name wasn't passed in
# Set the file name to the calling webpage, if no file name is previously set
if ( $file_name == NULL ) {
    $file_name = $_SERVER['SCRIPT_NAME'];
}

# Query string to locate the file's entry in the table
$hit_query = "SELECT * FROM $hit_table WHERE $hit_table_field_file='$file_name' LIMIT 1";
$hit_result = mysqli_query($sql_conn, $hit_query);


## Check if the file is in the table, if it isn't, create it and seed it at 1 hit
if ( mysqli_num_rows($hit_result) == 0) {
    $hits = 1;
    $hit_query = "INSERT INTO $hit_table ($hit_table_field_file, $hit_table_field_hits) VALUES ('$file_name', '$hits')";
    mysqli_query ($sql_conn, $hit_query);
    mysqli_free_result($hit_result);
}

# If the file is already in the table, read the value, add one, update the value
else {
    $hit_value = mysqli_fetch_object($hit_result);
    $hits = $hit_value->$hit_table_field_hits;
    $hits++;
    $hit_query = "UPDATE $hit_table SET $hit_table_field_hits='$hits' WHERE $hit_table_field_file='$file_name'";
    $hit_result = mysqli_query($sql_conn, $hit_query);
    unset($hit_result);
}

# Close Result and SQL Connection
mysqli_close($sql_conn);

# Unset local variables
unset($hit_query);
unset($hit_result);
unset($hit_value);
unset($hits);


?>
