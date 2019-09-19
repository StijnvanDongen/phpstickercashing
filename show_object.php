<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 19-9-2019
 * Time: 11:21
 */

session_start();

if (isset($_SESSION['email'])) {

    require 'config.php';

    $id = $_GET['id'];
    $email = $_SESSION['email'];

    $sql = "SELECT * FROM objects WHERE id=:id";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':id' => $id
    ]);

    $result = $prepare->fetch(PDO::FETCH_ASSOC);
    $picture = $result['picture'];

    echo "<img src='$picture' alt='object' style='width: 20%; height: 40%; margin-bottom: 100px'>";

    echo "<a href='collect_object.php?id=$id&email=$email'>Verzamel</a>";
}else{
    header('Location: index.php');
}
?>


