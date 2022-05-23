<?php
echo "<div class=\"bot-menu-bar\">";
echo "<div class=\"ikon\">";
if ($_SERVER['SCRIPT_NAME'] == "/Dream-Team-2.0/healthtrackr/bootstrap/src/home.php") {
    echo "<a class=\"active\"><img src=\"../scss/img/icon/home-fyld.svg\" alt=\"Home ikon, Health Tracker Home ikon\"></a>";
}
else {
    echo "<a href=\"home.php\"><img src=\"../scss/img/icon/home-linje.svg\" alt=\"Home ikon, Health Tracker Home ikon\"></a>";
}
echo "</div>";
echo "<div class=\"ikon\">";
if ($_SERVER['SCRIPT_NAME'] == "/Dream-Team-2.0/healthtrack/bootstrap/src/chat.php") {
    echo "<a class=\"active\"><img src=\"../scss/img/icon/chat-fyld.scg\" alt=\"Chat ikon, Health Tracker Chat ikon\"></a>";
} 
    else {
    echo "<a href=\"chat.php\"><img src=\"../scss/img/icon/chat-linje.svg\" alt=\"Chat ikon, Health Trackr Chat ikon\"></a>";
}
echo "</div>";

echo "<div class=\"ikon\">";
if ($_SERVER['SCRIPT_NAME'] == "/Dream-Team-2.0/healthtrack/bootstrap/src/programside.php") {
    echo "<a class=\"active\"><img src=\"../scss/img/icon/vægt-linje.svg\" alt=\"Workout ikon, Health Trackr Workout ikon\"></a>";
} else {
    echo "<a href=\"workout.php\"><img src=\"../scss/img/icon/vægt-linje.svg\" alt=\"Chat ikon, Health Trackr Chat ikon\"></a>";
}
echo "</div>";

echo "<div class=\"ikon\">";
if ($_SERVER['SCRIPT_NAME'] == "/Dream-Team-2.0/healthtrack/bootstrap/src/kalender.php") {
    echo "<a class=\"active\"><img src=\"../scss/img/icon/calender-fyld.svg\" alt=\"Kalender ikon, Health Trackr Kalender ikon\"></a>";
} else {
    echo "<a href=\"kalender.php\"><img src=\"../scss/img/icon/calender-linje.svg\" alt=\"Kalender ikon, Health Trackr Kalender ikon\"></a>";
}
echo "</div>";

echo "<div class=\"ikon\">";
if ($_SERVER['SCRIPT_NAME'] == "/Dream-Team-2.0/healthtrack/bootstrap/src/user.php") {
    echo "<a class=\"active\"><img src=\"../scss/img/icon/profil-fyld.svg\" alt=\"User ikon, Health Trackr User ikon\"></a>";
} else {
    echo "<a href=\"profil.php\"><img src=\"../scss/img/icon/profil-linje.svg\" alt=\"User ikon, Health Trackr User ikon\"></a>";
}
echo "</div>";

echo "</div>";
?>