<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>

    <script src="search.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- swiper css link (if needed) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">

    <style>
        .faq-section {
            max-width: 1000px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .faq-section h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 30px;
        }

        .faq-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 15px;
        }

        .faq-item h3 {
            font-size: 20px;
            cursor: pointer;
            position: relative;
        }

        .faq-item h3::after {
            content: '\f078';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            right: 0;
            transition: transform 0.3s;
        }

        .faq-item.active h3::after {
            transform: rotate(180deg);
        }

        .faq-answer {
            display: none;
            margin-top: 10px;
            color: #555;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .privacy-policy {
            max-width: 1000px;
            margin: 50px auto;
            padding: 0 20px;
            /* font size: 0 */
        }

        .privacy-policy h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 30px;
        }

        .privacy-policy h3 {
            margin-top: 20px;
            font-size: 22px;
        }

        .privacy-policy p {
            margin-top: 10px;
            color: #555;
            line-height: 1.6;
            font-size: 17px;
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



    <section class="privacy-policy">
        <h1>Privacy Policy</h1>

        <p>At travel., we value your privacy and are committed to protecting your personal data. This Privacy Policy outlines how we collect, use, and protect your information when you use our website and services.</p>

        <h3>Information We Collect</h3>
        <p>We may collect personal information such as your name, email address, phone number, and travel preferences when you book a trip or contact us through our website.</p>

        <h3>How We Use Your Information</h3>
        <p>Your information is used solely to provide and improve our services, process bookings, respond to inquiries, and communicate important updates. We do not sell or rent your personal data to third parties.</p>

        <h3>Cookies and Tracking</h3>
        <p>We use cookies to enhance your browsing experience, analyze website traffic, and personalize content. You can disable cookies in your browser settings.</p>

        <h3>Data Security</h3>
        <p>We implement industry-standard security measures to safeguard your personal information from unauthorized access, alteration, or disclosure.</p>

        <h3>Third-Party Links</h3>
        <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices of those sites. We encourage you to read their privacy policies.</p>

        <h3>Your Consent</h3>
        <p>By using our website, you consent to the terms outlined in this Privacy Policy.</p>

        <h3>Changes to This Policy</h3>
        <p>We may update this policy from time to time. All changes will be posted on this page with a revised effective date.</p>

        <h3>Contact Us</h3>
        <p>If you have any questions or concerns about this Privacy Policy, please contact us at <a href="mailto:info.travelhubofficial@gmail.com">info.travelhubofficial@gmail.com</a>.</p>
    </section>

    <!-- footer section -->
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
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info.travelhubofficial@gmail.com" target="_blank">
                    <i class="fas fa-envelope"></i> info.travelhubofficial@gmail.com</a>
                <a href="https://www.google.com/maps?q=Faisalabad,+Pakistan" target="_blank">
                    <i class="fas fa-map"></i> faisalabad, pakistan - 400104</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
            </div>
        </div>
        <div class="credit"> 
        © 2025<span> Travel Hub.</span> All Rights Reserved.. | Developed By:<span> Waseem, Yumna & Isha </span> |
        </div>
    </section>
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
  src="https://denser.ai/u/embed/8dcca75f-102a-4da9-bf68-b72a7b4ff3a4">
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