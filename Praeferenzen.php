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

    $statement = $db->prepare("Delete FROM praeferenzen WHERE user_id = :user_id");
    $result = $statement->execute(array('user_id' => $_SESSION['user_id']));
    $user = $statement->fetch();


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

    <h1 id="HeaderPräferenzen"> Präferenzen </h1>
    <form name="FormGenre" method="post" id="FormGenre" action="Praeferenzen.php">
        <div id="Forms">
        <label id="Lable" for="Genre">Genre </label> <br>
        <input name="Genre" value="Action" type="radio" checked>Action <br>
        <input name="Genre" value="Adventure" type="radio">Adventure <br>
        <input name="Genre" value="Strategie" type="radio">Strategie <br>
        <input name="Genre" value="Jump & Run" type="radio">Jump & Run <br>
        <input name="Genre" value="Shooter" type="radio">Shooter <br>
        <input name="Genre" value="Rollenspiel" type="radio">Rollenspiel <br>
        </div>
        <div id="Forms">
        <label id="Lable" for="Plattform">Plattform </label> <br>
        <input name="Plattform" value="PC" type="radio" checked>PC <br>
        <input name="Plattform" value="PS4" type="radio">PS4 <br>
        <input name="Plattform" value="XBOX ONE" type="radio">XBOX ONE <br>
        <input name="Plattform" value="Nintendo Switch" type="radio">Nintendo Switch <br>
        </div>
        <div id="Forms">
        <label id="Lable" for="ZeitlicherAufwand">Zeitlicher Aufwand </label> <br>
        <input name="ZeitlicherAufwand" value="5" type="radio">bis zu 5 Stunden <br>
        <input name="ZeitlicherAufwand" value="10" type="radio">bis zu 10 Stunden <br>
        <input name="ZeitlicherAufwand" value="20" type="radio">bis zu 20 Stunden <br>
        <input name="ZeitlicherAufwand" value="30" type="radio">bis zu 30 Stunden <br>
        <input name="ZeitlicherAufwand" value="50" type="radio">bis zu 50 Stunden <br>
        <input name="ZeitlicherAufwand" value="600" type="radio">mehr als 50 Stunden <br>
        <input name="ZeitlicherAufwand" value="9999" type="radio" checked>Egal <br>
        </div>
        <div id="Forms">
        <label id="Lable" for="Altersbeschränkung">Altersbeschränkung </label> <br>
        <input name="Altersbeschraenkung" value="0" type="radio" checked>Bis zu FSK 0 <br>
        <input name="Altersbeschraenkung" value="6" type="radio">Bis zu FSK 6 <br>
        <input name="Altersbeschraenkung" value="12" type="radio">Bis zu FSK 12 <br>
        <input name="Altersbeschraenkung" value="16" type="radio">Bis zu FSK 16 <br>
        <input name="Altersbeschraenkung" value="18" type="radio">Bis zu FSK 18 <br>
        </div>
        <div id="Forms">
        <label id="Lable" for="Single/Multiplayer">Single/Multiplayer </label> <br>
        <input name="SingelMulti" value="Singleplayer" type="radio" checked>Singleplayer <br>
        <input name="SingelMulti" value="Multiplayer" type="radio">Multiplayer <br>
        </div>
        <div id="Forms">
        <label id="Lable" for="Budget">Budget </label> <br>
        <input name="Budget" value="5" type="radio">Bis zu 5€ <br>
        <input name="Budget" value="10" type="radio">Bis zu 10€ <br>
        <input name="Budget" value="20" type="radio">Bis zu 20€ <br>
        <input name="Budget" value="40" type="radio">Bis zu 40€ <br>
        <input name="Budget" value="60" type="radio">Bis zu 60€ <br>
        <input name="Budget" value="9999" type="radio" checked>Egal <br>
        </div>
        <br>
        <br>
        <div id="PräferenzenAbschickendiv">
        <button id="PräferenzenAbschicken" type="submit">Präferenzen aktualisieren</button>
        </div>
    </form>
</body>
</html>
