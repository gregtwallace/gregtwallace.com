
<!doctype html>

<html lang="en">

<?php

$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

header("HTTP/1.1 301 Moved Permanently");
header("Location: $root/");
?>

</html>
