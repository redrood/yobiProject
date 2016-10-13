<?php
/**
 * Created by PhpStorm.
 * User: Allali mohamed
 * Date: 07/10/2016
 * Time: 19:16
 */

$servername = "172.28.5.22";
$username = "u1012368_dda";
$password = "(-Y7c,XN8_";
$dbname = "db1012368_dda";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>