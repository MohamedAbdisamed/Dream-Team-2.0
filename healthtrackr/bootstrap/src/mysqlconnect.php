<?php

// server / database information 
$databaseName = "sql11495034";
$serverName = "sql11.freesqldatabase.com";
$userName = "sql11495034";
$pass = "rJKfi5M9kk";


// connecter til vores server/database. 
$conn = new mysqli(
    $serverName,
    $userName,
    $pass,
    $databaseName
);

//Tjekker om der er forbindelse, hvis ikke giver den fejl besked, hvis der er fortæller den "connected successfully", dette bruges til at tjekke forbindelse til database, inden vi begyndte at kigge på opret bruger form og kode. 
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
    echo "Connected successfully";
