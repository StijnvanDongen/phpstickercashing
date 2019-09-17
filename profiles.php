<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 12-9-2019
 * Time: 11:39
 */

session_start();
require 'header.php';
if ($_SESSION['admin'] == 'admin') {
    require 'config.php';
    $sql = "SELECT * FROM users";
    $query = $db->query($sql);
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
        $id = $user['id'];
        $email = $user['email'];
        $admin = $user['admin'];
        $winkelier = $user['winkelier'];

        if ($admin == 0) {
            $admin = "is geen admin";
        } else {
            $admin = "is admin";
        }

        if ($winkelier == 0) {
            $winkelier = "is geen winkelier";
        } else {
            $winkelier = "is winkelier";
        }
        echo "
        <ul>
           <a href='' id='profiles'><list style='font-weight: bold;'>$email $admin en $winkelier</li></a>   
        </ul>
    ";
    }
}else{
    header('Location: index.php');
}