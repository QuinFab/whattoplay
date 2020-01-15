<?php
require "php-config.php";
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> WhatToPlay</title>

    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <script src="js/custom.js"></script>
</head>
<body>
<div>
<ul id="Navbar">
    <?php if (isset($_SESSION["user_id"])) : ?>
        <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
        <li id="logout"><a href="logout.php" class="navbar"><img src="https://img.icons8.com/pastel-glyph/64/000000/logout-rounded-down.png"></a></li>
        <li id="account"><a href="userPage.php" class="navbar"><img src="https://img.icons8.com/android/24/000000/user.png"></a></li>
    <?php else : ?>
        <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
        <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
        <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
    <?php endif; ?>
</ul>
</div>
<h1>WhatToPlay?</h1>

<p> Manchmal ist es garnicht so leicht, rauszufinden welches Spiel man spielen soll. <br>
    Diese Website soll dir dabei helfen, dich zurecht zu finden!<br>
    Ob schon erfahrener Zocker oder Neueinsteiger, diese Website ist für jeden.<br>
    Erstelle dir jetzt einen Account, um direkt loszulegen!</p>

<button id="spielvorschlagGenerieren" onclick="SpielevorschlagGenerieren()"> Spielvorschlag generieren</button>
</body>
</html>
