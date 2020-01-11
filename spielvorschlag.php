<?php
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
            <li id="logout"><a href="logout.php" class="navbar"><img src="https://img.icons8.com/pastel-glyph/64/000000/logout-rounded-down.png"></a></li>
            <li id="account"><a href="userPage.php" class="navbar"><img src="https://img.icons8.com/android/24/000000/user.png"></a></li>
        <?php else : ?>
            <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
            <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
            <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
        <?php endif; ?>
    </ul>
</div>
<div class="SpielVorschlag">
    <ul>
        <h1 id="Spieletitel"> Platzhalter: Spieletitel</h1>
<li> <img id="Spielecover" src="https://inter67.de/wp-content/uploads/2018/06/Platzhalter-1.png"> </li>
    <li><div id="Spielebeschreibung">
    <p> Platzhalter für die Spielebeschreibung mit Dummy Text zum stylen. Lorem ipsum dolor amet kinfolk YOLO cornhole semiotics, </p>
    <p>cold-pressed migas lo-fi. Yr 3 wolf moon hammock viral, chillwave mumblecore meggings keffiyeh cold-pressed banjo disrupt </p>
    <p>mustache pork belly retro. Jean shorts put a bird on it subway tile, knausgaard tattooed activated charcoal </p>
    <p>asymmetrical af fashion axe. Post-ironic mlkshk activated charcoal chia +1. </p>
    <p> Polaroid wayfarers brooklyn, cray crucifix normcore woke cornhole brunch butcher blue bottle craft beer ennui deep v. </p>
    <p> Four dollar toast semiotics blue bottle forage food truck wayfarers asymmetrical glossier. Meh post-ironic listicle bespoke. </p>
    </div></li>
        </ul>
</div>


</body>
