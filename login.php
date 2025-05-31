<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Font Awesome & Site CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/style2.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        .form-section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
        }

        .form-box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #007bb5;
        }

        .link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .link a {
            color: #008CBA;
            text-decoration: none;
        }

        .message {
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
        }

        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>

<!-- Navbar -->
 <section class="header">
    <a href="home.php" class="logo">Travel.</a>
    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
      <a href="signup.php">Signup/Login</a>
      <a href="admin.php">Admin</a>
      <a href="contact.php">Contact Us</a>

      
      <!-- ✅ Added link -->
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>

<!-- Login Form Section -->
<div class="form-section">
    <div class="form-box">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit">Login</button>
        </form>
        <div class="link">
            Don’t have an account? <a href="signup.php">Signup here</a><br>
            <a href="home.php">Back to Home</a>
        </div>
    </div>
</div>

<!-- Footer -->
<section class="footer">
    <div class="box-container">
        <div class="box1">
            <h3>Quick Links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
        </div>
        <div class="box1">
            <h3>Extra Links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
        </div>
        <div class="box1">
            <h3>Contact Info</h3>
            <a href="#"><i class="fas fa-phone"></i> +91 9696453969</a>
            <a href="#"><i class="fas fa-envelope"></i> abhishekshukla12357@gmail.com</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> Kalyanpur, Lucknow, India</a>
        </div>
        <div class="box1">
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com/abhishek.shukla.663061"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="https://www.instagram.com/code_with_masti_07/"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="https://www.linkedin.com/in/abhishek-shukla-a9115b2a6/"><i class="fab fa-linkedin"></i> LinkedIn</a>
            <a href="https://www.youtube.com/@abhi_tech007"><i class="fab fa-youtube"></i> YouTube</a>
        </div>
    </div>
    <div class="credit">
        Created by <span><a href="#">Mr. Abhishek Shukla</a></span> | All rights reserved
    </div>
</section>

<script src="js/script.js"></script>
</body>
</html>
