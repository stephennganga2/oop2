<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: login.php');
    exit;
}

require_once('db_connection.php');

$shoeId = $_GET['shoe_id'];

$admin = new Admin($dbConnection);
$admin->deleteShoe($shoeId);

header('Location: admin.php');
