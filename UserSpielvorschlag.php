<?php
require "php-config.php";
$pdo = new PDO('mysql:host=localhost;dbname=iba', 'root', ''); //pwd: root für mac
$userID = $_SESSION['user_id'];

$statement = $pdo->prepare("SELECT * FROM praeferenzen WHERE user_id = :user_id");
$result = $statement->execute(array('user_id' => $userID));
$user = $statement->fetch();

/*$_SESSION['Genre'] = $user['Genre'];
$_SESSION['Plattform'] = $user['Plattform'];
$_SESSION['zeit'] = $user['zeit'];
$_SESSION['FSK'] = $user['FSK'];
$_SESSION['Player'] = $user['Player'];
$_SESSION['Budget'] = $user['Budget'];*/

echo $user['Genre'] . $user['Plattform'] . $user['zeit'] . $user['FSK'] . $user['Player'] . $user['Budget'];

//genre1 LIKE 'Adventure' AND plattform LIKE 'Nintendo Switch' AND zeit_aufwand = 30 AND alterbeschraenkung = 6 AND single_multiplayer LIKE 'Singelplayer' AND budget = 60;
$query = "SELECT * FROM (spiele) WHERE ((genre1 LIKE :userGenre) AND (plattform LIKE :userPlattform) AND (zeit_aufwand <= :userZeit) AND (alterbeschraenkung LIKE :userFSK) AND (single_multiplayer LIKE :userPlayer) AND (budget <= :userBudget))";
echo $query;
$statement32 = $pdo->prepare($query);
$statement32->execute(array(':userPlattform' => $user['Plattform'], ':userZeit' => $user['zeit'], ':userGenre' => $user['Genre'], ':userFSK' => $user['FSK'], ':userPlayer' => $user['Player'], ':userBudget' => $user['Budget']));
while($us = $statement32->fetch()) {
    echo $us['plattform'] . " " . $us['zeit'] . " " . $us['Genre'] . " " . $us['FSK'] . " " . $us['Player'] . " " . $us['Budget'];
}

$zufall = $us['spiel_id'];

$statement1 = $pdo->prepare("SELECT cover FROM spiele WHERE spiel_id = $zufall");
$result = $statement1->execute();
$cover = $statement1->fetch();
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
<div id="SpielVorschlag">
    <ul>
        <p id="Spieletitel"><?php echo $us['spieletitel'] ?></p>
        <li>
            <div id="spielecoverContainer"> <?php echo "<img id='Spielecover' src= $cover[0] >"; ?> </div>
        </li>
        <li>
            <div id="Spielebeschreibung">
                <!-- Alles mit Eckigen Klammern sind Platzhalter, die noch Funktion brauchen -->
                <p> Genre: <?php echo $us['genre1'] . " " . $us['genre2']; ?> </p>
                <p> Plattform(en): <?php echo $us['plattform'] ?> </p>
                <p> Spielzeit der Hauptgeschichte: <?php echo $us['zeit_aufwand'] ?> </p>
                <p> Altersbeschränkung: <?php echo $us['alterbeschraenkung'] ?> </p>
                <p> Singleplayer/Multiplayer: <?php echo $us['single_multiplayer'] ?> </p>
                <p> Offizieller Preis: <?php echo $us['budget'] . " Euro" ?> </p>
                <p> Kurze Beschreibung: [PHP SPIELEBESCHREIBUNG] </p>
                <button id="nochEinSpielvorschlagButton" onclick="gotoRandom()"> Generiere
                    Randomspiel
                </button>
                <button id="nochEinSpielvorschlagButton" onclick="gotoUser()"> Generiere
                    Spiel nach meinen kriterien
                </button>
            </div>

        </li>
    </ul>

</div>

</body>

