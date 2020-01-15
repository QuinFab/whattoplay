<?php
require "php-config.php";

$pdo = new PDO('mysql:host=localhost;dbname=iba', 'root', ''); //Mac = 'root'

$userID = $_SESSION['user_id'];
$statement = $pdo->prepare("SELECT * FROM praeferenzen WHERE user_id = :user_id");
$result = $statement->execute(array('user_id' => $userID));
$user = $statement->fetch();

$_SESSION['Genre'] = $user['Genre'];
$_SESSION['Plattform'] = $user['Plattform'];
$_SESSION['zeit'] = $user['zeit'];
$_SESSION['FSK'] = $user['FSK'];
$_SESSION['Player'] = $user['Player'];
$_SESSION['Budget'] = $user['Budget'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Benutzerinformationen</title>

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

<p>  <?php
    echo "Benutzername: " . $_SESSION["user_id"];
    ?>
</p>
<p>
    <?php
    echo "E-Mail-Adresse: " . $_SESSION["email"];
    ?>
</p>
<p>
    <?php
    echo "1: " . $_SESSION["Genre"];
    ?>
</p>
<p>
    <?php
    echo "2: " .$_SESSION['Plattform'];
    ?>
</p>
<p>
    <?php
    echo "3: " . $_SESSION['zeit'];
    ?>
</p>
<p>
    <?php
    echo "4: " .$_SESSION['FSK'];
    ?>
</p>
<p>
    <?php
    echo "5: " . $_SESSION['Player'];
    ?>
</p>
<p>
    <?php
    echo "6: " .$_SESSION['Budget'];
    ?>
</p>

</body>
</html>
