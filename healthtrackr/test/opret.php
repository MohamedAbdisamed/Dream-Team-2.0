<?php
require("mysqlconnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opret Bruger</title>
</head>

<body>
    <section>
        <div class="top-menu-bar">
            <div class="side-titel">
                <h4>Side titel</h4>
            </div>
        </div>
        <form action="">
            <input type="text" placeholder="Navn">
            <input type="text" placeholder="Alder">
            <input type="text" placeholder="Køn">
            <input type="text" placeholder="Vægt">
            <input type="text" placeholder="Højde">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Tlf.">
            <input type="text" placeholder="Adresse">
            <button class="rund-button-1">Næste</button>
        </form>
    </section>
    <footer>
        <div class="bot-menu-bar"></div>
    </footer>
</body>
</html>