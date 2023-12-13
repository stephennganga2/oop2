<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: login.php');
    exit;
}

require_once('db_connection.php');

$shoeName = $_POST['shoe_name'];
$shoeBrand = $_POST['shoe_brand'];
$shoePrice = $_POST['shoe_price'];
$shoeImage = $_POST['shoe_image'];

$admin = new Admin($dbConnection);
$admin->addShoe($shoeName, $shoeBrand, $shoePrice, $shoeImage);

header('Location: admin.php');
