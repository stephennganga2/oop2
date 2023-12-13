<?php
session_start();
require_once('db_connection.php');

$shoeId = $_GET['shoe_id'];

$shoeManager = new ShoeManager($dbConnection);
$shoe = $shoeManager->getShoeById($shoeId);
