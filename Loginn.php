<?php
// Start session
session_start();
if (isset($_SESSION['user_id'])) {
    // Redirect to dashboard if the user is already logged in
    header('Location: dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="login.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }
    .container {
      margin-top: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
    .btn {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #0056b3;
    }
    .error-message {
      color: #721c24;
      background-color: #f8d7da;
      border: 1px solid #f5c6cb;
      border-radius: 5px;
      padding: 10px;
      font-size: 14px;
      margin-bottom: 10px;
    }
    .text-center {
      text-align: center;
      margin-top: 15px;
    }
    .text-center a {
      text-decoration: none;
      color: #007bff;
    }
    .text-center a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <h2 class="text-center">Welcome Back</h2>
      <p class="text-center">Enter your credentials to continue.</p>

      <!-- Display Error Message -->
      <?php
      if (isset($_SESSION['error'])) {
          echo '<div class="error-message">' . htmlspecialchars($_SESSION['error']) . '</div>';
          unset($_SESSION['error']); // Clear the error after displaying
      }
      ?>

      <!-- Login Form -->
      <form action="login.php" method="POST">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter your password" required autocomplete="off">
        </div>
        <button type="submit" class="btn">Sign In</button>
      </form>

      <div class="text-center">
        <a href="forgot-password.html">Forgot password?</a>
      </div>
      <p class="text-center">
        Don't have an account? <a href="Signup.html">Sign up</a>
      </p>
    </div>
  </div>
</body>
</html>
