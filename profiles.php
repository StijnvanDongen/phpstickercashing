<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 12-9-2019
 * Time: 11:39
 */
require 'config.php';
$sql = "SELECT * FROM users";
$query = $db->query($sql);
$users = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user){
    $email = $user['email'];
    $admin = $user['admin'];
    $winkelier = $user['winkelier'];

    if ($admin == 0){
        $admin = "is geen admin";
    }else{
        $admin = "is admin";
    }

    if ($winkelier == 0){
        $winkelier = "is geen winkelier";
    }else{
        $winkelier = "is winkelier";
    }
    echo"
        <ul>
            <li>$email $admin en $winkelier</li>
        
        </ul>
    ";
}