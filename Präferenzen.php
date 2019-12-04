<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Präferenzen</title>

    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <script src="js/custom.js"></script>
</head>
<body>
<h1 id="HeaderPräferenzen"> Präferenzen </h1>
<form method="post" id="FormGenre">
    <label id="Lable" for="Genre">Genre </label> <br>
    <input id="Genre" name="Genre" value="Action" type="radio">Action <br>
    <input id="Genre" name="Genre" value="Adventure" type="radio">Adventure <br>
    <input id="Genre" name="Genre" value="Strategie" type="radio">Strategie <br>
    <input id="Genre" name="Genre" value="Jump and Run" type="radio">Jump & Run <br>
    <input id="Genre" name="Genre" value="Shooter" type="radio">Shooter <br>
    <input id="Genre" name="Genre" value="Rollenspiel" type="radio">Rollenspiel <br>
    <input id="Genre" name="Genre" value="Egal" type="radio">Egal <br>
</form>

<form method="post" id="FormPlattform">
    <label id="Lable" for="Plattform">Plattform </label> <br>
    <input id="Plattform" name="Plattform" value="PC" type="radio">PC <br>
    <input id="Plattform" name="Plattform" value="PS4" type="radio">PS4 <br>
    <input id="Plattform" name="Plattform" value="XBOX ONE" type="radio">XBOX ONE <br>
    <input id="Plattform" name="Plattform" value="Nintendo Switch" type="radio">Nintendo Switch <br>
    <input id="Plattform" name="Plattform" value="Egal" type="radio">Egal <br>
</form>

<form method="post" id="FormZeit">
    <label id="Lable" for="Zeitlicher Aufwand">Zeitlicher Aufwand </label> <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="5Stunden" type="radio">ca. 5 Stunden <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="10Stunden" type="radio">ca. 10 Stunden <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="20Stunden" type="radio">ca. 20 Stunden <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="30Stunden" type="radio">ca. 30 Stunden <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="50Stunden" type="radio">ca. 50 Stunden <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="50+Stunden" type="radio">50+ Stunden <br>
    <input id="Zeitlicher Aufwand" name="Zeitlicher Aufwand" value="Egal" type="radio">Egal <br>
</form>

<form method="post" id="FormAlter">
    <label id="Lable" for="Altersbeschränkung">Altersbeschränkung </label> <br>
    <input id="Altersbeschränkung" name="Altersbeschränkung" value="FSK0" type="radio">FSK 0 <br>
    <input id="Altersbeschränkung" name="Altersbeschränkung" value="FSK6" type="radio">FSK 6 <br>
    <input id="Altersbeschränkung" name="Altersbeschränkung" value="FSK12" type="radio">FSK 12 <br>
    <input id="Altersbeschränkung" name="Altersbeschränkung" value="FSK16" type="radio">FSK 16 <br>
    <input id="Altersbeschränkung" name="Altersbeschränkung" value="FSK18" type="radio">FSK 18 <br>
    <input id="Altersbeschränkung" name="Altersbeschränkung" value="Egal" type="radio">Egal <br>
</form>

<form method="post" id="FormSingleMulti">
    <label id="Lable" for="Single/Multiplayer">Single/Multiplayer </label> <br>
    <input id="Single/Multiplayer" name="Altersbeschränkung" value="Singleplayer" type="radio">Singleplayer <br>
    <input id="Single/Multiplayer" name="Altersbeschränkung" value="Multiplayer" type="radio">Multiplayer <br>
</form>
<form method="post" id="FormBudget">
    <label id="Lable" for="Budget">Budget </label> <br>
    <input id="Budget" name="Budget" value="5Euro" type="radio">Von 0€ bis zu 5€ <br>
    <input id="Budget" name="Budget" value="10Euro" type="radio">Von 5€ bis zu 10€ <br>
    <input id="Budget" name="Budget" value="20Euro" type="radio">Von 10€ bis zu 20€ <br>
    <input id="Budget" name="Budget" value="40Euro" type="radio">Von 20€ bis zu 40€ <br>
    <input id="Budget" name="Budget" value="60Euro" type="radio">Von 40€ bis zu 60€ <br>
    <input id="Budget" name="Budget" value="Egal" type="radio">Egal <br>
</form>

<button id="PräferenzenAbschicken" type="submit" onclick="PraeferenzenAbschicken()" >Präferenzen aktualisieren</button>

</body>
</html>
