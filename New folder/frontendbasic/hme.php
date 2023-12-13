<?php
require_once "../config/dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>S KICKS</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>S KICKS</h1>
    </header>
<style>
  body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  background: url('your-background-image.jpg') center/cover no-repeat; /* Replace with your background image */
  color: #333; /* Default text color */
}

.container {
  width: 80%;
  margin: 0 auto;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
  text-align: center;
}

h1 {
  margin: 0;
  font-size: 36px;
}

main {
  padding: 20px;
}

.gallery {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

.shoe-item {
  margin-bottom: 20px;
  text-align: center;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 10px;
  transition: transform 0.3s ease-in-out;
  cursor: pointer;
}

.shoe-item:hover {
  transform: scale(1.05);
}

.shoe-item img {
  width: 100%;
  max-width: 300px;
  height: auto;
  border-radius: 8px;
}

.shoe-item h3 {
  margin-top: 10px;
  color: #333;
}

.shoe-item p {
  margin: 5px 0;
  color: #777;
}

.cart {
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 8px;
  padding: 10px;
  margin-top: 20px;
}

.cart h2 {
  text-align: center;
  color: #333;
}

.cart-items {
  list-style: none;
  padding: 0;
  margin: 10px 0;
}

.cart-items li {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
}

.order-btn {
  display: block;
  margin: 0 auto;
  padding: 10px 20px;
  background-color: #3498db;
  color: #fff;
  text-decoration: none;
  font-size: 16px;
  font-weight: 600;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.order-btn:hover {
  background-color: #2980b9;
}

footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  background-color:#fff ;
  color: #2980b9;
  text-align: center;
  padding: 5px;
}

</style>
    <main>
      <section class="gallery">
        <!-- Shoe items -->
        <div class="shoe-item" data-name="Nike Air Max" data-price="120">
          <img src="../IMG/R.jpeg" alt="Nike Air Max">
          <h3>Nike Air Max</h3>
          <p>$120</p>
        </div>
        <div class="shoe-item" data-name="Adidas Ultraboost" data-price="150">
          <img src="../IMG/R (1).jpeg" alt="Adidas Ultraboost">
          <h3>Adidas Ultraboost</h3>
          <p>$150</p>
        </div>
        <!-- Add more shoe items as needed -->

        <!-- Cart section -->
        <div class="cart">
          <h2>Your Cart</h2>
          <ul class="cart-items">
            <!-- Cart items will be dynamically added here -->
          </ul>
          <button class="order-btn">Place Order</button>
        </div>
      </section>
    </main>

    <footer>
      <p>&copy; 2023 stephenNganga</p>
    </footer>
  </div>
  <script src="script.js"></script>
</body>
</html>
