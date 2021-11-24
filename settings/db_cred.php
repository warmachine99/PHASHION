<?php
//Database credentials
define("DATABASE", "webtf");
define("SERVER", "localhost");
define("USERNAME", "root");
define("PASSWD", "");
// Create connection
$db = mysqli_connect('localhost', 'root', '', 'webtf');

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
