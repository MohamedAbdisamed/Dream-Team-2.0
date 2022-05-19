<?php
    // Opretter forbindelsen til databasen
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

    
