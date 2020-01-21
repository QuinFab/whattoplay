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

    $query = "INSERT INTO user (user_id, email, password, erstelltam) VALUES (:user_id, :email, :password, :erstelltam)";

    $preparedStmt = $db->prepare($query);

    if ($_POST['password'] != $_POST['password_again']) {
        $error2 = ('<script> alert("Passwörter stimmen nicht überein!");</script>');

    } else {
        if ($_POST['email'] != $_POST['UserMail_again']) {
            $error1 = ('<script> alert("Emails stimmen nicht überein!");</script>');
        } else {
            $preparedStmt->bindValue(':user_id', $_POST['user_id']);
            $preparedStmt->bindValue(':email', $_POST['email']);
            $preparedStmt->bindValue(':password', password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]));
            $preparedStmt->bindValue(':erstelltam', date('Y-m-d H:i:s'));
            $res = $preparedStmt->execute();


            $query = "INSERT INTO praeferenzen (user_id, Genre, Plattform, zeit, FSK, Player, Budget) VALUES (:user_id, :Genre, :Plattform, :ZeitlicherAufwand, :Altersbeschraenkung, :SingelMulti, :Budget)";

            $preparedStmt = $db->prepare($query);

            $preparedStmt->bindValue(':user_id', $_POST['user_id']);
            $preparedStmt->bindValue(':Genre', $_POST['Genre']);
            $preparedStmt->bindValue(':Plattform', $_POST['Plattform']);
            $preparedStmt->bindValue(':ZeitlicherAufwand', $_POST['ZeitlicherAufwand']);
            $preparedStmt->bindValue(':Altersbeschraenkung', $_POST['Altersbeschraenkung']);
            $preparedStmt->bindValue(':SingelMulti', $_POST['SingelMulti']);
            $preparedStmt->bindValue(':Budget', $_POST['Budget']);
            $res = $preparedStmt->execute();

            header('Location: einloggen.php');
        }
    }
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
<div id="registrierung1">
<div id="registrierung">
<h1>Registrieren</h1>
<p> Bitte erstelle dir einen Account und gib deine Spielepräferenzen an! <br>
    Keine Sorge, du kannst die Präferenzen nachträglich jederzeit ändern!</p>

<form method="post" action="registrieren.php">

    <div id="formUserdaten">
        <label class="UserInfoBeschreibung" for="user_id">Benutzername </label>
        <input class="UserInfo" id="user_id" name="user_id" type="text" placeholder="z.B. MaxMaster3314">
        <br><br>
        <label class="UserInfoBeschreibung" for="password">Passwort </label>
        <input class="UserInfo" id="password" name="password" type="password" placeholder="Passwort" minlength="1"
               maxlength="16" required pattern="^(?=[^\d_].*?\d)\w(\w|[!@#$%]){8,16}" title="- Ihr Passwort muss zwischen 6 und 12 Zeichen lang sein
- mindestens eine Ziffer enthalten
- darf aber nicht mit einer Ziffer oder einem Sonderzeichen anfangen">
        <!-- hoover
        Gesamtlänge zwischen 6 und 12 Zeichen
alphanumerische und ausgewählte Sonderzeichen sind erlaubt
erstes Zeichen darf weder Ziffer, noch Unterstrich noch Sonderzeichen sein
muss mindestens eine Ziffer enthalten
!-->
        <br><br>
        <label class="UserInfoBeschreibung" for="password_again">Passwort Bestätigen </label>
        <input class="UserInfo" id="password_again" name="password_again" type="password"
               placeholder="Passwort Bestätigen"
               minlength="1" maxlength="16" required pattern="^(?=[^\d_].*?\d)\w(\w|[!@#$%]){8,16}" title="- Ihr Passwort muss zwischen 6 und 12 Zeichen lang sein
- mindestens eine Ziffer enthalten
- darf aber nicht mit einer Ziffer anfangen">
        <!-- hoover
      Gesamtlänge zwischen 6 und 12 Zeichen
alphanumerische und ausgewählte Sonderzeichen sind erlaubt
erstes Zeichen darf weder Ziffer, noch Unterstrich noch Sonderzeichen sein
muss mindestens eine Ziffer enthalten
!-->
        <br><br>
        <label class="UserInfoBeschreibung" for="email"> Email-Adresse </label>
        <input class="UserInfo" id="email" name="email" type="Email" placeholder="z.B. meineMail@web.de" required
               pattern="^[-_.\w]+@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.){1,300}[a-zA-Z]{2,9})$" title="- Ihre Email muss ein @ beinhalten">
        <br><br>
        <label class="UserInfoBeschreibung" for="UserMail_again"> Email-Adresse bestätigen </label>
        <input class="UserInfo" id="UserMail_again" name="UserMail_again" type="email"
               placeholder="z.B. meineMail@web.de" required
               pattern="^[-_.\w]+@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.){1,300}[a-zA-Z]{2,9})$" title="- Ihre Email muss ein @ beinhalten">
        <br>
    </div>
<br>
    <div id="PräferenzenKasten">
            <div id="allePräferenzen">
                <h1 id="HeaderPräferenzen">  </h1>
                <div id="UserPraeferenzen">
                    <div id="Forms">
                            <label id="Lable" for="Genre">Genre</label> <br>
                            <div id="RadioButton">
                            <input name="Genre" value="Action" type="radio" checked>Action <br>
                            <input name="Genre" value="Adventure" type="radio">Adventure <br>
                            <input name="Genre" value="Strategie" type="radio">Strategie <br>
                            <input name="Genre" value="Jump and Run" type="radio">Jump & Run <br>
                            <input name="Genre" value="Shooter" type="radio">Shooter <br>
                            <input name="Genre" value="Rollenspiel" type="radio">Rollenspiel <br>
                            </div>
                     </div>
                        <div id="Forms" id="left">
                            <label id="Lable" for="Plattform">Plattform</label> <br>
                            <div id="RadioButton">
                            <input name="Plattform" value="PC" type="radio" checked>PC <br>
                            <input name="Plattform" value="PS4" type="radio">PS4 <br>
                            <input name="Plattform" value="XBOX ONE" type="radio">XBOX ONE <br>
                            <input name="Plattform" value="Nintendo Switch" type="radio">Nintendo Switch <br>
                            </div>
                        </div>
                        <div id="Forms" id="left">
                            <label id="Lable" for="ZeitlicherAufwand">Zeitaufwand</label> <br>
                            <div id="RadioButton">
                            <input name="ZeitlicherAufwand" value="5" type="radio">bis zu 5 Stunden <br>
                            <input name="ZeitlicherAufwand" value="10" type="radio">bis zu 10 Stunden <br>
                            <input name="ZeitlicherAufwand" value="20" type="radio">bis zu 20 Stunden <br>
                            <input name="ZeitlicherAufwand" value="30" type="radio">bis zu 30 Stunden <br>
                            <input name="ZeitlicherAufwand" value="50" type="radio">bis zu 50 Stunden <br>
                            <input name="ZeitlicherAufwand" value="600" type="radio">mehr als 50 Stunden <br>
                            <input name="ZeitlicherAufwand" value="9999" type="radio" checked>Egal <br>
                            </div>
                        </div>
                        <div id="Forms" id="left">
                            <label id="Lable" for="Altersbeschränkung">FSK</label> <br>
                            <div id="RadioButton">
                            <input name="Altersbeschraenkung" value="6" type="radio">Bis zu FSK 6 <br>
                            <input name="Altersbeschraenkung" value="12" type="radio" checked>Bis zu FSK 12 <br>
                            <input name="Altersbeschraenkung" value="16" type="radio">Bis zu FSK 16 <br>
                            <input name="Altersbeschraenkung" value="18" type="radio">Bis zu FSK 18 <br>
                            </div>
                        </div>
                        <div id="Forms" id="left">
                            <label id="Lable" for="Single/Multiplayer">Solo/Ko-op</label> <br>
                            <div id="RadioButton">
                            <input name="SingelMulti" value="Singleplayer" type="radio" checked>Singleplayer <br>
                            <input name="SingelMulti" value="Multiplayer" type="radio">Multiplayer <br>
                            </div>
                        </div>
                        <div id="Forms" id="left">
                            <label id="Lable" for="Budget">Budget</label> <br>
                            <div id="RadioButton">
                            <input name="Budget" value="5" type="radio">Bis zu 5€ <br>
                            <input name="Budget" value="10" type="radio">Bis zu 10€ <br>
                            <input name="Budget" value="20" type="radio">Bis zu 20€ <br>
                            <input name="Budget" value="40" type="radio">Bis zu 40€ <br>
                            <input name="Budget" value="60" type="radio">Bis zu 60€ <br>
                            <input name="Budget" value="9999" type="radio" checked>Egal <br>
                            </div>
                        </div>


    <div id="allePräferenzen">
        <h1 id="HeaderPräferenzen"></h1>
        <div id="UserPraeferenzen">
            <div id="Forms">
                <label id="Lable" for="Genre">Genre</label> <br>
                <input name="Genre" value="Action" type="radio" checked>Action <br>
                <input name="Genre" value="Adventure" type="radio">Adventure <br>
                <input name="Genre" value="Strategie" type="radio">Strategie <br>
                <input name="Genre" value="Jump and Run" type="radio">Jump & Run <br>
                <input name="Genre" value="Shooter" type="radio">Shooter <br>
                <input name="Genre" value="Rollenspiel" type="radio">Rollenspiel <br>
            </div>
            <div id="Forms">
                <label id="Lable" for="Plattform">Plattform</label> <br>
                <input name="Plattform" value="PC" type="radio" checked>PC <br>
                <input name="Plattform" value="PS4" type="radio">PS4 <br>
                <input name="Plattform" value="XBOX ONE" type="radio">XBOX ONE <br>
                <input name="Plattform" value="Nintendo Switch" type="radio">Nintendo Switch <br>
            </div>
            </div>
            </div>

            </div>
    </div>
    <div id="RegistrierenButtondiv">
        <button id="registrierenButton" type="submit"> Registrierung bestätigen</button>
    </div>

        </div>
        <div id="RegistrierenButtondiv">
            <button id="registrierenButton" type="submit"> Registrierung bestätigen</button>
        </div>
</form>
<?php
if (isset($error1))
    echo $error2;
if (isset($error2))
    echo $error1;
?>
</body>
</html>
