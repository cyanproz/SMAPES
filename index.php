<!DOCTYPE html>
<html lang="en" class="theme--light">
  <head>
    <?php include "partials/html-head.php"; ?>
    <link rel="stylesheet" href="styles/style-page-home.css"/>
  </head>

  <!-- 
  Pages
  About SMAPES
  Paper Waste Management System
  Shop
   -->
  
  <body>
    <div id='page-header-contents-footer-layout'>
      <!--?php include "partials/page-navbar.php"; ?-->

      <!-- Hero -->
      <div id="page-contents">
        <section class="hero home">
          <h1>
            SMAPES: Smart Paper Waste TES TES TES
            <div style="color: inherit; font-size: 1.5rem;">Your eco-friendly paper waste solution</div>
          </h1>
        </section>

        <!-- Menu Buttons -->
        <section class="container">
          <video width="100%" height="100%" autoplay muted loop style="aspect-ratio: 1/1; object-fit: cover;">
            <source src="arrow-swirling.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>

          <div id="menu-buttons">
            <a href="about.php" class="button-link menu-button">
              <img src="menu-button-1.png" alt="" srcset="">
              <span class="text">About</span>
            </a>
            
            <a href="drop-it.php" class="button-link menu-button">
              <img src="menu-button-2.png" alt="" srcset="">
              <span class="text">Drop Your Papers</span>
            </a>
  
            <a href="catalogue.php" class="button-link menu-button">
              <img src="menu-button-3.png" alt="" srcset="">
              <span class="text">Shops</span>
            </a>

            <!-- <div>
            </div>
            <div>
            </div> -->
          </div>
        </section>

        <!-- About Us -->
        <!-- <section id="about" class="container fit">
          <h2>🌱 About Us</h2>
          <div class="" style="display: flex; background-color: green;">
            <img src="img1.png" alt="" srcset="" style="width: 400px;">
            <p>SMAPES is blah blah blah</p>
          </div>
        </section> -->

        <div class="container" style="display: none">
          <!-- Kalkulator -->
          <div class="calculator container-box-template-1">
            <h2>📄 Weigh Your Paper</h2>
            <p>Masukkan jumlah botol Anda untuk mengetahui nilai tukarnya:</p>
            <input type="number" id="bottleInput" placeholder="Jumlah botol">
            <button class="button success" onclick="calculateValue()">Hitung</button>
            <div class="result" id="resultText"></div>
          </div>

          <!-- Statistik -->
          <div class="stats">
            <div class="card container-box-template-1">
              <h3>10 Kg</h3>
              <p>Home Papers</p>
            </div>
            <div class="card container-box-template-1">
              <h3>30 Kg</h3>
              <p>School Papers</p>
            </div>
            <div class="card container-box-template-1">
              <h3>50 Kg</h3>
              <p>Office Papers</p>
            </div>
          </div>
        </div>

        <!-- How It Works -->
        <section id="how" class="container" style="display: none">
          <h2>🌱 How It Works</h2>
          <p>3 steps to change your paper waste into economic value & environmentally friendly products:</p>
          <div class="steps">
            <div class="step container-box-template-1">
              <h3>1. Collect</h3>
              <p>Collect papers from home, school, office, or surrounding environment.</p>
            </div>
            <div class="step container-box-template-1">
              <h3>2. Exchange</h3>
              <p>Bring the papers to a nearest drop point to exchange it with recycled papers.</p>
            </div>
            <div class="step container-box-template-1">
              <h3>3. Recycle</h3>
              <p>Your papers will be processed into new recycled papers.</p>
            </div>
          </div>
        </section>

        <!-- Drop Points -->
        <section id="drop" class="container" style="display: none">
          <h2>📍 Drop Points</h2>
          <p>Cari lokasi terdekat untuk menukar botol Anda:</p>
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4896192643466!2d106.82688441532671!3d-6.200000995509408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMDAuMCJTIDEwNsKwNDknMzYuOCJF!5e0!3m2!1sid!2sid!4v1600000000000!5m2!1sid!2sid"
            allowfullscreen="" loading="lazy"></iframe>
        </section>
      </div>

      <?php include "partials/page-footer.php"; ?>
    </div>
  </body>
</html>
