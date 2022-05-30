<?php

include 'mysqlconnect.php';
session_start();
if (isset($_POST['submit'])) {
    // username and password sent from form 
   
   $email = mysqli_real_escape_string($conn,$_POST['email']);
   $password = mysqli_real_escape_string($conn,$_POST['pass']); 
   
   $sql = "SELECT email, pass FROM Users WHERE email = '$email' and pass = '$password'";
   $result = mysqli_query($conn,$sql);
   
   $count = mysqli_num_rows($result);
    
   if($count == 1) {
      $_SESSION['login_user'] = $email;
      header("Location: home.php");
   }else {
      echo 'error';
   }

}
?>