<!DOCTYPE html>
<?php

print_r("-2");
if (isset($_POST['email'])) {

    print_r("-1");
    // VERARBEITUNG
    $db = new PDO(
        'mysql:host=localhost;dbname=iba',
        'root',
        ''
    );

    print_r("0");
    if ($db == NULL) {
        print_r("error db");
    }
    /*$user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $password_again = $_POST['password_again'];
    $email = $_POST['email'];
    $email_again = $_POST['UserMail_again'];*/
    //  if ($user_id != 0 and $email == UserMail_again and $password == $password_again) {

    $query = "INSERT INTO user (user_id, email, password) VALUES (:user_id, :email, :password)";
    if ($query == NULL) {
        print_r("query ist NULL");
    }
    else
    {
        print_r($query);
    }
    $preparedStmt = $db->prepare($query);
    if ($preparedStmt == NULL) {
        print_r("preparedStmt ist NULL");
    }
    else
    {
        print_r($preparedStmt);
    }
    $preparedStmt->bindValue(':user_id', $_POST['user_id']);
    $preparedStmt->bindValue(':email', $_POST['email']);
    $preparedStmt->bindValue(':password', password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]));
    $res = $preparedStmt->execute();
    if($res == NULL)
    {
        print_r("res ist NULL");
    }
    else
    {
        print_r($res);
    }
    //header('Location: einloggen.php');
    // } else {
    //    print_r("geht nicht");
    //}
//header('Location: einloggen.php');
}
?>
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
        <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
        <li id="account">
            <a href="userPage.php" class="navbar">
                <img src="https://img.icons8.com/android/24/000000/user.png" alt="img">
            </a>
        </li>
        <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
        <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
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
    <input id="password_again" name="Passwort Bestatigen" type="password" placeholder="Passwort Bestätigen"
           minlength="8" maxlength="16">
    <br>
    <label for="email"> Email-Adresse </label>
    <input id="email" name="email" type="Email" placeholder="z.B. meineMail@web.de">
    <br>
    <label for="UserMail_again"> Email-Adresse bestätigen </label>
    <input id="UserMail_again" name="Email Bestatigen" type="email" placeholder="z.B. meineMail@web.de">
    <br>
    <button type="submit">Registrierung bestätigen</button>
</form>

</body>
</html>
