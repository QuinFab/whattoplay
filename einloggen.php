<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Einloggen</title>

    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <script src="js/custom.js"></script>
</head>
<body>
<div>
    <ul id="Navbar">
        <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
        <li id="account"><a href="userPage.php" class="navbar"><img
                        src="https://img.icons8.com/android/24/000000/user.png"></a></li>
        <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
        <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
    </ul>
</div>
<h1> Einloggen </h1>
<form method="post">
    <label for="Username">Benutzername </label>
    <input id="Username" name="Username" type="text" placeholder="z.B. MaxMaster3314">
    <br>
    <label for="Passwort">Passwort </label>
    <input id="Passwort" name="Passwort" type="password" placeholder="Passwort">
    <br>

    <button type="submit" onclick=<?php sessionstarten() ?>>Einloggen</button>
    <!-- HIER NOCH PHP FUNKTION REINKNALLEN -->
</form>

<button onclick="passwortVergessen()">Passwort Zurücksetzen</button>
</body>
</html>
