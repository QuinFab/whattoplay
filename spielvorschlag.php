<?php
require "php-config.php";
$pdo = new PDO('mysql:host=localhost;dbname=iba', 'root', ''); //pwd: root für mac

$zufall = rand(1,29);
$statement1 = $pdo->prepare("SELECT cover FROM spiele WHERE spiel_id = $zufall");
$result = $statement1->execute();
$cover = $statement1->fetch();

$statement2 = $pdo->prepare("select spieletitel from spiele where spiel_id = $zufall");
$result = $statement2->execute();
$spieletitel = $statement2->fetch();

$statement3 = $pdo->prepare("select genre1 from spiele where spiel_id = $zufall");
$result = $statement3->execute();
$genre1 = $statement3->fetch();

$statement4 = $pdo->prepare("select genre2 from spiele where spiel_id = $zufall");
$result = $statement4->execute();
$genre2 = $statement4->fetch();

$statement5 = $pdo->prepare("select plattform from spiele where spiel_id = $zufall");
$result = $statement5->execute();
$plattform = $statement5->fetch();

$statement6 = $pdo->prepare("select zeit_aufwand from spiele where spiel_id = $zufall");
$result = $statement6->execute();
$zeit_aufwand = $statement6->fetch();

$statement7 = $pdo->prepare("select alterbeschraenkung from spiele where spiel_id = $zufall");
$result = $statement7->execute();
$alterbeschraenkung = $statement7->fetch();

$statement8 = $pdo->prepare("select single_multiplayer from spiele where spiel_id = $zufall");
$result = $statement8->execute();
$single_multiplayer = $statement8->fetch();

$statement9 = $pdo->prepare("select budget from spiele where spiel_id = $zufall");
$result = $statement9->execute();
$budget = $statement9->fetch();

$statement10 = $pdo->prepare("select beschreibung from spiele where spiel_id = '8'");
$result = $statement10->execute();
$beschreibung = $statement10->fetch();
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
        <?php if (isset($_SESSION["user_id"])) : ?>
            <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
            <li id="logout"><a href="logout.php" class="navbar"><img id="logoutIcon" src="https://img.icons8.com/pastel-glyph/64/000000/logout-rounded-down.png"></a></li>
            <li id="account"><a href="userPage.php" class="navbar"><img src="https://img.icons8.com/android/24/000000/user.png"></a></li>
        <?php else : ?>
            <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
            <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
            <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
        <?php endif; ?>
    </ul>
</div>
<div id="SpielVorschlag">
    <ul>
        <p id="Spieletitel"><?php echo $spieletitel[0] ?></p>
        <li>
            <div id="spielecoverContainer"> <?php echo "<img id='Spielecover' src= $cover[0]>"; ?> </div>
        </li>
        <li>
            <div id="Spieledaten">
                <!-- Alles mit Eckigen Klammern sind Platzhalter, die noch Funktion brauchen -->
                <p> Genre: <?php echo $genre1[0]," ", $genre2[0]; ?> </p>
                <p> Plattform(en): <?php echo $plattform[0] ?> </p>
                <p> Spielzeit der Hauptgeschichte: <?php echo $zeit_aufwand[0] ?> </p>
                <p> Altersbeschränkung: <?php echo $alterbeschraenkung[0] ?> </p>
                <p> Singleplayer/Multiplayer: <?php echo $single_multiplayer[0] ?> </p>
                <p> Offizieller Preis: <?php echo $budget[0] ?> </p>
                <button id="nochEinSpielvorschlagButton" onclick="seitenReloadFuerNeueSpielausgabe()"> Noch ein Spiel </button>
            </div>
            <div id="Spielebeschreibung">
                <p id="kurzeBeschreibung"> Kurze Beschreibung: </p> </br> <?php echo $beschreibung[0] ?> </p>
            </div>

        </li>
    </ul>

</div>

</body>

