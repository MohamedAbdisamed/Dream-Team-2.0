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
$conn = mysqli_connect("mysql90.unoeuro.com", "uclhealthtrackr_dk", "ptEF2fHwrbhm", "uclhealthtrackr_dk_db");

//starter session, hvis der trykkes submit. Heri ligger der nogle ting der bliver tjekket, i dette tilfælde bliver email og password tjekket, her er det om de 2 eksistere sammen til samme bruger(id). Hvis ja oprettes section og sender brugeren videre til produktets forside. Denne session skal også kontroller had der ses på kalenderen, da kalender indhold er bruger specifikt. 
session_start();
if (isset($_POST['submit'])) {
    extract($_POST);
    include 'mysqlconnect.php';
    $sql = mysqli_query($conn, "SELECT * FROM Users where email='$email' and pass='md5($password)'");
    $row  = mysqli_fetch_array($sql);
    if (is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["first_Name"] = $row['first_Name'];
        $_SESSION["last_Name"] = $row['last_Name'];
        header("Location: home.php");
    } else {
        echo "Invalid Email ID/Password";
    }
}
/* første kode, brugt da det skulle tjekkes op mod local database. 
    // Opretter forbindelsen til server/databasen
    $con = mysqli_connect("localhost", "root", "", "bt_demo") or die("Error " . mysqli_error($con));

    // Her starter der et tjek af de oplysninger som bliver indtastet i input felterne, for at tjekke om det passer med det i databasen. Her tjekker den om brugeren eksistere, og om kode og bruger passer, hvis ja går den til home.php, hvis ikke aktivere den fejl beskeden.
    if (isset($_POST['submit'])) { //kigger på det der bliver sat ind, kigger på værdierne indtastet i inpt felterne. Email = 'email', Password = 'password', og den sidste tjekker kombinationen af de 2 mod databasen. 
        $uemail = mysqli_real_escape_string($con, $_POST['email']); 
        $upwd = mysqli_real_escape_string($con, $_POST['password']);
        $result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $uemail . "' and password = '" . md5($upwd) . "'");

        if (mysqli_num_rows($result) > 0) {
            // hvis login informationerne passer, bliver brugeren logget ind. 

            $row = mysqli_fetch_array($result); //henter resultatet, som er kombinationen af brugerens informationer. 

            session_start(); //opstarter en session, som bliver knyttet til brugeren der er logget ind. Dette er det samme princip som online shopping bruger, der gør de kan huske hvad man ligger i kurven, selv hvis man lukker. 
            $_SESSION['user_id'] = $row['id']; //notere brugerens id til sessionen
            $_SESSION['user_name'] = $row['name']; //notere brugeren navn til sessionen
            header("Location: home.php"); //Sender brugeren til startsiden, 'hvome.php'
        } else {
            // hvis resultatet er forkert, aktivere det fejl boksen. 
            header("Location: index.php?err=true");
        }
    }

    
