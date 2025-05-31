<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/style2.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      margin: 0;
      padding: 0;
    }
    .contact-container {
      width: 100%;
      max-width: 500px;
      margin: 50px auto;
      padding: 30px;
      background: white;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .contact-container h2 {
      margin-bottom: 20px;
      text-align: center;
      color: #333;
    }
    .contact-container input, .contact-container textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .contact-container button {
      width: 100%;
      background: #3498db;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .contact-container button:hover {
      background: #2980b9;
    }
    .message {
      text-align: center;
      color: green;
    }
  </style>
</head>
<body>

<!-- Header -->
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

<div class="contact-container">
  <h2>Contact Us</h2>
  <?php if (isset($_GET['success'])) echo "<p class='message'>Message sent successfully!</p>"; ?>
  <form action="contact_process.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message</button>
  </form>
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
      <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
      <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
      <a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a>
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
  <div class="credit">Created by <span><a href="https://majestic-ganache-94f9a1.netlify.app/">Mr. Abhishek Shukla</a></span> | All rights reserved</div>
</section>

</body>
</html>
