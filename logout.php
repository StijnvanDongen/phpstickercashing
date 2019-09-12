<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 12-9-2019
 * Time: 11:10
 */

session_start();
unset($_SESSION['email']);
session_destroy();

header('Location: index.php');