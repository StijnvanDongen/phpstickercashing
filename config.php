<?php 
$dbHost = 'localhost';
$dbName = 'sticker_caching';
$dbUser = 'root';
$dbPass = '';

try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo " <h1>OEI</h1> de connectie met de database is niet gelukt check je config.php  ";
    die($e->getMessage());
}