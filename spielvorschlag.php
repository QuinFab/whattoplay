<?php
$pdo = new PDO('mysql:host=localhost;dbname=iba', 'root', ''); //pwd: root für mac

$spiel = "A Hat in Time";

$statement = $pdo->prepare("SELECT cover FROM spiele WHERE spieletitel = 'Dark Souls 3'");
$result = $statement->execute();
$cover = $statement->fetch();

$stmnt = $pdo->prepare("select spieletitel from spiele where spiel_id = 10");
$result = $stmnt->execute();
$spieletitel = $stmnt->fetch();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spielevorschlag</title>

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
<div id="SpielVorschlag">
    <ul>
        <p id="Spieletitel"><?php echo $spieletitel[0] ?></p>
        <li>
            <div id="spielecoverContainer"> <?php echo "<img id='Spielecover' src= $cover[0]>"; ?> </div>
        </li>
        <li>
            <div id="Spielebeschreibung">
                <!-- Alles mit Eckigen Klammern sind Platzhalter, die noch Funktion brauchen -->
                <p> Genre: [PHP GENRE1, PHP GENRE2] </p>
                <p> Plattform(en): [PHP PLATTFORMEN] </p>
                <p> Spielzeit der Hauptgeschichte: [PHP ZEITLICHER AUFWAND] </p>
                <p> Altersbeschränkung: [PHP ALTERSBESCHRÄNKUNG] </p>
                <p> Singleplayer/Multiplayer: [PHP SINGLE/MULTIPLAYER] </p>
                <p> Offizieller Preis: [PHP BUDGET] </p>
                <p> Kurze Beschreibung: [PHP SPIELEBESCHREIBUNG] </p>
            </div>
        </li>
    </ul>
</div>

</body>

