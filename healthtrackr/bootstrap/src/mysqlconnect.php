<?php
$hostname = 'localhost';
$username = 'root';
$password = 'Xampp1047';
$dbname= 'test';
//$dbname= 'dreamteam';
 
// Create connection
$conn = mysqli_connect( $hostname, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>