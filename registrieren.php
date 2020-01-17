<?php
require "php-config.php";
error_reporting(E_ALL);
$prüf = 0;

if (isset($_POST['email'])) {
    $prüf++;
// VERARBEITUNG
    $db = new PDO(
        'mysql:host=localhost;dbname=iba',
        'root',
        '' //pwd root für mac
    );
    if ($db == NULL) {
        print_r("PDO konnte nicht erstellt werden!");
    }
    $query = "INSERT INTO user (user_id, email, password, erstelltam) VALUES (:user_id, :email, :password, :erstelltam)";
    if ($query == NULL) {
        print_r("query ist NULL");
    } else
        $preparedStmt = $db->prepare($query);
    if ($preparedStmt == NULL) {
        print_r("preparedStmt ist NULL");
    }
    $preparedStmt->bindValue(':user_id', $_POST['user_id']);
    $preparedStmt->bindValue(':email', $_POST['email']);
    $preparedStmt->bindValue(':password', password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]));
    $preparedStmt->bindValue(':erstelltam', date('Y-m-d H:i:s'));
    $res = $preparedStmt->execute();

    $query = "INSERT INTO praeferenzen (user_id, Genre, Plattform, zeit, FSK, Player, Budget) VALUES (:user_id, :Genre, :Plattform, :ZeitlicherAufwand, :Altersbeschraenkung, :SingelMulti, :Budget)";
    if ($query == NULL) {
        echo "query ist NULL";
    } else
        $preparedStmt = $db->prepare($query);
    if ($preparedStmt == NULL) {
        echo "preparedStmt ist NULL";
    }
    $preparedStmt->bindValue(':user_id', $_POST['user_id']);
    $preparedStmt->bindValue(':Genre', $_POST['Genre']);
    $preparedStmt->bindValue(':Plattform', $_POST['Plattform']);
    $preparedStmt->bindValue(':ZeitlicherAufwand', $_POST['ZeitlicherAufwand']);
    $preparedStmt->bindValue(':Altersbeschraenkung', $_POST['Altersbeschraenkung']);
    $preparedStmt->bindValue(':SingelMulti', $_POST['SingelMulti']);
    $preparedStmt->bindValue(':Budget', $_POST['Budget']);
    $res = $preparedStmt->execute();
    if ($res == NULL) {
        print_r("res ist NULL");
    }


    //header('Location: einloggen.php');
} else {
    if ($prüf != 0)
        print_r("POST wird nicht erkannt!");
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Registrieren</title>
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

<h1>Registrieren</h1>
<p> Bitte erstelle dir einen Account und gib deine Spielepräferenzen an! <br>
    Keine Sorge, du kannst die Präferenzen nachträglich jederzeit ändern!</p>


<form method="post" action="registrieren.php">
    <div id="formUserdaten">
    <label for="user_id">Benutzername </label>
    <input id="user_id" name="user_id" type="text" placeholder="z.B. MaxMaster3314">
    <br>
    <label for="password">Passwort </label>
    <input id="password" name="password" type="password" placeholder="Passwort" minlength="1" maxlength="16">
    <br>
    <label for="password_again">Passwort Bestätigen </label>
    <input id="password_again" name="password_again" type="password" placeholder="Passwort Bestätigen"
           minlength="1" maxlength="16">
    <br>
    <label for="email"> Email-Adresse </label>
    <input id="email" name="email" type="Email" placeholder="z.B. meineMail@web.de">
    <br>
    <label for="UserMail_again"> Email-Adresse bestätigen </label>
    <input id="UserMail_again" name="UserMail_again" type="email" placeholder="z.B. meineMail@web.de">
    <br>
    </div>


<div id="allePräferenzen">
    <h1 id="HeaderPräferenzen">  </h1>
        <div id="Forms">
            <label id="Lable" for="Genre">Genre </label> <br>
            <input name="Genre" value="Action" type="radio" checked>Action <br>
            <input name="Genre" value="Adventure" type="radio">Adventure <br>
            <input name="Genre" value="Strategie" type="radio">Strategie <br>
            <input name="Genre" value="Jump and Run" type="radio">Jump & Run <br>
            <input name="Genre" value="Shooter" type="radio">Shooter <br>
            <input name="Genre" value="Rollenspiel" type="radio">Rollenspiel <br>
        </div>
        <div id="Forms">
            <label id="Plattform" for="Plattform">Plattform </label> <br>
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
            <input name="Altersbeschraenkung" value="6" type="radio">Bis zu FSK 6 <br>
            <input name="Altersbeschraenkung" value="12" type="radio" checked>Bis zu FSK 12 <br>
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
            <input name="Budget" value="5" type="radio">Von 0€ bis zu 5€ <br>
            <input name="Budget" value="10" type="radio">Von 5€ bis zu 10€ <br>
            <input name="Budget" value="20" type="radio">Von 10€ bis zu 20€ <br>
            <input name="Budget" value="40" type="radio">Von 20€ bis zu 40€ <br>
            <input name="Budget" value="60" type="radio">Von 40€ bis zu 60€ <br>
            <input name="Budget" value="9999" type="radio" checked>Egal <br>
        </div>
    <button id="registrierenButton" type="submit"> Registrierung bestätigen</button>
    </form>

</body>
</html>
