<?php
$servername = "remotemysql.com";
$username = "Bl3Jqd1rm3";
$password = "kn9xezFoyL";
$db = "Bl3Jqd1rm3";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
