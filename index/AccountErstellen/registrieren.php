<?php
if (isset($_POST['user_id'])) {
// VERARBEITUNG
    $db = new PDO(
        'mysql:host=localhost;dbname=iba',
        'root',
        ''
    );

            $query = 'INSERT INTO user (user_id, email, password) VALUES (:user_id, :email, :Password)';
            $preparedStmt = $db->prepare($query);
                $preparedStmt->bindValue(':Password', password_hash($_POST['Password'], PASSWORD_BCRYPT, ['cost' => 12]));
                $preparedStmt->bindValue(':Password2', password_hash($_POST['Password2'], PASSWORD_BCRYPT, ['cost' => 12]));
            $preparedStmt->bindValue(':user_id', $_POST['Username']);
            $preparedStmt->bindValue(':email', $_POST['email']);
            $res = $preparedStmt->execute();
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Registrieren</title>

    <link rel="stylesheet" type="text/css" href="../../css/custom.css"/>
    <script src="../../js/custom.js"></script>
</head>
<body>

<h1>Registrieren</h1>
<p> Jetzt die relevanten Information eintippen und direkt loslegen!</p>

<form method="post">
        <label for="user_id">Benutzername </label>
        <input id="Username" name="Username" type="text" placeholder="z.B. MaxMaster3314" required maxlength="16" minlength="8">
        <br>
        <label for="Password">Passwort </label>
        <input id="Password" name="Passwort" type="password" placeholder="Passwort" required maxlength="16" minlength="8">
         <br>
        <label for="Password2"> Passwort Bestätigen </label>
        <input id="Password2" name="Passwort" type="password" placeholder="Passwort" required maxlength="16" minlength="8">
        <br>
        <label for="email">Email-Adresse </label>
        <input id="email" name="UserMail" type="email" placeholder="z.B. meineMail@web.de" required maxlength="32" minlength="6">
         <br>
        <label>Email-Adresse bestätigen </label>
        <input type="email" placeholder="z.B. meineMail@web.de"  maxlength="32" minlength="6">

    <button id="registrieren"  type="submit" >Registrierung bestätigen</button>

</form>
</body>
</html>
