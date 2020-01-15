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
            <li id="logout"><a href="logout.php" class="navbar"><img src="https://img.icons8.com/pastel-glyph/64/000000/logout-rounded-down.png"></a></li>
            <li id="account"><a href="userPage.php" class="navbar"><img src="https://img.icons8.com/android/24/000000/user.png"></a></li>
        <?php else : ?>
            <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
            <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
            <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
        <?php endif; ?>
    </ul>
    <ul id="Navbar">
        <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
        <li id="account"><a href="userPage.php" class="navbar"><img src="https://img.icons8.com/android/24/000000/user.png"></a></li>
        <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
        <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
    </ul>
</div>
<div id="allePräferenzen">
<h1 id="HeaderPräferenzen"> Präferenzen </h1>
<form method="post" id="FormGenre">
    <label id="Lable" for="Genre">Genre </label> <br>
    <input id="Genre" name="Genre" value="Action" type="radio">Action <br>
    <input id="Genre" name="Genre" value="Adventure" type="radio">Adventure <br>
    <input id="Genre" name="Genre" value="Strategie" type="radio">Strategie <br>
    <input id="Genre" name="Genre" value="Jump and Run" type="radio">Jump & Run <br>
    <input id="Genre" name="Genre" value="Shooter" type="radio">Shooter <br>
    <input id="Genre" name="Genre" value="Rollenspiel" type="radio">Rollenspiel <br>
    <input id="Genre" name="Genre" value="Egal" type="radio" checked>Egal <br>
</form>

<form method="post" id="FormPlattform">
    <label id="Lable" for="Plattform">Plattform </label> <br>
    <input id="Plattform" name="Plattform" value="PC" type="radio">PC <br>
    <input id="Plattform" name="Plattform" value="PS4" type="radio">PS4 <br>
    <input id="Plattform" name="Plattform" value="XBOX ONE" type="radio">XBOX ONE <br>
    <input id="Plattform" name="Plattform" value="Nintendo Switch" type="radio">Nintendo Switch <br>
    <input id="Plattform" name="Plattform" value="Egal" type="radio"checked>Egal <br>
</form>

<form method="post" id="FormZeit">
    <label id="Lable" for="Zeitlicher Aufwand">Zeitlicher Aufwand </label> <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="5Stunden" type="radio">bis zu 5 Stunden <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="10Stunden" type="radio">bis zu 10 Stunden <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="20Stunden" type="radio">bis zu 20 Stunden <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="30Stunden" type="radio">bis zu 30 Stunden <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="50Stunden" type="radio">bis zu 50 Stunden <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="50+Stunden" type="radio">mehr als 50 Stunden <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="Egal" type="radio"checked>Egal <br>
</form>

<form method="post" id="FormAlter">
    <label id="Lable" for="Altersbeschränkung">Altersbeschränkung </label> <br>
    <input id="Altersbeschränkung" name="Altersbeschränkung" value="FSK0" type="radio">FSK 0 <br>
    <input id="Altersbeschränkung" name="Altersbeschränkung" value="FSK6" type="radio">FSK 6 <br>
    <input id="Altersbeschränkung" name="Altersbeschränkung" value="FSK12" type="radio">FSK 12 <br>
    <input id="Altersbeschränkung" name="Altersbeschränkung" value="FSK16" type="radio">FSK 16 <br>
    <input id="Altersbeschränkung" name="Altersbeschränkung" value="FSK18" type="radio">FSK 18 <br>
    <input id="Altersbeschränkung" name="Altersbeschränkung" value="Egal" type="radio"checked>Egal <br>
</form>

<form method="post" id="FormSingleMulti">
    <label id="Lable" for="Single/Multiplayer">Single/Multiplayer </label> <br>
    <input id="Single/Multiplayer" name="Altersbeschränkung" value="Singleplayer" type="radio">Singleplayer <br>
    <input id="Single/Multiplayer" name="Altersbeschränkung" value="Multiplayer" type="radio"checked>Multiplayer <br>
</form>
<form method="post" id="FormBudget">
    <label id="Lable" for="Budget">Budget </label> <br>
    <input id="Budget" name="Budget" value="5Euro" type="radio">Von 0€ bis zu 5€ <br>
    <input id="Budget" name="Budget" value="10Euro" type="radio">Von 5€ bis zu 10€ <br>
    <input id="Budget" name="Budget" value="20Euro" type="radio">Von 10€ bis zu 20€ <br>
    <input id="Budget" name="Budget" value="40Euro" type="radio">Von 20€ bis zu 40€ <br>
    <input id="Budget" name="Budget" value="60Euro" type="radio">Von 40€ bis zu 60€ <br>
    <input id="Budget" name="Budget" value="Egal" type="radio"checked>Egal <br>
</form>

<button id="PräferenzenAbschicken" type="submit" onclick="PraeferenzenAbschicken()" >Präferenzen aktualisieren</button>
</div>
</body>
</html>
