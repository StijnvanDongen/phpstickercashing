<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 17-9-2019
 * Time: 13:43
 */

session_start();
require 'config.php';

if (isset($_SESSION['admin'])){
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=:id";
$prepare=$db->prepare($sql);
$prepare->execute([
    'id' => $id
]);

$result = $prepare->fetch(PDO::FETCH_ASSOC);
var_dump($result);



}else{
    header('Location: index.php');
}