<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=iba', 'root', '');

if(isset($_GET['login'])) {
    $email1 = $_POST['email'];
    $password1 = $_POST['password'];

    $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $result = $statement->execute(array('email' => $email1));
    $user = $statement->fetch();

    //Überprüfung des Passworts
    if ($user !== false && password_verify($password1, $user['password'])) {
        $_SESSION['user_id'] = $user['user_id'];
        die('Login erfolgreich. Weiter zu <a href="index.php">internen Bereich</a>');
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

<?php
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>

<form action="?login=1" method="post">
    E-Mail:<br>
    <input type="email" size="40" maxlength="250" name="email"><br><br>

    Dein Passwort:<br>
    <input type="password" size="40"  maxlength="250" name="password"><br>

    <input type="submit" value="Abschicken">
</form>

<button onclick="passwortVergessen()">Passwort Zurücksetzen</button>
</body>
</html>
