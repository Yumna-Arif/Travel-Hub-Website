<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <script src="search.js"></script>

    <!-- home-offer section css -->
    <style>
        .home-offer {
            text-align: center;
        }

        .home-offer .content {
            max-width: 0 auto;
        }

        .home-offer .content h3 {
            font-size: 3.5rem;
            text-transform: uppercase;
            color: var(--black);
        }

        .home-offer .content p {
            font-size: 1.5rem;
            color: var(--light-black);
            line-height: 2;
            padding: 1rem 0;
        }

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

        .btn:hover {
            background: #555;
        }
  
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
        <button type="submit"><i class="fas fa-search"></i></button>
    </div>
    <!-- Search Results -->
 <div id="search-results"></div>
 <div id="menu-btn" class="fas fa-bars" style="font-size: 20px; cursor: pointer; color: black; "></div>
</nav>
 
  
</section>


    <!-- home section -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(image/home-slider-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Travel Around The World</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(image/ocean-home.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Discover The New Places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(image/travel-home.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Make Your Tour Worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- service section -->
    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <a href = "city_lights.php">
            <div class="box"><img src="image/adventure.png" alt=""><h3>adventure</h3></div></a>
            <a href = "cultural_exploration.php">
            <div class="box"><img src="image/gps.png" alt=""><h3>tour guide</h3></div></a>
            <a href = "beach_paradise.php">
            <div class="box"><img src="image/trekking.png" alt=""><h3>trekking</h3></div></a>
            <a href = "mountain_adventure.php">
            <div class="box"><img src="image/fire.png" alt=""><h3>camp fire</h3></div></a>
            <a href = "safari_experience.php">
            <div class="box"><img src="image/offroad.png" alt=""><h3>off road</h3></div></a>
            <a href = "mountain_adventure.php">
            <div class="box"><img src="image/camping.png" alt=""><h3>camping</h3></div></a>
        </div>
    </section>

    <!-- home about section -->
    <section class="home-about">
        <div class="image">
            <img src="image/about.png" alt="">
        </div>
        <div class="content">
            <h3>About us</h3>
            <p>We are dedicated to providing exceptional travel experiences, offering tailored packages, expert guides, and unforgettable adventures</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>

    <!-- home package section -->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image"><img src="image/beach.jpg" alt=""></div>
                <div class="content">
                    <h3>Beach Paradise</h3>
                    <p>Experience the serenity of pristine beaches, clear waters, and luxurious accommodations in this tropical getaway.</p>
                    <a href="beach_paradise.php" class="btn">See more</a>
                </div>
            </div>
            <div class="box">
                <div class="image"><img src="image/mountain.jpg" alt=""></div>
                <div class="content">
                    <h3>Mountain Adventure</h3>
                    <p>Embark on thrilling hikes, breathtaking views, and cozy mountain lodges in this alpine adventure package.</p>
                    <a href="mountain_adventure.php" class="btn">See more</a>
                </div>
            </div>
            <div class="box">
                <div class="image"><img src="image/cultural-experince.jpg" alt=""></div>
                <div class="content">
                    <h3>Cultural Exploration</h3>
                    <p>Immerse yourself in the rich culture, history, and traditions of this vibrant city tour.</p>
                    <a href="cultural_exploration.php" class="btn">See more</a>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="package.php" class="btn">load more</a>
        </div>
    </section>

    <!-- home offer section -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Take advantage of our limited-time offer and save up to 50% on your next travel adventure. Plan your dream trip today!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>

    <!-- footer section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="faq.php"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about us</a>
                <a href="privacy.php"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="terms.php"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+923077855020"><i class="fas fa-phone"></i> +92-3077855020</a>
                <a href="tel:+1112223333"><i class="fas fa-phone"></i> +111-222-3333</a>
                
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info.travelhubofficial@gmail.com" target="_blank">
                    <i class="fas fa-envelope"></i> info.travelhubofficial@gmail.com
                </a>
                <a href="https://www.google.com/maps?q=Faisalabad,+Pakistan" target="_blank">
                    <i class="fas fa-map"></i> faisalabad, pakistan - 400104
                </a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
            </div>
        </div>
        <div class="credit"> 
            © 2025<span> Travel Hub.</span> All Rights Reserved.. | Developed By:<span> Waseem, Yumna & Isha </span> |
        </div>
    </section>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- js file link -->
    <script src="script.js"></script>

    <div id="cookieConsent" class="custom-cookie-banner">
  <p>
    Our website uses cookies to improve your experience.
    <a href="privacy.php" target="_blank">Learn more <span>↗</span></a>
  </p>
  <button id="acceptCookies">OK, Go it!</button>
</div>

<script src="cookie-consent.js"></script>
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
  src="https://denser.ai/u/embed/f7f16fa3-b917-4943-9d16-aacbe7ab119b">
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