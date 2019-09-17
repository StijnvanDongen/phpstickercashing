<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 12-9-2019
 * Time: 11:39
 */

session_start();
require 'header.php';
if (isset($_SESSION['admin'])) {
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
           <a href='edit_profile.php?id=$id' id='profiles'><list style='font-weight: bold;'>$email $admin en $winkelier $id</li></a>   
        </ul>
    ";
    }
}else{
    header('Location: index.php');
}