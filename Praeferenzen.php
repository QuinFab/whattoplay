<?php
require "php-config.php";
$prüf = 0;
if (isset($_POST['Genre'])) {
    $prüf++;
// VERARBEITUNG
    $db = new PDO(
        'mysql:host=localhost;dbname=iba',
        'root',
        '' //root pwd root für mac
    );
    if ($db == NULL) {
        echo "PDO konnte nicht erstellt werden!";
    }
    $query = "INSERT INTO praeferenzen (user_id, Genre, Plattform, zeit, FSK, Player, Budget) VALUES (:user_id, :Genre, :Plattform, :ZeitlicherAufwand, :Altersbeschraenkung, :SingelMulti, :Budget)";
    if ($query == NULL) {
        echo "query ist NULL";
    } else
        $preparedStmt = $db->prepare($query);
    if ($preparedStmt == NULL) {
        echo "preparedStmt ist NULL";
    }
    $preparedStmt->bindValue(':user_id', $_SESSION['user_id']);
    $preparedStmt->bindValue(':Genre', $_POST['Genre']);
    $preparedStmt->bindValue(':Plattform', $_POST['Plattform']);
    $preparedStmt->bindValue(':ZeitlicherAufwand', $_POST['ZeitlicherAufwand']);
    $preparedStmt->bindValue(':Altersbeschraenkung', $_POST['Altersbeschraenkung']);
    $preparedStmt->bindValue(':SingelMulti', $_POST['SingelMulti']);
    $preparedStmt->bindValue(':Budget', $_POST['Budget']);
    $res = $preparedStmt->execute();
    if ($res == NULL) {
        echo "res ist NULL";
    }
   // header('Location: index.php');
} else {
    if ($prüf != 0)
        echo "POST wird nicht erkannt!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Präferenzen</title>

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
<div id="allePräferenzen">
    <h1 id="HeaderPräferenzen"> Präferenzen </h1>
    <form name="FormGenre" method="post" id="FormGenre" action="Praeferenzen.php">
        <div id="FormGenre">
        <label id="Lable" for="Genre">Genre </label> <br>
        <input name="Genre" value="Action" type="radio">Action <br>
        <input name="Genre" value="Adventure" type="radio">Adventure <br>
        <input name="Genre" value="Strategie" type="radio">Strategie <br>
        <input name="Genre" value="Jump and Run" type="radio">Jump & Run <br>
        <input name="Genre" value="Shooter" type="radio">Shooter <br>
        <input name="Genre" value="Rollenspiel" type="radio">Rollenspiel <br>
        <input name="Genre" value="Egal" type="radio" checked>Egal <br>
        </div>
        <label id="Plattform" for="Plattform">Plattform </label> <br>
        <input name="Plattform" value="PC" type="radio">PC <br>
        <input name="Plattform" value="PS4" type="radio">PS4 <br>
        <input name="Plattform" value="XBOX ONE" type="radio">XBOX ONE <br>
        <input name="Plattform" value="Nintendo Switch" type="radio">Nintendo Switch <br>
        <input name="Plattform" value="Egal" type="radio" checked>Egal <br>

        <label id="Lable" for="ZeitlicherAufwand">Zeitlicher Aufwand </label> <br>
        <input name="ZeitlicherAufwand" value="5Stunden" type="radio">bis zu 5 Stunden <br>
        <input name="ZeitlicherAufwand" value="10Stunden" type="radio">bis zu 10 Stunden <br>
        <input name="ZeitlicherAufwand" value="20Stunden" type="radio">bis zu 20 Stunden <br>
        <input name="ZeitlicherAufwand" value="30Stunden" type="radio">bis zu 30 Stunden <br>
        <input name="ZeitlicherAufwand" value="50Stunden" type="radio">bis zu 50 Stunden <br>
        <input name="ZeitlicherAufwand" value="50+Stunden" type="radio">mehr als 50 Stunden <br>
        <input name="ZeitlicherAufwand" value="Egal" type="radio" checked>Egal <br>

        <label id="Lable" for="Altersbeschränkung">Altersbeschränkung </label> <br>
        <input name="Altersbeschraenkung" value="FSK0" type="radio">FSK 0 <br>
        <input name="Altersbeschraenkung" value="FSK6" type="radio">FSK 6 <br>
        <input name="Altersbeschraenkung" value="FSK12" type="radio">FSK 12 <br>
        <input name="Altersbeschraenkung" value="FSK16" type="radio">FSK 16 <br>
        <input name="Altersbeschraenkung" value="FSK18" type="radio">FSK 18 <br>
        <input name="Altersbeschraenkung" value="Egal" type="radio" checked>Egal <br>

        <label id="Lable" for="Single/Multiplayer">Single/Multiplayer </label> <br>
        <input name="SingelMulti" value="Singleplayer" type="radio">Singleplayer <br>
        <input name="SingelMulti" value="Multiplayer" type="radio" checked>Multiplayer <br>

        <label id="Lable" for="Budget">Budget </label> <br>
        <input name="Budget" value="5Euro" type="radio">Von 0€ bis zu 5€ <br>
        <input name="Budget" value="10Euro" type="radio">Von 5€ bis zu 10€ <br>
        <input name="Budget" value="20Euro" type="radio">Von 10€ bis zu 20€ <br>
        <input name="Budget" value="40Euro" type="radio">Von 20€ bis zu 40€ <br>
        <input name="Budget" value="60Euro" type="radio">Von 40€ bis zu 60€ <br>
        <input name="Budget" value="Egal" type="radio" checked>Egal <br>
        <button id="PräferenzenAbschicken" type="submit">Präferenzen aktualisieren
        </button>
    </form>
</div>
</body>
</html>
