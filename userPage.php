<?php
require "php-config.php";
?>
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
        <?php if (isset($_SESSION["user_id"])) : ?>
            <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
            <li id="logout"><a href="logout.php" class="navbar"><img
                            src="https://img.icons8.com/pastel-glyph/64/000000/logout-rounded-down.png"></a></li>
            <li id="account"><a href="userPage.php" class="navbar"><img
                            src="https://img.icons8.com/android/24/000000/user.png"></a></li>
        <?php else : ?>
            <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
            <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
            <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
        <?php endif; ?>
    </ul>
</div>
<h1>
    <?php
    if (isset($_SESSION['user_id'])) {
        echo "Herzlich Willkommen " . $_SESSION['user_id'];
    } else {
        Print "Bitte erst einloggen";
        header('Location: http://localhost/whattoplay/einloggen.php');
        exit; //Port 8888 für Mac
    }
    ?>
    <button id="AccountInfo" onclick="redirectAccountInformation()"> Account Informationen</button>
    <button id="PräferenzenÄndern" onclick="redirectPraeferenzen()"> Präferenzen bearbeiten</button>
    <button id="AccountDelete" onclick="achtung()"> Account löschen</button>

</body>
</html>
