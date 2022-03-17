<?php
$server = 'localhost';
$database = 'final_ecomm';
$username = 'root';
$password = '';

$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$message = "Connected successfully";

?>