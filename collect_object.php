<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 19-9-2019
 * Time: 11:37
 */

require 'config.php';

$email = $_GET['email'];
$id = $_GET['id'];

$sql = "INSERT INTO verzamelobjecten (email, object_id) VALUES (:email, :object_id)";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':email' => $email,
    ':object_id' => $id
]);

header('Location: api.php');

