<?php
include ("content/include/var.php");


$dbservername = "localhost";
$dbusername = "u1012368_dda";
$dbpassword = "(-Y7c,XN8_";
$dbname = "db1012368_dda";


// Create connection

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
