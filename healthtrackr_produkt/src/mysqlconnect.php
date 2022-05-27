<?php

// server / database information 
$databaseName = "uclhealthtrackr_dk_db";
$serverName = "mysql90.unoeuro.com";
$userName = "uclhealthtrackr_dk";
$pass = "ptEF2fHwrbhm";


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
