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
    <div class="heading" style="background:url(image/safari.jpg) no-repeat">
        <h1>Sfari Experience</h1>
    </div>

<section class="details-container">
    <h1>🐾 Safari Experience — Bahawalpur & Lal Suhanra National Park, Punjab</h1>
    <p>
        Welcome to the untamed beauty of Lal Suhanra National Park, located near Bahawalpur — a
        unique safari destination where golden deserts, lush forests, and wetlands merge into one of
        South Asia's largest biosphere reserves. This is your chance to explore Pakistan’s wildlife, soak
        in natural landscapes, and enjoy luxury camping like never before.
    </p>

    <div class="highlights">
        <h2>🦓 Experience Highlights:</h2>
        <ul>
            <li><strong>Wildlife Safari Drive:</strong>
                <ul>
                    <li>Hop on a 4x4 safari jeep and venture into habitats teeming with:</li>
                    <li>Blackbuck antelopes, Chinkara deer, Blue bulls (nilgai), Desert foxes, wild boars, jackals</li>
                    <li>Over 160 species of birds including peacocks, partridges, and migratory cranes</li>
                    <li>Sunrise and sunset drives for the best animal sightings and golden photography</li>
                </ul>
            </li>
            <li><strong>Desert & Forest Combo:</strong>
                <ul>
                    <li>Unique landscapes combining desert dunes, green forests, and wetlands</li>
                    <li>Camel safari across Cholistan Desert</li>
                    <li>Explore forest trails with naturalists to observe bird life and native plants</li>
                </ul>
            </li>
            <li><strong>Lake Patisar Excursion:</strong>
                <ul>
                    <li>Boat ride or nature walk along this serene lake inside the park</li>
                    <li>Spot rare migratory birds like flamingos, pelicans, and ducks during winter</li>
                </ul>
            </li>
        </ul>

        <h2>🏕 Luxury Camps & Eco-Lodges:</h2>
        <ul>
            <li>Stay in glamping tents or eco-lodges with modern amenities</li>
            <li>Bonfire dinners under the stars, folk music, and guided stargazing sessions</li>
            <li>Optional treehouse viewing platforms for sunrise animal sightings</li>
        </ul>

        <h2>🏛 Add-On Cultural Trip to Bahawalpur:</h2>
        <ul>
            <li>Visit Noor Mahal – a stunning palace built in Italian style by Nawabs</li>
            <li>Tour Derawar Fort – a 9th-century fortress in the heart of Cholistan</li>
            <li>Attend the Cholistan Desert Jeep Rally (Feb–Mar) if the timing aligns</li>
        </ul>

        <h2>🍽 Traditional Dining Experience:</h2>
        <ul>
            <li>Cholistani BBQ, sajji, makai roti with saag, and fresh camel milk desserts</li>
            <li>Bush breakfasts and picnic lunches in the wild</li>
            <li>Local village dinner hosted by desert communities (on request)</li>
        </ul>

        <h2>🎒 Activities Included:</h2>
        <ul>
            <li>Two daily guided safari drives</li>
            <li>Camel safari with local guides</li>
            <li>Birdwatching & wildlife photography sessions</li>
            <li>Cultural evening with local music</li>
            <li>Visit to nearby palaces and historical sites</li>
        </ul>

        <h2>🧭 Duration & Best Time to Visit:</h2>
        <p><strong>Duration:</strong> 3 Days / 2 Nights</p>
        <p><span id="month">November to March</span> – Cooler weather and peak migratory bird season make this the ideal window.</p>

        <h2>🌐 Ideal For:</h2>
        <p>Nature and wildlife lovers, families with kids, photographers and adventure travelers, and couples looking for a luxury outdoor escape.</p>
    </div>

    <h2 style="margin-top: 30px;">💰 Price per Guest:</h2>
    <p>
    <span class="original-price">PKR 23,000</span> →
    <span class="discount-price">PKR 11,500 (50% Off)</span>
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
    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ishashabab@gmail.com" target="_blank">
        <i class="fas fa-envelope"></i> ishashabab@gmail.com
    </a>

    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=arifyumna241@gmail.com" target="_blank">
        <i class="fas fa-envelope"></i> arifyumna241@gmail.com
    </a>

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