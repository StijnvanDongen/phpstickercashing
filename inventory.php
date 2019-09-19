<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 19-9-2019
 * Time: 11:53
 */

session_start();
require 'config.php';
require 'header.php';

if (isset($_SESSION['email'])){

    $email = $_SESSION['email'];

    $sql = "SELECT * FROM verzamelobjecten WHERE email=:email";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':email' => $email
    ]);

    $objects = $prepare->fetchAll(PDO::FETCH_ASSOC);


    foreach ($objects as $object){
        $object_id = $object['object_id'];

        $sql = "SELECT * FROM objects WHERE id=:object_id";
        $prepare = $db->prepare($sql);
        $prepare->execute([
            ':object_id' => $object_id
        ]);

        $result_object = $prepare->fetch(PDO::FETCH_ASSOC);
        $object_name = $result_object['name'];
        echo"
        <ul>
            <a href='object.php?id=$object_id' style='font-weight: bold; background-color: black; padding: 20px; width: 400px; opacity: 0.7'><li style='color: white; text-align: center'>$object_name</li></a>
        </ul>
        ";

    }

}else{
    header('Location: index.php');
}