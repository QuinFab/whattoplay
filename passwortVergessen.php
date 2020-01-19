<?php
/*require "php-config.php";
$prüf = 0;
if (isset($_POST['Genre'])) {
    $prüf++;
// VERARBEITUNG
    $db = new PDO(
        'mysql:host=localhost;dbname=iba',
        'root',
        'root' //root pwd root für mac
    );
    $email1 = $_POST['email'];
    $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();
    echo $user['password'];*/


/*    $statement = $db->prepare("Delete password FROM user WHERE user_id = :user_id");
    $result = $statement->execute(array('user_id' => $_SESSION['user_id']));
    $user = $statement->fetch();


    $query = "INSERT INTO user (password) VALUES (:neuespasswort)";
    $preparedStmt = $db->prepare($query);

    $preparedStmt->bindValue(':user_id', $_SESSION['user_id']);
    $preparedStmt->bindValue(':neuespasswort', password_hash($_POST['neuespasswort'], PASSWORD_BCRYPT, ['cost' => 12]));
    $res = $preparedStmt->execute();*/



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <script src="js/custom.js"></script>
</head>
<body>
<div>
    <ul id="Navbar">
        <?php if (isset($_SESSION["user_id"])) : ?>
            <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
            <li id="logout"><a href="logout.php" class="navbar"><img
                            src="https://img.icons8.com/pastel-glyph/64/000000/logout-rounded-down.png"></a></li>
            <li id="account"><a href="userPage.php" class="navbar"><img
                            src="https://img.icons8.com/android/24/000000/user.png"></a></li>
        <?php else : ?>
            <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
            <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
            <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
        <?php endif; ?>
    </ul>
</div>
<h1>Passwort Zurücksetzen</h1>
<form id="passwortZurucksetzen" method="post">
    <label for="email"> Deine Email</label>
    <br>
    <input id="email" placeholder="Deine Mail">
    <br>
    <label for="passwortZuruecksetzen">Neues Passwort</label>
    <br>
    <input id="neuespasswort" type="text" placeholder="Neues Passwort">
    <br>
    <input id="neuespasswortbestätigen" type="text" placeholder="Neues Passwort bestätigen">
    <br>
    <button type="submit">Passwort Zurücksetzen </button>
</form>

</body>
</html>
