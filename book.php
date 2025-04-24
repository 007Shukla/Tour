<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

<!-- Swiper-CSS-LINK -->
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- Font-Awesome-Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<!-- Coustom-CSS-Link -->
 <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <!--Header-Section-Start  -->
    <section class="header">
        <a href="home.php" class="logo">Traval.</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!--Header-Section-End  -->



<div class="heading-A" style="background:url(image/banner.jpg) no-repeat">
    <h1>Book now</h1>

</div>


<!-- Booking Section Starts -->

<section class="booking">
  <h1 class="heading-title">
    Book Your trip!
  </h1>
  <form action="book_form.php" method="post" class="book_form">
  <div class="flex">
    <div class="inputBox">
      <span>Name :</span>
      <input type="text" placeholder="enter your name" name="name">
    </div>

    <div class="inputBox">
      <span>Email :</span>
      <input type="email" placeholder="enter your email" name="email">
    </div>
    <div class="inputBox">
      <span>Number :</span>
      <input type="number" placeholder="enter your number" name="number" id="">
    </div>

    <div class="inputBox">
      <span>Address :</span>
      <input type="text" placeholder="enter your address" name="address" id="">
    </div>

    <div class="inputBox">
      <span>Where to :</span>
      <input type="text" placeholder="place you want to visit" name="location" id="">
    </div>

    <div class="inputBox">
      <span>How many :</span>
      <input type="number" placeholder="number of guests" name="guests" id="">
    </div>

    <div class="inputBox">
      <span>Arrivals :</span>
      <input type="date" name="arrivals" id="">
    </div>

    <div class="inputBox">
      <span>Leaving :</span>
      <input type="date" name="leaving" id="">
    </div>
  </div>
<input type="submit" value="submit" class="btn" name="send">
  </form>
</section>



<!-- Booking Section Ends -->











<!-- Footer section start -->
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
<!-- Footer section End-->


    <!-- Swiper-JS-Link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Coustom-JAVASCRIPT-Link -->
    <Script src="js/script.js"></Script>
</body>
</html>