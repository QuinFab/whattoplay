<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Registrieren</title>

    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <script src="js/custom.js"></script>
</head>
<body>

<h1>Registrieren</h1>
<p> Jetzt die relevanten Information eintippen und direkt loslegen!</p>

<form method="post">
        <label for="Username">Benutzername </label>
        <input id="Username" name="Username" type="text" placeholder="z.B. MaxMaster3314">
        <br>
        <label for="Passwort">Passwort </label>
        <input id="Passwort" name="Passwort" type="password" placeholder="Passwort">
         <br>
        <label for="UserMail">Email-Adresse </label>
        <input id="UserMail" name="UserMail" type="email" placeholder="z.B. meineMail@web.de">
         <br>
        <label>Email-Adresse bestätigen </label>
        <input type="email" placeholder="z.B. meineMail@web.de">

    <button id="registrieren" type="submit" onclick="Platzhalter()" >Registrierung bestätigen</button>

<!-- HIER NOCH PHP FUNKTION REINKNALLEN -->
</form>

</body>
</html>