<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> WhatToPlay</title>

    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <script src="js/custom.js"></script>
    <?php $db_link = mysqli_connect (
                     "localhost",
                     "root",
                     "",
                     "iba"
                    );
?>
</head>
<body>

<h1> WhatToPlay?</h1>
<p> Manchmal ist es garnicht so leicht, rauszufinden welches Spiel man spielen soll. <br>
    Diese Website soll dir dabei helfen, dich zurecht zu finden!<br>
    Ob schon erfahrener Zocker oder Neueinsteiger, diese Website ist für jeden.<br>
    Erstelle dir jetzt einen Account, um direkt loszulegen!</p>
<button type="button" onclick="redirectZuRegistrieren()">Registrieren</button>

<h2> Schon Mitglied?</h2>
<button type="button" onclick="redirectEinloggen()">Einloggen</button>

</body>
</html>