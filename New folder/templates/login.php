<?php
session_start();

require_once('../connect/connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$admin = new Admin();
$loggedIn = $admin->login($username, $password);

if ($loggedIn) {
    $_SESSION['admin_logged_in'] = true;
    header('Location: admin.php');
} else {
    echo 'Invalid login credentials';
}
