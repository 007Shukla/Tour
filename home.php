<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style2.css" />
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

      
      <!-- ✅ Added link -->
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!-- Header Section End -->

  <!-- Home Section Start -->
  <section class="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide" style="background:url(image/banner.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>Travel around the world</h3>
            <a href="package.php" class="btn">Discover more</a>
          </div>
        </div>
        <div class="swiper-slide slide" style="background:url(image/banner-02.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>Discover the new places</h3>
            <a href="package.php" class="btn">Discover more</a>
          </div>
        </div>
        <div class="swiper-slide slide" style="background:url(image/banner-03.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>Make your tour worthwhile</h3>
            <a href="package.php" class="btn">Discover more</a>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>
  <!-- Home Section End -->

  <!-- Services Section Start -->
  <section class="services">
    <h1 class="heading-title">Our Services</h1>
    <div class="box-container">
      <div class="box"><img src="image/advantures.png" alt=""><h3>Adventure</h3></div>
      <div class="box"><img src="image/guid.png" alt=""><h3>Tour Guide</h3></div>
      <div class="box"><img src="image/trekking.png" alt=""><h3>Trekking</h3></div>
      <div class="box"><img src="image/camp-faire.png" alt=""><h3>Camp Fire</h3></div>
      <div class="box"><img src="image/offroad.png" alt=""><h3>Off Road</h3></div>
      <div class="box"><img src="image/Camping.png" alt=""><h3>Camping</h3></div>
    </div>
  </section>
  <!-- Services Section End -->

  <!-- Home About Section Start -->
  <section class="home-about">
    <div class="image"><img src="image/about-img.jpg" alt="image"></div>
    <div class="content">
      <h3>About us</h3>
      <p>We are dedicated to providing exceptional services with a focus on quality, reliability, and customer satisfaction...</p>
      <a href="about.php" class="btn">Read more</a>
    </div>
  </section>
  <!-- Home About Section End -->

  <!-- Packages Preview Section -->
  <section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>
    <div class="box-container">
      <div class="box2">
        <div class="image"><img src="image/img-02.jpg" alt=""></div>
        <div class="content">
          <h3>Red Fort – Delhi</h3>
          <p>Explore the historic Red Fort, a magnificent Mughal fortress representing India’s rich cultural heritage.</p>
          <a href="book.php" class="btn">Book Now</a>
        </div>
      </div>
      <div class="box2">
        <div class="image"><img src="image/img-03.jpg" alt=""></div>
        <div class="content">
          <h3>Manali</h3>
          <p>Escape into the lush valleys of Manali, perfect for adventure seekers and nature lovers alike.</p>
          <a href="book.php" class="btn">Book Now</a>
        </div>
      </div>
      <div class="box2">
        <div class="image"><img src="image/img-06.jpg" alt=""></div>
        <div class="content">
          <h3>Udaipur City Palace</h3>
          <p>Royal charm of Udaipur’s City Palace, nestled beside Lake Pichola.</p>
          <a href="book.php" class="btn">Book Now</a>
        </div>
      </div>
    </div>
    <div class="load-more"><a href="package.php" class="btn">Load more</a></div>
  </section>

  <!-- Offer Section -->
  <section class="home-offer">
    <div class="content">
      <h3>Upto 50% Off</h3>
      <p>Special discounts on early bookings.</p>
      <a href="book.php" class="btn">Book Now</a>
    </div>
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

  <!-- JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
