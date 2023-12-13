<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: login.php');
    exit;
}else{
    header("location: ../frontendbasic/hme.php");
}

require_once('db_connection.php');

$shoeManager = new ShoeManager($dbConnection);
$shoes = $shoeManager->getAllShoes();
