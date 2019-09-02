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

header('Location: index.php')

//if ($_POST['type'] == 'register') {
//
//    $email = trim($_POST['email']);
//    $password1 = trim($_POST['password']);
//    $password2 = trim($_POST['repeat_password']);
//
//    $uppercase = preg_match('@[A-Z]@', $password1);
//    $lowercase = preg_match('@[a-z]@', $password1);
//    $number = preg_match('@[0-9]@', $password1);
//
//    $user_check_query = $db->prepare("SELECT * FROM users WHERE email=?");
//    $user_check_query->execute([$email]);
//    $account = $user_check_query->fetch();
//
//    if ($account) {
//
//        ?>
<!--        <script type="text/javascript">-->
<!--            alert("this email is already in use");-->
<!--            window.location.href = "Signup.php";-->
<!--        </script>-->
<!--        --><?php
//
//    } else {
//        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//
//            echo("$email is not a valid email address");
//
//        } else {
//            if ($password1 === $password2) {
//
//                if (!$uppercase || !$lowercase || !$number || strlen($password1) < 8) {
//                    ?>
<!---->
<!--                    <script type="text/javascript">-->
<!--                        alert("uw wachtwoord moet aan de voorwaarden voldoen");-->
<!--                        window.location.href = "Signup.php";-->
<!--                    </script>-->
<!---->
<!--                    --><?php
//                    exit;
//                }
//                $passwordHash = password_hash($password1, PASSWORD_DEFAULT);
//
//                $sql = "INSERT INTO users (email, password)
//                        VALUES (:email, :passwordHash)";
//                $prepare = $db->prepare($sql);
//                $prepare->execute([
//                    ':email' => $email,
//                    ':passwordHash' => $passwordHash
//                ]);
//
//                ?>
<!--                <script type="text/javascript">-->
<!--                    alert("You have succesfully been registered");-->
<!--                    window.location.href = "login.php";-->
<!--                </script>-->
<!--                --><?php
//            } else {
//                ?>
<!--                <script type="text/javascript">-->
<!--                    alert("The passwords do not match");-->
<!--                    window.location.href = "Signup.php";-->
<!--                </script>-->
<!--                --><?php
//            }
//        }
//    }
//}