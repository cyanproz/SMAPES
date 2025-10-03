<!DOCTYPE html>
<html lang="en" class="theme--light">
  <head>
    <?php include "partials/html-head.php"; ?>
    <link rel="stylesheet" href="styles/style-page-catalogue.css"/>
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
          <h2>Shop</h2>

          <p>
            Halo, <strong>User0</strong>! Kamu bisa menukarkan SMAPES Coinsmu dengan berbelanja di sini! Caranya mudah,
            kamu tinggal tunjukkan pada SMAPES Warrior di SMAPES Corner berapa banyak SMAPES Coins yang kamu punya dan
            ingin kamu tukarkan dengan item-item di katalog ini! Kamu bisa menukarkannya dengan berbelanja di SMAPES
            Corner langsung ya!
          </p>

          <div id="shopping-item-list">
            <a class="button-link shopping-item" href="catalogue-item-details.php?item=paper">
              <img src="images/catalogue/1.jpg" alt="" srcset="">
              <h4>Paper</h4>
              <h3>Free + 50 S Coins</h3>
              <button>
                <span class="icon material-symbols-outlined">
                  add_shopping_cart
                </span>
              </button>
            </a>

            <a class="button-link shopping-item" href="catalogue-item-details.php?item=photo-frame">
              <img src="images/catalogue/2.jpg" alt="" srcset="">
              <h4>Photo Frame</h4>
              <h3>Rp. 5.000 + 50 S Coins</h3>
              <button>
                <span class='icon material-symbols-outlined'>
                  add_shopping_cart
                </span>
              </button>
            </a>

            <a class="button-link shopping-item" href="catalogue-item-details.php?item=calendar">
              <img src="images/catalogue/3.jpg" alt="" srcset="">
              <h4>Calendar</h4>
              <h3>Rp. 10.000 + 100 S Coins</h3>
              <button>
                <span class='icon material-symbols-outlined'>
                  add_shopping_cart
                </span>
              </button>
            </a>

            <a class="button-link shopping-item" href="catalogue-item-details.php?item=book">
              <img src="images/catalogue/4.jpg" alt="" srcset="">
              <h4>Book</h4>
              <h3>Rp. 15.000 + 150 S Coins</h3>
              <button>
                <span class='icon material-symbols-outlined'>
                  add_shopping_cart
                </span>
              </button>
            </a>
          </div>
        </section>
      </div>
    </div>

    <?php include "partials/page-footer.php"; ?>
  </body>
</html>