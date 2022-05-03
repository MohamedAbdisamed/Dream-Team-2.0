<?php
require("mysqlconnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opret Bruger side 2</title>
</head>

<body>
    <div class="top-menu-bar">
        <div class="side-titel">
            <h4>Side titel</h4>
        </div>
    </div>
    <form action="">
        <p>Fokus gruppe</p>
        <input type="checkbox" id="fokus1" name="fokus1" value="Ryg">
        <label for="fokus1">Ryg</label>
        <input type="checkbox" id="fokus2" name="fokus2" value="Bækken">
        <label for="fokus2">Bækken</label>
        <input type="checkbox" id="fokus3" name="fokus3" value="Fødder">
        <label for="fokus3">Fødder</label>
        <input type="checkbox" id="fokus4" name="fokus4" value="Skulder">
        <label for="fokus4">Skulder</label>
        <input type="checkbox" id="fokus5" name="fokus5" value="Knæ">
        <label for="fokus5">Knæ</label>
        <input type="checkbox" id="fokus6" name="fokus6" value="Nakke">
        <label for="fokus6">Nakke</label>
        <input type="checkbox" id="fokus7" name="fokus7" value="Kronisk-Sygdom">
        <label for="fokus7">Kronisk Sygdom</label>
        <p>Genoptrænings niveau</p>
        <input type="checkbox" id="ukendt" name="ukendt" value="Ukendt">
        <label for="ukendt">Ved ikke</label>
        <input type="checkbox" id="niveau1" name="niveau1" value="Almen">
        <label for="niveau1">Almen</label>
        <input type="checkbox" id="niveau2" name="niveau2" value="Advanceret">
        <label for="niveau2">Advanceret</label>
        <input type="checkbox" id="niveau3" name="niveau3" value="Specialiseret">
        <label for="niveau3">Specialiseret</label>
        <input type="checkbox" id="niveau4" name="niveau4" value="Rehabilitisering">
        <label for="niveau4">Rehabilitisering</label>
        <button class="rund-button-1">Opret</button>
    </form>
    </section>
    <footer>
        <div class="bot-menu-bar"></div>
    </footer>
</body>

</html>