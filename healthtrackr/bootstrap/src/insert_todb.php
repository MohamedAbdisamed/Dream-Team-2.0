<?php 
    include 'mysqlconnect.php'; 

    $message = $_POST["message"]; 
    $sql = "INSERT INTO testtb (beskrivelse) VALUES ('$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>