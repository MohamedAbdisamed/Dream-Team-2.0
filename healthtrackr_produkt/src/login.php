<?php

include 'mysqlconnect.php';
session_start();
if (isset($_POST['submit'])) {
    // username and password sent from form 
   
   $email = mysqli_real_escape_string($conn,$_POST['email']);
   $password = mysqli_real_escape_string($conn,$_POST['password']); 
   
   $sql = "SELECT email, pass FROM Users WHERE email = '$email' and pass = '$password'";
   $result = mysqli_query($conn,$sql);
   
   $count = mysqli_num_rows($result);
    
   if($count == 1) {
      $logged_in = mysqli_fetch_assoc($results);
      $_SESSION['id'] = $logged_in['id'];
      $_SESSION['first_name'] = $logged_in['first_name'];
     header("Location: home.php");
   }else {
      echo 'error';
   }

}
?>