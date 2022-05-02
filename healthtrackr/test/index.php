<?php
require("mysqlconnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forside</title>
    <link rel="stylesheet" href="../../styleguide/style.css">
</head>

<body>
    <header>
        <div class="top-menu-bar">
            <div class="nav-img">
                <a href="#" class="nav-left-img"><img src="../../syuleguide/ikoner-2/User icon.svg" alt="User ikon, Health Trackr User ikon"></a>
            </div>
            <div class="side-titel">
                <h4>Side titel</h4>
            </div>
            <div class="nav-img">
                <a href="#" class="nav-right-img"><img src="../../styleguide/ikoner-2/Burger menu icon.svg menu icon.svg" alt="Burger menu ikon, Health Trackr Burger menu ikon"></a>
            </div>
        </div>
    </header>
    <section>
        <div class="header">
            <h1>Hej xxxxxxx</h1>
            <img src="" alt="">
        </div>
        <div class="row">
            <div class="colum">
                <div>
                    <h3>boks titel</h3>
                    <div class="rund-billed-1">
                        <a href=""><img src="" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="colum">
                <div>
                    <h3>boks titel</h3>
                    <div class="rund-billed-1">
                        <a href=""><img src="" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="colum">
                <div>
                    <h3>boks titel</h3>
                    <div class="rund-billed-1">
                        <a href=""><img src="" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="colum">
                <div>
                    <h3>boks titel</h3>
                    <div class="rund-billed-1">
                        <a href=""><img src="" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="bottom-nav">
            <div class="bot-menu-bar">
                <div class="ikon">
                    <a href="#"><img src="../../styleguide/ikoner-2/home icon -grøn.svg" alt="Home ikon, Health Trackr Home ikon"></a>
                </div>
                <div class="ikon">
                    <a href="#"><img src="../../styleguide/ikoner-2/Chat icon.svg" alt="Chat ikon, Health Trackr Chat ikon"></a>
                </div>
                <div class="ikon">
                    <a href="#"><img src="../../styleguide/ikoner-2/Workout icon.svg" alt="Workout ikon, Health Trackr Workout ikon"></a>
                </div>
                <div class="ikon">
                    <a href="#"><img src="../../styleguide/ikoner-2/Calender icon.svg" alt="Kalender ikon, Health Trackr Kalender ikon"></a>
                </div>
                <div class="ikon">
                    <a href="#"><img src="../../styleguide/ikoner-2/User icon.svg" alt="User ikon, Health Trackr User ikon"></a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        var xmlhttp = new XMLHttpRequest();
        var muObj, x;
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj = JSON.parse(this.responseText);
                var divCol1 = document.createElement("div");
                dicCOl1.classList.add("row");
                
            }
        }
    </script>
</body>

</html>