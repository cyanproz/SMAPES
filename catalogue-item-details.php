<!DOCTYPE html>
<html lang="en" class="theme--light">
  <head>
    <?php include "partials/html-head.php"; ?>
    <link rel="stylesheet" href="styles/style-shopping-item-details.css"/>
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

        <section class="container">
          <a href="catalogue.php" class="button-link">
            <span class='icon material-symbols-outlined'>
              arrow_back
            </span>
          </a>
        </section>

        <?php if (isset($_GET["item"]) && $_GET["item"] == "paper"): ?>
        <section id="catalogue-item-details" class="container">
          <img src="images/catalogue/1.jpg" alt="" srcset="">
          <div>
            <h2>Paper</h2>
            <p>
              Dapatkan kertas daur ulang GRATIS hanya dengan menukarkan 50 SMAPES Coins mu! Kamu bisa memilih sendiri
              warna kertas daur ulang yang kamu inginkan. Dapatkan di SMAPES Corner kesayanganmu ya! Nanti SMAPES
              Warrior akan membantumu!
            </p>
            <h3>Free + 50 S Coins</h3>
          </div>
        </section>
        <?php elseif (isset($_GET["item"]) && $_GET["item"] == "photo-frame"): ?>
        <section class="container">
          <img src="images/catalogue/2.jpg" alt="" srcset="">
          <div>
            <h2>Photo Frame</h2>
            <p>
              Dapatkan bingkai foto menarik yang terbuat dari limbah kertas daur ulang dengan kualitas baik yang cantik
              untuk kamu pajang di meja belajar atau meja kerjamu. Produk ini bisa kamu dapatkan dengan menukarkan 100
              SMAPES Coins + Rp. 5.000 loh. Jangan lupa check out ke SMAPES Corner terdekat ya!
            </p>
            <h3>Rp. 5.000 + 50 S Coins</h3>
          </div>
        </section>
        <?php elseif (isset($_GET["item"]) && $_GET["item"] == "calendar"): ?>
        <section class="container">
          <img src="images/catalogue/3.jpg" alt="" srcset="">
          <div>
            <h2>Calendar</h2>
            <p>
              Kalender ini terbuat dari bahan daur ulang kertas terbaik pilihan SMAPES Warrior. Bagian dalamnya terbuat
              dari kertas tebal yang licin sedangkan bagian luarnya sebagai standing terbuat dari limbah kertas daur
              ulang yang memiliki kualitas baik. Jika kamu punya 100 SMAPES Coins + Rp. 10.000, kamu bisa mendapatkan
              kalender ini di SMAPES Corner kesayanganmu!
            </p>
            <h3>Rp. 10.000 + 100 S Coins</h3>
          </div>
        </section>
        <?php elseif (isset($_GET["item"]) && $_GET["item"] == "book"): ?>
        <section class="container">
          <img src="images/catalogue/4.jpg" alt="" srcset="">
          <div>
            <h2>Book</h2>
            <p>
              Buku buatana SMAPES Warrior ini adalah buku dengan cover tebal yang terbuat dari limbah kertas daur ulang
              yang ramah lingkungan. Desainnya simple & aesthetic. Buku ini memiliki lembaran kertas yang banyak, tebal,
              cocok untuk dijadinkan buku tulis harianmu. Kamu bisa mendapatkannya dengan menukarkan 150 SMAPES Coins +
              Rp. 15.000 saja loh!
            </p>
            <h3>Rp. 15.000 + 150 S Coins</h3>
          </div>
        </section>
        <?php endif; ?>
      </div>
    </div>

    <?php include "partials/page-footer.php"; ?>
  </body>
</html>