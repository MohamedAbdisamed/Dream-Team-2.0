<?php
session_start();
require("mysqlconnect.php");
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {die("Connection failed:" .$conn->connect_error);}

if(isset($_POST['login-btn'])){login($conn);}

function login ($conn) {
    $user = $_POST['uname'];
    $pasw = $_POST['upassword'];

    if (empty($user)) {
        array_push($errors, "Username is required");
    }

    if (empty($pasw)) {
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0) {
        $user = filter_var($user, FILTER_UNSAFE_RAW);
        $pasw = filter_var($pasw, FILTER_UNSAFE_RAW);
        $pasw = sha1($pasw);
        $sqlstmt = $conn->prepare("SELECT * FROM 'Route_66_admin' WHERE username='?' AND password='?' LIMIT 1");
        $sqlstmt->bind_param("ss",$user,$pasw);

        $results = $sqlstmt->execute();

        if(mysqli_num_rows($results) ==1) {
            $logged_in = mysqli_fetch_assoc($results);
            $_SESSION['id'] = $logged_in['id'];
            mysqli_close($conn);
            header('location:../home.php');
        }
    }
    else {
        array_push($errors, "Wrong username/password Combination");
        mysqli_close($conn);
    }
}
?>