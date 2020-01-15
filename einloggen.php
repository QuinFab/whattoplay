<?php
require "php-config.php";

$pdo = new PDO('mysql:host=localhost;dbname=iba', 'root', ''); //Mac = 'root'

if (isset($_GET['login'])) {
    $email1 = $_POST['email'];
    $password1 = $_POST['password'];

    $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $result = $statement->execute(array('email' => $email1));
    $user = $statement->fetch();

//Überprüfung des Passworts
    if ($user !== false && password_verify($password1, $user['password'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['timestamp'] = new DateTime();
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];

        header("Location: http://localhost/whattoplay/userPage.php");
        $userid = $_SESSION['user_id'];

    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Einloggen</title>

    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <script src="js/custom.js"></script>
</head>
<body>

<div>
    <ul id="Navbar">
        <li><a href="index.php" class="navbar">WhatToPlay?</a></li>
        <!--<li id="account"><a href="userPage.php" class="navbar"><img src="https://img.icons8.com/android/24/000000/user.png"></a></li>-->
        <li id="registrieren"><a href="registrieren.php" class="navbar">Registrieren</a></li>
        <li id="einloggen"><a href="einloggen.php" class="navbar">Einloggen</a></li>
    </ul>
</div>
<?php
if (isset($errorMessage)) {
    echo $errorMessage;
}
?>

<form action="?login=1" method="post">
    E-Mail:<br>
    <input type="email" size="40" maxlength="250" name="email"><br><br>

    Dein Passwort:<br>
    <input type="password" size="40" maxlength="250" name="password"><br>

    <input type="submit" value="Abschicken">
</form>

<button onclick="passwortVergessen()">Passwort Zurücksetzen</button>
</body>
</html>
