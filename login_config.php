<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 2-9-2019
 * Time: 11:09
 */

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    exit();
}

session_start();

require 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE email=:email";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':email' => $email
]);

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

if ($result){
    $hashed_password = $result[0]['password'];
    if (password_verify($password, $hashed_password)){
        $_SESSION['email'] = $email;
        header('Location: index.php');
        echo 'Login suc6';
        exit();
    }
}

header('Location: login.php');