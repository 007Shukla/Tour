<?php
session_start();
if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: admin_login.php");
    exit();
}
include 'db.php'; // make sure db.php is configured with your DB connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="css/style2.css">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f0f2f5;
      margin: 0;
      padding: 0;
    }
    .dashboard-container {
      padding: 50px 20px;
      text-align: center;
    }
    .dashboard-container h1 {
      color: #34495e;
    }
    .admin-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 25px;
      margin-top: 30px;
    }
    .card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      padding: 25px;
      width: 240px;
      transition: 0.3s ease;
    }
    .card:hover {
      transform: translateY(-8px);
    }
    .card i {
      font-size: 40px;
      color: #2980b9;
    }
    .card h3 {
      margin: 15px 0 10px;
      color: #2c3e50;
    }
    .card a {
      color: #3498db;
      text-decoration: none;
      font-weight: bold;
    }
    table {
      width: 90%;
      margin: 40px auto;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: left;
    }
    th {
      background-color: #3498db;
      color: white;
    }
  </style>
</head>
<body>

  <!-- Header Section Start -->
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
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!-- Header Section End -->

  <!-- Main Content -->
  <section class="dashboard-container">
    <h1>Welcome Admin</h1>
    <div class="admin-cards">
      <div class="card">
        <i class="fas fa-users"></i>
        <h3>View Users</h3>
        <a href="view_users.php">Manage Users</a>
      </div>
      <div class="card">
        <i class="fas fa-calendar-check"></i>
        <h3>View Bookings</h3>
        <a href="view_bookings.php">Manage Bookings</a>
      </div>
      <div class="card">
        <i class="fas fa-envelope"></i>
        <h3>Contact Messages</h3>
        <a href="#contacts">View Contacts</a>
      </div>
      <div class="card">
        <i class="fas fa-sign-out-alt"></i>
        <h3>Logout</h3>
        <a href="logout.php">Logout</a>
      </div>
    </div>
  </section>

  <!-- Contact Messages -->
  <section id="contacts">
    <h2 style="text-align:center; color:#34495e;">Contact Form Submissions</h2>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Date</th>
      </tr>
      <?php
      $query = "SELECT * FROM contact_messages ORDER BY submitted_at DESC";
      $result = mysqli_query($conn, $query);
      if ($result && mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['message'] . "</td>
                <td>" . $row['submitted_at'] . "</td>
              </tr>";
          }
      } else {
          echo "<tr><td colspan='5' style='text-align:center;'>No contact messages found.</td></tr>";
      }
      ?>
    </table>
  </section>

  <!-- Footer Section -->
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
