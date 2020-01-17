<?php
require "php-config.php";

$pdo = new PDO('mysql:host=localhost;dbname=iba', 'root', ''); //Mac = 'root'

echo "1";
    $statement = $pdo->prepare("Delete FROM user WHERE email = :email");
    $result = $statement->execute(array('email' => $_SESSION['email']));
    $user = $statement->fetch();

    $statement = $pdo->prepare("Delete FROM praeferenzen WHERE user_id = :user_id");
    $result = $statement->execute(array('user_id' => $_SESSION['user_id']));
    $user = $statement->fetch();

    header('Location: http://localhost/whattoplay/delete.php'); exit;

echo "account wurde gelöscht";

?>