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
<p> Jetzt die relevanten Information eintippen und direkt loslegen!</p>

<form method="post" action="registrieren.php">
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
    <button id="registrierenButton" type="submit">Registrierung bestätigen</button>
</form>

</body>
</html>
