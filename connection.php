<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "eer";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
#$conn = new mysqli('localhost','root','','eer');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
