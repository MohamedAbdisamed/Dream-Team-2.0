<?php 
    include 'mysqlconnect.php';
    // Creates var from current users username 
    $currentUser = ($_SESSION['login_user']);

    $sql = "SELECT first_name FROM Users WHERE email = '$currentUser'";
    $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
                $FirstName = $row['first_name']; 
            } 
            echo $FirstName;
?>