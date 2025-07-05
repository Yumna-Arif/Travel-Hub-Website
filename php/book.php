<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Now</title>

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
<div class="heading" style="background:url(image/travel-home.jpg) no-repeat">
  <h1>book now</h1>
</div>

<!-- Booking Section -->
<section class="booking">
  <h1 class="heading-title">Book Your Trip!</h1>

  <form action="book_form.php" method="post" class="book-form">
      <div class="flex">

        <div class="inputBox">
          <span class="required">Name:</span>
          <input type="text" placeholder="Enter your name" name="name" pattern="[A-Z][a-z]+(\s[A-Z][a-z]+)+"
          title="Please enter your full name (e.g., Muhammad Ali)" required />
        </div>


        <div class="inputBox">
          <span class="required">Email:</span>
          <input type="email" name="email" placeholder="Enter your email" required 
          pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}" 
          title="Please enter a valid email address (e.g., example@domain.com)" />
        </div>

        <div class="inputBox">
          <span class="required">Phone:</span>
          <input type="number" name="phone" pattern="0[0-9]{10}" maxlength="11" required placeholder="e.g. 03001234567" />
        </div>

        <div class="inputBox">
          <span class="required">Address:</span>
          <input type="text" placeholder="Enter your address" name="address" required />
        </div>

        <div class="inputBox">
          <span class="required">Where to:</span>
          <?php if (isset($_GET['package'])): ?>
          <input type="text" name="location" value="<?php echo htmlspecialchars($_GET['package']); ?>" readonly />
          <?php else: ?>
          <select name="location" id="packageSelect" required onchange="setDurationAndPrice()">
            <option value="" disabled selected hidden>Select your destination</option>
            <option value="🏖️ Beach Paradise — Kund Malir, Balochistan|10500|3">🏖️ Beach Paradise — Kund Malir, Balochistan</option>
            <option value="🏔️ Mountain Adventure — Hunza Valley|25000|6">🏔️ Mountain Adventure — Hunza Valley</option>
            <option value="🏜️ Desert Expedition — Cholistan|11000|3">🏜️ Desert Expedition — Cholistan</option>
            <option value="🕌 Cultural Exploration — Lahore|9500|3">🕌 Cultural Exploration — Lahore</option>
            <option value="🌄 Safari Experience — Bahawalpur & Lal Suhanra National Park, Punjab|11500|3">🌄 Safari Experience — Bahawalpur & Lal Suhanra National Park, Punjab</option>
            <option value="🌃 City Lights — Karachi, Sindh|16500|3">🌃 City Lights — Karachi, Sindh</option>
          </select>
          <?php endif; ?>
        </div>

        <div class="inputBox">
          <span class="required">How many:</span>
          <input type="number" placeholder="Number of guests" name="guests" id="guests" onchange="updatePrice()" required />
        </div>

        <div class="inputBox">
          <span class="required">Departure Date:</span>
          <input type="date" name="departure" id="departure" onchange="setLeavingDate()" required />
        </div>

        <div class="inputBox">
          <span>Return Date:</span>
          <input type="date" name="returning" id="returning" readonly />
        </div>

        <div class="inputBox">
          <span>Cost/Price:</span>
          <input type="text" name="cost" id="cost" readonly placeholder="Price will appear here" />
        </div>

      </div>

      <!-- reCAPTCHA -->
      <div class="g-recaptcha" data-sitekey="6LezozUrAAAAAGZNtzAysGyGr2x1sIi8WVg348QH"></div><br>

      <input type="submit" value="Submit" class="btn" name="send" />
  </form>
</section>

<script>
  let pricePerGuest = 0; // Initialize the price per guest
  let packageDuration = 0; // Initialize the package duration

  // Function to set the price and duration based on the selected package
  function setDurationAndPrice() {
    const selectedPackage = document.getElementById('packageSelect').value;
    const priceAndDuration = selectedPackage.split('|');
    pricePerGuest = parseFloat(priceAndDuration[1]); // Price per guest
    packageDuration = parseInt(priceAndDuration[2]); // Duration of the package

    // Update the price based on the number of guests
    updatePrice();
  }

  // Function to update the price and cost based on number of guests
  function updatePrice() {
    const numberOfGuests = document.getElementById('guests').value;
    const totalPrice = pricePerGuest * numberOfGuests;

    // Update the cost field
    document.getElementById('cost').value = `PKR ${totalPrice} (${numberOfGuests} guest${numberOfGuests > 1 ? 's' : ''})`;
  }

  // Function to set the leaving date based on the arrival date and package duration
  function setLeavingDate() {
    const arrivalDate = new Date(document.getElementById('departure').value);

    if (!isNaN(arrivalDate.getTime()) && packageDuration) {
      const leavingDate = new Date(arrivalDate);
      
      // Set leaving date based on package duration
      leavingDate.setDate(arrivalDate.getDate() + packageDuration); // Add package duration (in days)

      const leavingDateString = leavingDate.toISOString().split('T')[0]; // Format date to YYYY-MM-DD
      document.getElementById('returning').value = leavingDateString;
    }
  }
</script>


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

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const bookForm = document.querySelector('.book-form');
    
    bookForm.addEventListener('submit', function(e) {
      // Check if form is valid
      if (bookForm.checkValidity()) {
        alert('Submit successfully');
      }
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
  src="https://denser.ai/u/embed/41261964-bbe3-4566-a9df-baa3ed689ed1">
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
