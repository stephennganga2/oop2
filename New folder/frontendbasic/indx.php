<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="style.css">
</head>
<style>
  /* Reset default styles and apply a subtle background color */
body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
}

/* Center the container, add padding, border, and box shadow */
.container {
  width: 400px;
  margin: 80px auto;
  padding: 20px;
  border: 1px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  background-color: #fff;
}

/* Style for main heading */
h1 {
  text-align: center;
  margin-bottom: 20px;
  font-size: 28px;
  font-weight: 700;
  color: #333;
}

/* Style for form and form groups */
.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #333;
}

input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

/* Style for the login button */
.btn-primary {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: white;
  text-decoration: none;
  font-size: 16px;
  font-weight: 500;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.btn-primary:hover {
  background-color: #0056b3;
}

/* Style for the signup link section */
.signup-link {
  text-align: center;
  margin-top: 20px;
}

/* Style for the signup link */
.signup-link a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #009688;
  color: white;
  text-decoration: none;
  font-size: 16px;
  font-weight: 500;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.signup-link a:hover {
  background-color: #007e67;
}

</style>
<body>
  <div class="container">
    <h1>Login</h1>

    <form action="login_process.php" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      
    </form>
  </div>
 
  

  

  <div class="signup-link">
    <a href="sighn.php">Don't have an account? Sign Up</a>
  </div>
</div>

  <script src="script.js"></script>
</body>
</html>
