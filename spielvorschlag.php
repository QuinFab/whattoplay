<?php
$pdo = new PDO('mysql:host=localhost;dbname=iba', 'root', '');

$spiel = "A Hat in Time";

$statement = $pdo->prepare("SELECT cover FROM spiele WHERE spieletitel = 'A Hat in Time'");
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
        <li id="account"><a href="userPage.php" class="navbar"><img src="https://img.icons8.com/android/24/000000/user.png"></a></li>
        <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
        <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
    </ul>
</div>
<div class="SpielVorschlag">
    <ul>
        <h1 id="Spieletitel"><?php echo $spieletitel[0] ?></h1>
<li> <?php echo "<img src= $cover[0]>"; ?> </li>
    <li><div id="Spielebeschreibung">
    <p> Platzhalter für die Spielebeschreibung mit Dummy Text zum stylen. Lorem ipsum dolor amet kinfolk YOLO cornhole semiotics, </p>
    <p>cold-pressed migas lo-fi. Yr 3 wolf moon hammock viral, chillwave mumblecore meggings keffiyeh cold-pressed banjo disrupt </p>
    <p>mustache pork belly retro. Jean shorts put a bird on it subway tile, knausgaard tattooed activated charcoal </p>
    <p>asymmetrical af fashion axe. Post-ironic mlkshk activated charcoal chia +1. </p>
    <p> Polaroid wayfarers brooklyn, cray crucifix normcore woke cornhole brunch butcher blue bottle craft beer ennui deep v. </p>
    <p> Four dollar toast semiotics blue bottle forage food truck wayfarers asymmetrical glossier. Meh post-ironic listicle bespoke. </p>
    </div></li>
        </ul>
</div>


</body>

