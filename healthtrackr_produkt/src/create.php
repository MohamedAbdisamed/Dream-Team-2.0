<?php
/* Database / server oplysninger
$databaseName = "sql11495034";
$serverName = "sql11.freesqldatabase.com";
$userName = "sql11495034";
$pass = "rJKfi5M9kk"; 
*/

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("sql11.freesqldatabase.co", "sql11495034", "rJKfi5M9kk", "sql11495034");

// tjekker om der er forbindelse til server/database. Hvis ikke skal den exit og give beskeden "ERROR: Could not connect." Gør brug af mysqli command, som giver beskrivelse af sidste connection fejl. 
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Henter/tager de 5 input værdier fra form dataen.
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$address = $_REQUEST['address'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$password = $_REQUEST['password'];

// Her laves der en insert query hændelse, sender/indsætter form data til database tabel, Users, vi specificere hvor hvad skal sættes ind. 
// Dette er til tabellen Users, hvori vi arbejder med de kolloner der er nævnt i første ()
$sql = "INSERT INTO Users (first_name, last_name, email, telefone, address, pass) VALUES ('$first_name','$last_name','$email','$telefone','$address','$password')";

//En if else statement, brugt til at tjekke om der blev sendt noget til database, eller om der var nogen fejl. Brugt for at tjekke specefikt om alt indhold bliver indsat, og om det bliver insadt korrekt. Hvis det ikke bliver indsat giver den brugeren besked om der er fejl, og hvilken fejl det er.
if (mysqli_query($conn, $sql)) {
    echo 
    "<h3>Bruger Oprettet</h3>
    <p>Du vil blive transporteret til Login siden om lidt</p>";

    header("refresh:90;url=index.php");

} else {
    echo "ERROR: Fejl, data ikke sendt. $sql. "
        . mysqli_error($conn);
}

// Her lukkers connection til server/database, og koden er nu færdig med at køre. 
mysqli_close($conn);
