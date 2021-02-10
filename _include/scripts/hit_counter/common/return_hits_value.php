<?php

#### Use this for any display method.
#### Returns $hits for any given $file_name


### INCLUDES ###
# Open SQL DB Connection ($sql_conn)
include ($_SERVER['DOCUMENT_ROOT']."/_include/scripts/connect_local_mysql.php");

# Include hit_counter variables
include ($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/common/vars.php");



### READ THE HITS ###
# Retrieve the number of hits from the table
$hit_query = "SELECT * FROM $hit_table WHERE $hit_table_field_file='$file_name' LIMIT 1";
$hit_result = mysqli_query($sql_conn, $hit_query);

# If the result has any rows, create an object with the result and extract the hits, else set 0 hits
if ( mysqli_num_rows($hit_result) != 0 ) {
  $hits = mysqli_fetch_object($hit_result)->$hit_table_field_hits;
}
else {
  $hits = 0;
}

# Close Result and SQL Connection
mysqli_free_result($hit_result);
mysqli_close($sql_conn);

# Unset local variables
unset($hit_query);
unset($hit_result);

# Don't unset hits, hits needs to be returned

?>
