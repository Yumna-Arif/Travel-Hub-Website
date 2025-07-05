<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Use</title>

    <script src="search.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Inline Page-Specific CSS -->
    <style>
        .home-offer {
            text-align: center;
        }

        .home-offer .content {
            margin: 0 auto;
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

        .terms-of-use {
            padding: 40px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .terms-of-use h1.heading-title {
            text-align: center;
            font-size: 36px;
            margin-bottom: 30px;
        }

        .terms-content h2 {
            font-size: 24px;
            color: #333;
            margin-top: 20px;
        }

        .terms-content p {
            font-size: 16px;
            color: #555;
            line-height: 1.8;
        }

        .home-about {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 20px;
            padding: 40px 20px;
        }

        .home-about .image img {
            max-width: 100%;
            border-radius: 10px;
        }

        .home-about .content {
            flex: 1;
            min-width: 250px;
        }

        .home-about .content h3 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .home-about .content p {
            font-size: 16px;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #009688;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #00796b;
        }

        .footer {
            background-color:rgb(0, 0, 0);
            padding: 40px 20px;
            margin-top: 60px;
        }

        .footer .box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer .box {
            flex: 1;
            min-width: 200px;
            margin-bottom: 20px;
        }

        .footer .box h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        .footer .box a {
            display: block;
            color: #666;
            text-decoration: none;
            margin: 5px 0;
        }

        .footer .box a i {
            margin-right: 8px;
        }

        .footer .credit {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #999;
        }
    </style>
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


    <!-- Hero Section -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(image/home-slider-3.jpg) no-repeat center; background-size: cover;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Terms of Use</h3>
                        <a href="terms.php" class="btn">read more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- About Terms -->
    <section class="home-about">
        <div class="image">
            <img src="image/package-5.jpg" alt="About Us">
        </div>
        <div class="content">
            <h3>About our Terms of Use</h3>
            <p>These terms of use govern your use of our website and services. Please read them carefully before using our site or making bookings.</p>
            <a href="terms.php" class="btn">Read Full Terms</a>
        </div>
    </section>

    <!-- Terms of Use Section -->
    <section class="terms-of-use">
        <h1 class="heading-title">Terms of Use</h1>
        <div class="terms-content">
            <h2>1. Acceptance of Terms</h2>
            <p>By accessing and using our website, you agree to comply with these Terms of Use. If you do not agree to these terms, please refrain from using our website and services.</p>

            <h2>2. Use of Services</h2>
            <p>You are granted a non-exclusive, non-transferable license to access and use our website for personal and non-commercial purposes. You agree not to misuse the website or its services.</p>

            <h2>3. Account Registration</h2>
            <p>To access certain features of our website, you may be required to create an account. You are responsible for maintaining the confidentiality of your account and for all activities under your account.</p>

            <h2>4. Prohibited Activities</h2>
            <p>You agree not to engage in any activity that may harm, disable, overburden, or impair the website, or interfere with any other user's use of the site. This includes, but is not limited to, hacking, spamming, or attempting to access restricted areas.</p>

            <h2>5. Intellectual Property</h2>
            <p>The content on our website, including text, graphics, logos, images, and software, is the property of the company or its licensors and is protected by copyright laws. You may not copy, reproduce, or distribute any content without permission.</p>

            <h2>6. Limitation of Liability</h2>
            <p>We are not liable for any direct, indirect, incidental, or consequential damages arising out of your use or inability to use our website or services. You use our services at your own risk.</p>

            <h2>7. Indemnity</h2>
            <p>You agree to indemnify and hold harmless our company and its affiliates from any claims, damages, or liabilities arising from your violation of these Terms of Use.</p>

            <h2>8. Changes to Terms</h2>
            <p>We reserve the right to modify or update these Terms of Use at any time. Any changes will be effective as soon as they are posted on this page, and your continued use of the website will signify your acceptance of the updated terms.</p>

            <h2>9. Governing Law</h2>
            <p>These Terms of Use are governed by and construed in accordance with the laws of the jurisdiction in which our company is based, and you agree to submit to the exclusive jurisdiction of the courts in that jurisdiction.</p>
        </div>
    </section>

    <!-- Footer -->
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
                    <i class="fas fa-envelope"></i> info.travelhubofficial@gmail.com</a>
                <a href="https://www.google.com/maps?q=Faisalabad,+Pakistan" target="_blank"><i class="fas fa-map"></i> Faisalabad, Pakistan - 400104</a>
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

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
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
