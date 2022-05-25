<?php
 
$hostname = 'sql11.freesqldatabase.com';
$username = 'sql11495034';
$password = 'rJKfi5M9kk';
$dbname= 'sql11495034';
// Create connection
$conn = mysqli_connect( $hostname, $username,$password, $dbname);
// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>