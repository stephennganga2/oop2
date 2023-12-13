<?php
include("../classes/usersignup.php");

$user = new usersignup;
if (isset($_POST['submit'])) {
    $name= $_POST['name'];
    $email= $_POST['email'];
    $location= $_POST['location'];
    $phone= $_POST['phone'];
    $pwd= $_POST['password'];

    $result = $user->createUser($name,$email,$location,$phone,$pwd);
    if ($result) {
        echo "<h2>registration Successfull, you can now login</h2>";
    }
    else{
        echo "<h2>Something went wrong!</h2>";

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #007BFF;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signin-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
        }

        .signin-container h2 {
            margin-bottom: 20px;
        }

        .signin-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .signin-container button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .signin-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="signin-container">
        <h2>Sign In</h2>
        <form action="" method="post">

        <input type="name" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="location" placeholder="Location" required><br>
        <input type="tel" name="phone" placeholder="Phone Number" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>

        <button type="submit">Sign In</button>
        </form>
    </div>
</body>
</html>
