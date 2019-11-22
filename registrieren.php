
<?php

if (isset($_POST['Username'])) {
// VERARBEITUNG
$db = new PDO(
        'mysql:host=localhost;dbname=iba',
        'root',
        ''
);
$query = 'INSERT INTO user (user_id, email, password) VALUES (:user_id, :email, :password)';
$preparedStmt = $db->prepare($query);
$preparedStmt->bindValue(':user_id', $_POST['Username']);
$preparedStmt->bindValue(':email', $_POST['UserMail']);
$preparedStmt->bindValue(':password', password_hash($_POST['Passwort'], PASSWORD_BCRYPT, ['cost' => 11]));
        $res = $preparedStmt->execute();
    header('Location: einloggen.php');
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

<h1>Registrieren</h1>
<p> Jetzt die relevanten Information eintippen und direkt loslegen!</p>

<form method="post">
        <label for="Username">Benutzername </label>
        <input id="Username" name="Username" type="text" placeholder="z.B. MaxMaster3314" minlength="3" maxlength="16" required>
        <br>
        <label for="Passwort">Passwort </label>
        <input id="Passwort" name="Passwort" type="password" placeholder="Passwort" minlength="8" maxlength="16" required>
         <br>
        <label>Passwort Bestätigen </label>
        <input id="Passwort" name="Passwort" type="password" placeholder="Passwort" minlength="8" maxlength="16" required>
        <br>
        <label for="UserMail">Email-Adresse </label>
        <input id="UserMail" name="UserMail" type="email" placeholder="z.B. meineMail@web.de" required>
         <br>
        <label>Email-Adresse bestätigen </label>
        <input type="email" placeholder="z.B. meineMail@web.de" required>

    <button id="registrieren" type="submit" onclick= InsertSignIn() >Registrierung bestätigen</button>
</form>
</body>
</html>