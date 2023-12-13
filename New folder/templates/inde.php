<?php
session_start();
require_once('db_connection.php');

$shoeManager = new ShoeManager($dbConnection);
$shoes = $shoeManager->getAllShoes();

