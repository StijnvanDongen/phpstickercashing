<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 19-9-2019
 * Time: 11:21
 */
require 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM objects WHERE id=:id";
$prepare=$db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);

$result = $prepare->fetch(PDO::FETCH_ASSOC);
$picture = $result['picture'];

echo"<img src='$picture' alt='object'>"

?>


