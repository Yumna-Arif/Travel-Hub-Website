<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>

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
<style>
    .details-container {
            max-width: 1000px;
            margin: 50px auto;
            background-color: rgba(200, 197, 197, 0.6);
            padding: 40px;
            border-radius: 10px;
        }

        .details-container h1 {
            font-size: 36px;
            margin-bottom: 10px;
            /* color: var(--main-color); */
            font-color:rgba(8, 8, 8, 0.6);
        }

        .details-container p {
            font-size: 17px;
            line-height: 1.8;
            color: rgba(59, 58, 58, 0.6);
        }

        .btn {
            display: inline-block;
            margin-top: 25px;
            background: var(--main-color);
            color: #fff;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .highlights {
            margin-top: 10px;
            font-size:15px
        }

        .highlights ul {
            padding-left: 20px;
            list-style-type: square;
        }

        .highlights li {
            margin-bottom: 8px;
        }
        #month{
            color: rgba(188, 5, 5, 0.6);
        }
        .heading{
            height:560px;
        }
</style>

<body>
<!-- Header -->
<section class="header" style="background-color: white; color: black;">
  <a href="home.php" class="logo" style="display: inline-block;">
    <img src="image/logo.png" alt="Logo" style="height: 60px;">
  </a>

  <nav class="navbar" style="display: flex; gap: 0.5px; list-style: none; padding: 0; margin: 0; align-items: center;">
    <a title="Home" href="home.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'page' : 'false'; ?>">
      <span style="font-size: 15px;">HOME</span>
    </a>
    <a title="About" href="about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'page' : 'false'; ?>">
      <span style="font-size: 15px;">ABOUT</span>
    </a>
    <a title="Package" href="package.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'package.php' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) == 'package.php' ? 'page' : 'false'; ?>">
      <span style="font-size: 15px;">PACKAGE</span>
    </a>
    <a title="Book" href="book.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'book.php' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) == 'book.php' ? 'page' : 'false'; ?>">
      <span style="font-size: 15px;">BOOK</span>
    </a>
    <a title="Contact Us" href="contact_us.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact_us.php' ? 'active' : ''; ?>" aria-current="<?php echo basename($_SERVER['PHP_SELF']) == 'contact_us.php' ? 'page' : 'false'; ?>">
      <span style="font-size: 15px;">CONTACT US</span>
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
<div class="heading" style="background:url(image/mountain.jpg) no-repeat">
    <h1>Mountain Adventure</h1>
</div>

<section class="details-container">
  <h1>🏔️ Mountain Adventure — Hunza Valley, Gilgit-Baltistan</h1>
  <p>
    Explore the breathtaking beauty of Hunza Valley, where towering peaks meet peaceful meadows and turquoise rivers. Our Mountain Adventure package offers a once-in-a-lifetime experience in the heart of the Karakoram mountains.
  </p>

  <div class="highlights">
    <h2>🌄 Experience Highlights:</h2>
    <ul>
      <li><strong>Scenic Mountain Drive:</strong>
        <ul>
          <li>Journey through the iconic Karakoram Highway</li>
          <li>Unmatched views of snow-covered peaks and valleys</li>
        </ul>
      </li>
      <li><strong>Cultural Heritage Exploration:</strong>
        <ul>
          <li>Guided visits to Altit Fort and Baltit Fort</li>
          <li>Insights into Hunza's ancient history and traditions</li>
        </ul>
      </li>
      <li><strong>Adventure & Sightseeing:</strong>
        <ul>
          <li>Day trip to the stunning Attabad Lake with boating</li>
          <li>Visit Eagle’s Nest, Passu Cones & Rakaposhi Viewpoint</li>
          <li>Optional treks to Hopper Glacier or Passu Glacier</li>
        </ul>
      </li>
    </ul>

    <h2>🏕️ Accommodation:</h2>
    <ul>
      <li>Stay in cozy mountain lodges and boutique hotels</li>
      <li>Experience authentic Hunza hospitality with scenic views</li>
    </ul>

    <h2>🎒 What’s Included:</h2>
    <ul>
      <li>Private transport from Islamabad or Gilgit in luxury vans</li>
      <li>Professional guide, fuel, tolls and permits</li>
      <li>Breakfast, dinner, snacks, and mineral water</li>
      <li>Emergency medical support and assistance</li>
    </ul>

    <h2>📅 Duration & Best Time to Visit:</h2>
    <p><strong>Duration:</strong> 6 Days / 5 Nights</p>
    <p><span id="month">April to October</span> – Clear skies and accessible mountain routes for the best experience.</p>

    <h2>🌐 Ideal For:</h2>
    <p>Nature lovers, hikers, photographers, and anyone looking to disconnect and recharge in the majestic Karakoram range.</p>
  </div>

  <h2 style="margin-top: 30px;">💰 Price per Guest:</h2>
  <p>
    <span class="original-price">PKR 50,000</span> →
    <span class="discount-price">PKR 25,000 (50% Off)</span>
  </p>
  <a href="book.php" class="btn">Book Now</a>

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
  src="https://denser.ai/u/embed/b7a293f6-9fd7-4d78-bc6b-da6872930808">
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