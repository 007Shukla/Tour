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
    <!--Header-Section-End  -->


<div class="heading-A" style="background:url(image/banner.jpg) no-repeat">
    <h1>Packages</h1>

</div>

<!-- Package section starts -->

<div class="search-bar">
  <input type="text" id="searchInput" placeholder="Search your destination..." onkeyup="filterPackages()">
</div>

<section class="packages">
  <h1 class="heading-title">
    top destinations
  </h1>
  <div class="box-container">
  <div class="box3">
    <div class="image">
      <img src="image/img-01.jpeg" alt="">
    </div>
    <div class="content">
      <h3>Taj Mahal - Agra</h3>
      <p>Discover the timeless beauty of the Taj Mahal, a symbol of eternal love and one of the Seven Wonders of the World.</p>
      <p><strong>Price:</strong> ₹3,999 <span style="color: green;">(10% OFF)</span></p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </div>

  <div class="box3">
    <div class="image">
      <img src="image/img-02.jpg" alt="">
    </div>
    <div class="content">
      <h3>Red Fort – Delhi</h3>
      <p>Explore the historic Red Fort, a magnificent Mughal fortress representing India’s rich cultural heritage.</p>
      <p><strong>Price:</strong> ₹2,499 <span style="color: green;">(15% OFF)</span></p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </div>

  <div class="box3">
    <div class="image">
      <img src="image/img-03.jpg" alt="">
    </div>
    <div class="content">
      <h3>Manali (Himachal Pradesh)</h3>
      <p>Escape into the lush valleys of Manali, perfect for adventure seekers and nature lovers alike.</p>
      <p><strong>Price:</strong> ₹6,299 <span style="color: green;">(20% OFF)</span></p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </div>

  <div class="box3">
    <div class="image">
      <img src="image/img-04.jpeg" alt="">
    </div>
    <div class="content">
      <h3>Kashmir</h3>
      <p>Discover the serene valleys, snow-capped mountains, and breathtaking lakes of Kashmir. A perfect destination for peace lovers, honeymooners, and nature enthusiasts.</p>
      <p><strong>Price:</strong> ₹7,499 <span style="color: green;">(25% OFF)</span></p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </div>

  <div class="box3">
    <div class="image">
      <img src="image/img-05.jpeg" alt="">
    </div>
    <div class="content">
      <h3>Hawa Mahal (Jaipur, Rajasthan)</h3>
      <p>Explore the iconic Palace of Winds, built in 1799 with its stunning honeycomb façade and rich cultural history at the heart of Jaipur.</p>
      <p><strong>Price:</strong> ₹1,999 <span style="color: green;">(12% OFF)</span></p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </div>

  <div class="box3">
    <div class="image">
      <img src="image/img-06.jpg" alt="">
    </div>
    <div class="content">
      <h3>Udaipur City Palace (Rajasthan)</h3>
      <p>Dive into the royal charm of Udaipur’s City Palace, a majestic blend of Rajasthani and Mughal architecture nestled beside Lake Pichola.</p>
      <p><strong>Price:</strong> ₹3,799 <span style="color: green;">(18% OFF)</span></p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </div>

  <div class="box3">
    <div class="image">
      <img src="image/img-07.jpg" alt="">
    </div>
    <div class="content">
      <h3>Dhai Din Ka Jhopda</h3>
      <p>Located in Ajmer, this historical mosque was built in just two and a half days. It’s a unique fusion of Hindu and Islamic architecture.</p>
      <p><strong>Price:</strong> ₹1,299 <span style="color: green;">(5% OFF)</span></p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </div>

  <div class="box3">
    <div class="image">
      <img src="image/img-08.jpeg" alt="">
    </div>
    <div class="content">
      <h3>Darjeeling (West Bengal)</h3>
      <p>Ride the iconic toy train and witness panoramic views of the Himalayas. Darjeeling is known for tea gardens and Kanchenjunga views.</p>
      <p><strong>Price:</strong> ₹4,999 <span style="color: green;">(22% OFF)</span></p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </div>

  <div class="box3">
    <div class="image">
      <img src="image/img-09.jpeg" alt="">
    </div>
    <div class="content">
      <h3>Rishikesh (Uttarakhand)</h3>
      <p>Explore the adventure capital of India — Rishikesh! From thrilling river rafting to peaceful yoga retreats and the Ganga Aarti.</p>
      <p><strong>Price:</strong> ₹2,999 <span style="color: green;">(17% OFF)</span></p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </div>

  <div class="box3">
    <div class="image">
      <img src="image/img-10.jpg" alt="">
    </div>
    <div class="content">
      <h3>Rajgad Fort (Maharashtra)</h3>
      <p>Explore the legacy of Chhatrapati Shivaji Maharaj at Rajgad Fort. Surrounded by misty hills and scenic views, ideal for trekking.</p>
      <p><strong>Price:</strong> ₹2,299 <span style="color: green;">(10% OFF)</span></p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </div>

  <div class="box3">
    <div class="image">
      <img src="image/img-11.jpeg" alt="">
    </div>
    <div class="content">
      <h3>Vaishno Devi (Jammu & Kashmir)</h3>
      <p>Embark on a divine journey to Vaishno Devi Temple, nestled in the Trikuta Mountains. A sacred site with spiritual energy.</p>
      <p><strong>Price:</strong> ₹3,499 <span style="color: green;">(14% OFF)</span></p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </div>

  <div class="box3">
    <div class="image">
      <img src="image/img-12.jpg" alt="">
    </div>
    <div class="content">
      <h3>Kedarnath (Uttarakhand)</h3>
      <p>Located in the lap of the Himalayas, Kedarnath Temple is one of the most revered shrines dedicated to Lord Shiva.</p>
      <p><strong>Price:</strong> ₹5,999 <span style="color: green;">(19% OFF)</span></p>
      <a href="book.php" class="btn">Book now</a>
    </div>
  </div>
</div>


  <div class="load-more"><span class="btn">load more</span></div>
</section>






<!-- Package section Ends -->











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