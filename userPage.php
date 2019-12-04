<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>

    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <script src="js/custom.js"></script>
</head>
<body>
<div>
    <ul id="Navbar">
        <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
        <li id="account"><a href="userPage.php" class="navbar"><img src="https://img.icons8.com/android/24/000000/user.png"></a></li>
        <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
        <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
    </ul>
</div>
<h1> Benutzerkonto </h1>
    <button id="AccountInfo" onclick="redirectAccountInformation()"> Account Informationen </button>
    <button id="PräferenzenÄndern"> Präferenzen bearbeiten </button>
    <button id="AccountDelete" onclick="achtung()"> Account löschen </button>
</body>
</html>