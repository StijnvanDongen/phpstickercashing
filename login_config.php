<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    exit();
}

session_start();

require 'config.php';

$email = ($_POST['email']);
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email=:email";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':email' => $email
]);

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);
echo"<pre>";
var_dump($result);
if ($result){
    $hashed_password = $result[0]['password'];
    // $hashed_password = password_hash($password);

    // var_dump($hashed_password);
    // var_dump($_POST['password']);
    // var_dump(password_hash($_POST['password'], PASSWORD_DEFAULT));
    var_dump($result);
    echo 'Hash in db: '. $hashed_password . '<br />';
    echo 'Hashed ingevoerde ww: '. password_hash($_POST['password'], PASSWORD_DEFAULT). '<br />';
    echo 'result pw_verify: <br />';
    var_dump(password_verify($password, $hashed_password));

    if (password_verify($password, $hashed_password)) {
        $_SESSION['email'] = $email;
        echo 'ingelogd!!!';
        if ($result[0]['admin'] == 1){
            $_SESSION['admin'] = 'admin';
            header('Location: index.php');
        }else{
            header('Location: index.php');
        }
        exit();
    }
}


