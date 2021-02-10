<?php

#### Call this directly from a webpage.
#### file_name must be passed in



### Include to return $hits for any given file_name
include ($_SERVER['DOCUMENT_ROOT']."/_include/scripts/hit_counter/common/return_hits_value.php");


### DISPLAY THE HITS ###
# Using Text
echo number_format((int)$hits);


# Unset local variables
unset($hits);


?>
