<?php
echo "<div class=\"bot-menu-bar\">";
echo "<div class=\"ikon\">";
if ($_SERVER['SCRIPT_NAME'] == "/Dream-Team-2.0/healthtrackr/test/home.php") {
    echo "<a class=\"active\"><img src=\"../../styleguide/ikoner-2/Home icon- active grøn.svg\" alt=\"Home ikon, Health Tracker Home ikon\"></a>";
}
else {
    echo "<a href=\"home.php\"><img src=\"../../styleguide/ikoner-2/home icon -grøn.svg\" alt=\"Home ikon, Health Tracker Home ikon\"></a>";
}
echo "</div>";
echo "<div class=\"ikon\">";
if ($_SERVER['SCRIPT_NAME'] == "/Dream-Team-2.0/healthtrack/test/chat.php") {
    echo"<a class=\"active\"><img src=\"../../styleguide/ikoner-2/Chat icon - active grøn.svg\" alt=\"Chat ikon, Health Tracker Chat ikon\"></a>";
} 
    else {
    echo "<a href=\"chat.php\"><img src=\"../../styleguide/ikoner-2/Chat icon.svg\" alt=\"Chat ikon, Health Trackr Chat ikon\"></a>";
}
echo "</div>";

echo "<div class=\"ikon\">";
if ($_SERVER['SCRIPT_NAME'] == "/Dream-Team-2.0/healthtrack/test/workout.php") {
    echo "<a class=\"active\"><img src=\"../../styleguide/ikoner-2/Workout icon - active grøn.svg\" alt=\"Workout ikon, Health Trackr Workout ikon\"></a>";
} else {
    echo "<a href=\"workout.php\"><img src=\"../../styleguide/ikoner-2/Workout icon.svg\" alt=\"Chat ikon, Health Trackr Chat ikon\"></a>";
}
echo "</div>";

echo "<div class=\"ikon\">";
if ($_SERVER['SCRIPT_NAME'] == "/Dream-Team-2.0/healthtrack/test/kalender.php") {
    echo "<a class=\"active\"><img src=\"../../styleguide/ikoner-2/Calender icon - active grøn.svg\" alt=\"Kalender ikon, Health Trackr Kalender ikon\"></a>";
} else {
    echo "<a href=\"kalender.php\"><img src=\"../../styleguide/ikoner-2/Calender icon.svg\" alt=\"Kalender ikon, Health Trackr Kalender ikon\"></a>";
}
echo "</div>";

echo "<div class=\"ikon\">";
if ($_SERVER['SCRIPT_NAME'] == "/Dream-Team-2.0/healthtrack/test/profil.php") {
    echo "<a class=\"active\"><img src=\"../../styleguide/ikoner-2/User - active grøn.svg\" alt=\"User ikon, Health Trackr User ikon\"></a>";
} else {
    echo "<a href=\"profil.php\"><img src=\"../../styleguide/ikoner-2/User icon.svg\" alt=\"User ikon, Health Trackr User ikon\"></a>";
}
echo "</div>";

echo "</div>";
?>