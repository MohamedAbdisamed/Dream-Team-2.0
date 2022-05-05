<?php
require("mysqlconnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../styleguide/style.css">
</head>

<body>
    <header>
        <img src="#" alt="Logo, Health Trackr Logo">
    </header>
    <section>
        <form action="phpOnly/userDB.php" method="post">
            <input type="text" placeholder="Navn" name="uname" required>
            <input type="password" placeholder="Password" name="upassword" required>
            <button class="rund-button-1" type="submit" name="login-btn">Login</button>
            <br>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Forbliv online
            </label>
            <br>
            <span class="psw">Glemt <a href="#">password?</a></span>
        </form>
    </section>
    <footer>
        <p>Sundhedsfagling?</p>
    </footer>
</body>

</html>