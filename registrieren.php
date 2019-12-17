<?php
print_r("test");
if (isset($_POST['User_id'])) {
// VERARBEITUNG
    $db = new PDO(
        'mysql:host=localhost;dbname=iba',
        'root',
        ''
    );
    if ($db == NULL) {
        print_r("error db");
    }
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $password_again = $_POST['password_again'];
    $email = $_POST['email'];
    $email_again = $_POST['email_again'];

    $statement = $db->eexecute("INSERT INTO user(user_id,email,password) VALUES ('$user_id', '$email', '$password')");

    //  if ($user_id != 0 and $email == $email_again and $password == $password_again) {
    

    //header('Location: einloggen.php');
    //}
} else {
    print_r("test");
}