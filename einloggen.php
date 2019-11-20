<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Einloggen</title>

    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <script src="js/custom.js"></script>
</head>
<body>
<h1> Einloggen </h1>
<form method="post">
    <label for="Username">Benutzername </label>
    <input id="Username" name="Username" type="text" placeholder="z.B. MaxMaster3314">
    <br>
    <label for="Passwort">Passwort </label>
    <input id="Passwort" name="Passwort" type="password" placeholder="Passwort">
    <br>

    <button type="submit" onclick="Platzhalter()">Einloggen</button>
    <!-- HIER NOCH PHP FUNKTION REINKNALLEN -->
</form>

</body>
</html>