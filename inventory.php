<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 19-9-2019
 * Time: 11:53
 */

session_start();
require 'config.php';

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
        <ol>
            <li>$object_name</li>
        </ol>
        ";

    }

}else{
    header('Location: index.php');
}