<?php


$dbHost = "localhost";
$dbName = "shoestorage";
$dbUsername = "your_database_username";
$dbPassword = "your_database_password";

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$productName = "Product Name";
$productDescription = "Product Description";
$productPrice = 19.99;
$productImage = "../IMG/R.jpeg";

$sql = "INSERT INTO products (product_name, product_description, product_price, product_image) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $productName, $productDescription, $productPrice, $productImage);
$stmt->execute();

if ($stmt->execute()) {
    echo "New product created successfully";
} else {
    echo "Error creating product: " . $conn->error;
}

$stmt->close();


$conn->close();

?>
