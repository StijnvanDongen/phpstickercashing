<?php
if ($_SERVER['REQUEST_METHOD'] =! 'POST'){
    header('Location: index.php');
    exit();
}

require 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

if ($password =! $repeat_password){
    header('Location: Signup.php');
}

$query = "SELECT * FROM users WHERE email=:email";
$prepare = $db->prepare($query);
$prepare->execute([
    ':email' => $email
]);

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

if ($result){
    header('Location: Signup.php');
    exit();
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':email' =>$email,
    ':password' =>$hashed_password
]);

header('Location: index.php');