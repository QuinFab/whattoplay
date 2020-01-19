<?php

//Hier Müsste die Email senden Methode stehen

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Registrieren</title>
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <script src="js/custom.js"></script>
</head>
<body>

<div>
    <ul id="Navbar">
        <?php if (isset($_SESSION["user_id"])) : ?>
            <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
            <li id="logout"><a href="logout.php" class="navbar"><img id="logoutIcon"
                                                                     src="https://img.icons8.com/pastel-glyph/64/000000/logout-rounded-down.png"></a>
            </li>
            <li id="account"><a href="userPage.php" class="navbar"><img
                            src="https://img.icons8.com/android/24/000000/user.png"></a></li>
        <?php else : ?>
            <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
            <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
            <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
        <?php endif; ?>
    </ul>
</div>

<h1>Passwort vergessen? </h1>
<p> Kein Problem, jetzt deine email hier eingeben und der reset link wird dir in kürze zugeschickt. <br></p>

<!--<form method="post" action="passwortVergessen.php"> !-->

    <div id="formUserdaten">
        <label class="UserInfoBeschreibung" for="email"> Email-Adresse </label>
        <input class="UserInfo" id="email" name="email" type="Email" placeholder="z.B. meineMail@web.de">
        <br><br>
    </div>
    <div id="RegistrierenButtondiv">
        <button id="registrierenButton" onclick="passwortVergessen()"> Link an Email verschicken.</button>
    </div>
<!--</form>!-->
</body>
</html>