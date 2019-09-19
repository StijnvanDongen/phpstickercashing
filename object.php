<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 19-9-2019
 * Time: 12:11
 */
session_start();
require 'config.php';
require 'header.php';

if (isset($_SESSION['email'])){
    $object_id = $_GET['id'];
    $sql = "SELECT * FROM objects WHERE id = :id";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':id' => $object_id
    ]);

    $result = $prepare->fetch(PDO::FETCH_ASSOC);
    $object_name = $result['name'];
    $object_picture = $result['picture'];
    $object_description = $result['discription'];
    $object_adress = $result['adress'];

    echo"
    <h2>$object_name</h2>
    <img src='$object_picture' style='width: 10%'; height='20%'>
    <p>$object_description</p>
    <p>$object_adress</p>
    ";

}else{
    header('Location: index.php');
}