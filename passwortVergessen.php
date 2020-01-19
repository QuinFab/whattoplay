<?php
"php-config.php";
if (isset($_POST['email'])) {
// VERARBEITUNG
    $pdo = new PDO(
        'mysql:host=localhost;dbname=iba',
        'root',
        '' //root pwd root für mac
    );

    $email1 = $_POST['email'];
    $statement2 = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $result = $statement2->execute(array('email' => $email1));
    $emaill = $statement2->fetch();


    $statement = $pdo->prepare("Delete FROM user WHERE email = :email");
    $result = $statement->execute(array('email' => $_POST['email']));
    $user = $statement->fetch();


    $query = "INSERT INTO user (user_id, email, password, erstelltam) VALUES (:user_id, :email, :password, :erstelltam)";

    $preparedStmt = $pdo->prepare($query);
    if ($_POST['password'] != $_POST['password_again']) {
        $error2 = ('<script> alert("Passwörter stimmen nicht überein!");</script>');

    } else {
        if ($_POST['email'] != $_POST['UserMail_again']) {
            $error1 = ('<script> alert("Emails stimmen nicht überein!");</script>');
        } else {
            $preparedStmt->bindValue(':user_id', $emaill['user_id']);
            $preparedStmt->bindValue(':email', $_POST['email']);
            $preparedStmt->bindValue(':password', password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]));
            $preparedStmt->bindValue(':erstelltam', date('Y-m-d H:i:s'));
            $res = $preparedStmt->execute();

            $reseted = ('<script>alert("reseted");</script>');
            echo $reseted;
            header("Location: einloggen.php");
        }
    }
}
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

<form method="post" action="passwortVergessen.php">
    <div id="formUserdaten">
        <label class="UserInfoBeschreibung" for="password">Passwort </label>
        <input class="UserInfo" id="password" name="password" type="password" placeholder="Passwort" minlength="1"
               maxlength="16" ^(?=[^\d_].*?\d)\w(\w|[!@#$%]){8,16}>
        <!-- hoover
      Gesamtlänge zwischen 6 und 12 Zeichen
alphanumerische und ausgewählte Sonderzeichen sind erlaubt
erstes Zeichen darf weder Ziffer, noch Unterstrich noch Sonderzeichen sein
muss mindestens eine Ziffer enthalten
!-->
        <br><br>
        <label class="UserInfoBeschreibung" for="password_again">Passwort Bestätigen </label>
        <input class="UserInfo" id="password_again" name="password_again" type="password"
               placeholder="Passwort Bestätigen"
               minlength="1" maxlength="16" required ^(?=[^\d_].*?\d)\w(\w|[!@#$%]){8,16}>
        <!-- hoover
      Gesamtlänge zwischen 6 und 12 Zeichen
alphanumerische und ausgewählte Sonderzeichen sind erlaubt
erstes Zeichen darf weder Ziffer, noch Unterstrich noch Sonderzeichen sein
muss mindestens eine Ziffer enthalten
!-->
        <br><br>
        <label class="UserInfoBeschreibung" for="email"> Email-Adresse </label>
        <input class="UserInfo" id="email" name="email" type="Email" placeholder="z.B. meineMail@web.de" required pattern="^[-_.\w]+@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.){1,300}[a-zA-Z]{2,9})$">
        <br><br>
        <label class="UserInfoBeschreibung" for="UserMail_again"> Email-Adresse bestätigen </label>
        <input class="UserInfo" id="UserMail_again" name="UserMail_again" type="email"
               placeholder="z.B. meineMail@web.de" required pattern="^[-_.\w]+@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.){1,300}[a-zA-Z]{2,9})$">
        <br>
    </div>
    <div id="RegistrierenButtondiv">
        <button id="registrierenButton" type="submit"> Registrierung bestätigen</button>
    </div>
</form>
</body>
</html>
