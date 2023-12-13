<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>

  <link rel="stylesheet" href="style.css">
</head>
<style>
  body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  width: 600px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

.admin-options {
  list-style: none;
  padding: 0;
  margin: 0;
}

.admin-options li {
  margin-bottom: 10px;
}

.admin-options a {
  display: block;
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  text-decoration: none;
}

.admin-options a:hover {
  background-color: #0069d9;
}

</style>
<body>
  <div class="container">
    <h1>Admin Panel</h1>

    <div class="admin-options">
      <ul>
        <li><a href="add-shoe.php">Add Shoe</a></li>
        <li><a href="manage-shoes.php">Manage Shoes</a></li>
      </ul>
    </div>
  </div>
