<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>

    <style>
        .load-more {
            text-align: center;
            margin-top: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s ease;
        }
    </style>

    <script src="search.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- swiper css link -->
<link
rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<!-- font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<!-- css file link -->
<link rel="stylesheet" href="style.css">
</head>


<body>
<!-- Header -->
<section class="header" style="background-color: white; color: black;">
  <a href="home.php" class="logo" style="display: inline-block;">
    <img src="image/logo.png" alt="Logo" style="height: 60px;">
  </a>

  <nav class="navbar" style="display: flex; gap: 10px; list-style: none; padding: 0; margin: 0; align-items: center;">
    <a title="Home" href="home.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'page' : 'false'; ?>">
      <span style="font-size: 18px;">HOME</span>
    </a>
    <a title="About" href="about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'page' : 'false'; ?>">
      <span style="font-size: 18px;">ABOUT</span>
    </a>
    <a title="Package" href="package.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'package.php' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) == 'package.php' ? 'page' : 'false'; ?>">
      <span style="font-size: 18px;">PACKAGE</span>
    </a>
    <a title="Book" href="book.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'book.php' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) == 'book.php' ? 'page' : 'false'; ?>">
      <span style="font-size: 18px;">BOOK</span>
    </a>
    <a title="Contact Us" href="contact_us.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact_us.php' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) == 'contact_us.php' ? 'page' : 'false'; ?>">
      <span style="font-size: 18px;">CONTACT US</span>
    </a>
    <div class="custom-search-container">
    <div class="custom-search-bar">
        <input type="text" placeholder="Search..." id="search-input">
        <button type="submit">
            <i class="fas fa-search"></i>
        </button>
    </div>

    <!-- Search Results -->
    <div id="search-results"></div>
  </nav>

  <div id="menu-btn" class="fas fa-bars" style="font-size: 20px; cursor: pointer; color: black;"></div>
</section>

<div class="heading" style="background:url(image/ocean-home.jpg) no-repeat">
    <h1>packages</h1>
</div>

<!-- package section  -->
<section class="packages">
    <h1 class="heading-title">top destinations</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="image/beach.jpg" alt="">
            </div>
            <div class="content">
                <h3>Beach Paradise</h3>
                <p>Experience the serenity of pristine beaches, clear waters, and luxurious accommodations in this tropical getaway.</p>
                <a href="beach_paradise.php" class="btn">See more</a>
            </div>
        </div> 

        <div class="box">
            <div class="image">
                <img src="image/mountain.jpg" alt="">
            </div>
            <div class="content">
                <h3>Mountain Adventure</h3>
                <p>Embark on thrilling hikes, breathtaking views, and cozy mountain lodges in this alpine adventure package.</p>
                <a href="mountain_adventure.php" class="btn">See more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/cultural-experince.jpg" alt="">
            </div>
            <div class="content">
            <h3>Cultural Exploration</h3>
            <p>Immerse yourself in the rich culture, history, and traditions of this vibrant city tour.</p>
                <a href="cultural_exploration.php" class="btn">See more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/safari.jpg" alt="">
            </div>
            <div class="content">
            <h3>Safari Experience</h3>
            <p>Discover the beauty of the wild with this safari adventure, featuring wildlife sightings and luxury camps.</p>
                <a href="safari_experience.php" class="btn">See more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/citylights.jpg" alt="">
            </div>
            <div class="content">
            <h3>City Lights</h3>
            <p>Enjoy the vibrant nightlife, iconic landmarks, and culinary delights of this urban destination.</p>
                <a href="city_lights.php" class="btn">See more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/desert.jpg" alt="">
            </div>
            <div class="content">
            <h3>Desert Adventure</h3>
            <p>Explore the vast desert landscapes, camel rides, and starry skies with this unique experience.</p>
                <a href="desert_adventure.php" class="btn">See more</a>
            </div>
        </div>

    </div>
</section>

<!-- footer section  -->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="faq.php"> <i class="fas fa-angle-right"></i>ask questions</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i>about us</a>
            <a href="privacy.php"> <i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="terms.php"> <i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
    <h3>contact info</h3>
    <a href="tel:+923077855020"> <i class="fas fa-phone"></i> +92-3077855020</a>
    <a href="tel:+1112223333"> <i class="fas fa-phone"></i> +111-222-3333</a>
    
    <!-- Opens Gmail compose window -->
    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info.travelhubofficial@gmail.com" target="_blank">
        <i class="fas fa-envelope"></i> info.travelhubofficial@gmail.com</a>

    <!-- Opens Google Maps location -->
    <a href="https://www.google.com/maps?q=Faisalabad,+Pakistan" target="_blank">
        <i class="fas fa-map"></i> faisalabad, pakistan - 400104
    </a>
</div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
        </div>
        <div class="credit"> 
        © 2025<span> Travel Hub.</span> All Rights Reserved.. | Developed By:<span> Waseem, Yumna & Isha </span> |
        </div>

        </section>



<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- js file link  -->
<script src="script.js"></script>
<!-- ✅ Floating Robot Image Button -->
<style>
  #chatbot-launcher {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: transparent;
    border: none;
    width: 70px;
    height: 70px;
    cursor: pointer;
    z-index: 9999;
  }

  #chatbot-launcher img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
  }

  #chatbot-iframe {
    display: none;
    position: fixed;
    bottom: 100px;
    right: 20px;
    width: 400px;
    height: 600px;
    border: none;
    z-index: 9998;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
  }
</style>

<!-- ✅ Custom Image Button -->
<button id="chatbot-launcher">
  <img src="image/robot.png" alt="Chatbot">
</button>

<!-- ✅ Chatbot Embed Iframe -->
<iframe
  id="chatbot-iframe"
  src="https://denser.ai/u/embed/a17b41f1-f217-431f-9b34-e046d9a48c4d">
</iframe>

<!-- ✅ Toggle Functionality -->
<script>
  const button = document.getElementById('chatbot-launcher');
  const iframe = document.getElementById('chatbot-iframe');

  button.addEventListener('click', () => {
    iframe.style.display = iframe.style.display === 'block' ? 'none' : 'block';
  });
</script>
</body>
</html>