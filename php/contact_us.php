<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>

  <script src="search.js"></script>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

  <!-- External CSS -->
  <link rel="stylesheet" href="style.css" />

  <!-- Inline style fix for dropdown -->
  <style>
    .book-form .inputBox select {
      width: 100%;
      padding: 10px;
      border: 1px solid black;
      font-size: 16px;
      color: #333;
      background-color: white;
      appearance: none;
      margin-top:15px;
      height:48px;
    }

    .book-form .inputBox select:invalid {
      color: #999; /* Light gray placeholder */
    }

    .book-form .inputBox span {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
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

    .required::after {
      content: " *";
      color: red;
    }
  /* class = "line" */
.booking .book-form .line .inputBox{
    flex: 1 1 41rem;
}

.booking .book-form .line .inputBox input{
    width: 100%;
    padding: 1.2rem 1.4rem;
    font-size: 1.6rem;
    color: var(--light-black);
    text-transform: none;
    margin-top: 1.5rem;
    border: var(--border);
}

.booking .book-form .line .inputBox input:focus{
    background: var(--black);
    color: var(--white);
}

.booking .book-form .line .inputBox input:focus::placeholder{
    color: var(--light-white);
}

.booking .book-form .line .inputBox span{
    font-size: 1.5rem;
    color: var(--light-black);
    margin-top:1.5rem;
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
<!-- Banner -->
<div class="heading" style="background:url(image/contact-us.jpg) no-repeat">
  <h1>contact us</h1>
</div>

<!-- Booking Section -->
<section class="booking">
  <h1 class="heading-title">Instant Inquiry</h1>

  <form action="contact_send_email.php" method="POST" class="book-form">
    <div class="line">
      <div class="inputBox">
        <span class="required">Name:</span>
        <input type="text" name="name" placeholder="Enter your name" required>
      </div>

      <div class="inputBox">
        <span class="required">Email:</span>
        <input type="email" name="email" placeholder="Enter your email" required 
        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}" 
        title="Please enter a valid email address (e.g., example@domain.com)" />

      </div>

      <div class="inputBox">
        <span>Phone:</span>
        <input type="tel" name="phone" pattern="0[0-9]{10}" maxlength="11" placeholder="e.g. 03001234567" />
      </div>

      <div class="inputBox">
        <span class="required">Message:</span>
        <input type="text" placeholder="Enter your message" name="message" id="message" required />
      </div>

    </div>

    <!-- reCAPTCHA -->
    <div class="g-recaptcha" data-sitekey="6LezozUrAAAAAGZNtzAysGyGr2x1sIi8WVg348QH"></div><br>


    <input type="submit" value="Send" class="btn" name="send" />
  </form>
</section>

<!-- Footer -->
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
        <i class="fas fa-envelope"></i> info.travelhubofficial@gmail.com
      </a>
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

<script>
document.getElementById('searchForm').addEventListener('submit', function(e) {
  e.preventDefault(); // Prevent form from reloading page
  const query = document.getElementById('searchInput').value;

  fetch('search.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'query=' + encodeURIComponent(query)
  })
  .then(response => response.text())
  .then(data => {
    document.getElementById('searchResults').innerHTML = data;
  });
});
</script>

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