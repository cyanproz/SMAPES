<!DOCTYPE html>
<html lang="en" class="theme--light">
  <head>
    <?php include "partials/html-head.php"; ?>
    <link rel="stylesheet" href="styles/style-page-drop-it.css"/>
  </head>

  <!-- 
  Pages
  About SMAPES
  Paper Waste Management System
  Shop
   -->
  
  <body>
    <div id='page-header-contents-footer-layout'>
      <?php include "partials/page-navbar.php"; ?>
      
      <div id="page-contents">
        <!-- Hero -->
        <?php include "partials/page-header.php"; ?>

        <div class="container">
          <!-- Kalkulator -->
          <div class="calculator container-box-template-1">
            <h2>📄 Weigh Your Paper</h2>
            <p>Enter the weight of you paper waste to know the amount of SMAPES Coins to exchange with:</p>
            <input type="number" id="paperInput" placeholder="Paper Weight (gr)">
            <button class="button success" onclick="calculateValue()">Hitung</button>
            <div class="result" id="resultText"></div>
          </div>
          
        </div>
        
        <!-- Statistik -->
        <div class="container">
          <h2>History</h2>
          <p>Hi <strong>User0</strong>! This is your paper waste exchange history.</p>
          <table id="history-table" class="styled">
            <colgroup>
              <col style="width: 108px">
              <col style="width: 86px;">
              <col style="width: 66px;">
              <col>
            </colgroup>
            <thead>
              <tr>
                <th>Date</th>
                <th>Weigh</th>
                <th>Coins</th>
                <th>Location</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>09/11/2025</td>
                <td>500 gr</td>
                <td>50</td>
                <td>AEON Mall Bandung</td>
              </tr>
              
              <tr>
                <td>07/14/2025</td>
                <td>250 gr</td>
                <td>25</td>
                <td>SMP Hijau Bandung</td>
              </tr>
              
              <tr>
                <td>04/30/2025</td>
                <td>1000 gr</td>
                <td>100</td>
                <td>Gedung Sate</td>
              </tr>
            </tbody>
          </table>

          <!-- <div class="stats">
            <div class="card container-box-template-1">
              <h3>10 gr</h3>
              <p>Home Papers</p>
            </div>
            <div class="card container-box-template-1">
              <h3>30 gr</h3>
              <p>School Papers</p>
            </div>
            <div class="card container-box-template-1">
              <h3>50 gr</h3>
              <p>Office Papers</p>
            </div>
          </div> -->
        </div>
        
        <!-- Drop Points -->
        <section id="drop" class="container">
          <h2>📍 Find the Nearest SMAPES Corner</h2>
          <p>Find the nearest corner to exchange your paper waste:</p>
          <!-- <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4896192643466!2d106.82688441532671!3d-6.200000995509408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMDAuMCJTIDEwNsKwNDknMzYuOCJF!5e0!3m2!1sid!2sid!4v1600000000000!5m2!1sid!2sid"
            allowfullscreen="" loading="lazy"></iframe> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d832.6765166153554!2d107.61832995454884!3d-6.902638612750934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c5e8866e5%3A0x37be7ac9d575f7ed!2sGedung%20Sate!5e0!3m2!1sen!2sid!4v1759396659731!5m2!1sen!2sid"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
      </div>
    </div>

    <?php include "partials/page-footer.php"; ?>
    
    <script>
      function calculateValue() {
        const coinsPerGr = 10; // Coins per 
        const paperWeight = document.getElementById("paperInput").value;
        const total = paperWeight / coinsPerGr;

        if (paperWeight > 0) {
          document.getElementById("resultText").innerText =
            `${paperWeight} gr paper(s) = ${total} SMAPES Coin(s)`;
        } else {
          document.getElementById("resultText").innerText = "Masukkan jumlah botol dengan benar!";
        }
      }
    </script>
  </body>
</html>