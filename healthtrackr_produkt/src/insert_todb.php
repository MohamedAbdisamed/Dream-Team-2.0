<?php 
    include 'mysqlconnect.php'; 
    $title = (isset($_POST['title'])) ? $_POST['title'] : 0;
    $description = (isset($_POST['description'])) ? $_POST['description'] : 0;
    $start = (isset($_POST['start'])) ? $_POST['start'] : 0;
    $end = (isset($_POST['end'])) ? $_POST['end'] : 0;

    $sql = "INSERT INTO kalender (title, description, start,
    end) VALUES ('$title','$description', '$start', '$end' )";
    
    if ($conn->query($sql) === TRUE) {
        echo 'New record created successfully';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
?>