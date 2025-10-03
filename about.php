<!DOCTYPE html>
<html lang="en" class="theme--light">
  <head>
    <?php include "partials/html-head.php"; ?>
    <link rel="stylesheet" href="styles/style-page-about.css"/>
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

        <!-- About -->
        <section id="sect--about" class="container">
          <img src="logo-transparent.png" alt="" srcset="">

          <div>
            <h2 style="text-decoration: underline;">ABOUT</h2>
            <p>
              SMAPES adalah sebuah solusi cerdas dalam memanfaatkan liimbah kertas, yaitu dengan cara mengumpulkan
              limbah-limbah kertas dari berbagai tempat seperti rumah tangga, kantor, sekolah, rumah sakit, mall, atau
              berbagai tempat lainnya. Sampah dikumpulkan di tiap <strong>SMAPES Corner</strong>, kemudian dipilah dan
              ditimbang oleh <strong>SMAPES Warrior</strong>. Beratnya limbah kertas akan menentukan banyaknya
              <strong>SMAPES Coins</strong> yang akan kamu dapatkan.
            </p>
          </div>
        </section>
        
        <section id="sect--smapes-corner" class="container">          
          <img src="images/about/smapes-corner.jpg" alt="" srcset="">

          <div>
            <h2>Apa Itu SMAPES Corner?</h2>
            <p>
              <strong>SMAPES Corner</strong> adalah tempat dimana limbah sampah dikumpulkan, dipilah, dan ditimbang.
              Limbah kertas juga dapat didaur ulang di <strong>SMAPES Corner</strong>. Selain itu juga ada etalase
              barang-barang yang sudah didaur ulang dari limbah kertas yang dikumpulkan yang dapat ditukarkan dan dibeli
              dengan menggunakan <strong>SMAPES Coins</strong>.
            </p>
          </div>
        </section>

        <section id="sect--smapes-coins" class="container">          
          <img src="images/about/smapes-coin.png" alt="" srcset="">

          <div>
            <h2>Apa Itu SMAPES Coins?</h2>
            <p>
              <strong>SMAPES Coins</strong> adalah koin digital yang didapatkan oleh <strong>SMAPES Buddy</strong>
              setiap menukarkan limbah kertas yang dapat didaur ulang dalam jumlah tertentu.
              <strong>SMAPES Coins</strong> dapat ditukar dan dibelanjakan di <strong>SMAPES Shop</strong>.
            </p>
            <p>
              Tiap <strong>500 gr</strong> limbah kertas yang layak didaur ulang dapat ditukarkan dengan
              <strong>50 SMAPS Coins</strong> dan berlaku kelipatannya.
            </p>
          </div>
        </section>

        <section id="sect--smapes-warrior" class="container">          
          <img src="images/about/smapes-warrior.jpg" alt="" srcset="">

          <div>
            <h2>Siapa Itu SMAPES Warrior?</h2>
            <p>
              <strong>SMAPES Warrior</strong> adalah sebutan untuk orang-orang yang membantu mengelola limbah kertas dan
              mendaur ulangnya di <strong>SMAPES Corner</strong>.
            </p>
          </div>
        </section>
        
        <section id="sect--smapes-buddy" class="container">          
          <img src="images/about/smapes-buddies.jpg" alt="" srcset="">

          <div>
            <h2>Siapa Itu SMAPES Buddy?</h2>
            <p>
              <strong>SMAPES Buddy</strong> adalah kamu! Ya, kamu! Kamu yang peduli dengan lingkunganmu serta mau
              mengolah limbah kertasmu dengan baik bersama kami. 😃
            </p>
          </div>
        </section>
        
        <section id="sect--why-smapes" class="container"> 
          <div>
            <h2>Kenapa SMAPES?</h2>
            <p>
              SMAPES dibuat sebagai wujud kepedulian kita bersama terhadap kebersihan lingkungan di sekitar kita. Limbah
              kertas merupakan salah satu limbah terbanyak selain limbah plastik dan limbah makanan. Limbah kertas
              merupakan limbah yang cukup mudah untuk didaur ulang apabila pengelolaannya tepat. Untuk itu, kami
              menawarkan solusi pintar agar semua orang dapat berkontribusi untuk mengurangi limbah kertas. Selain itu,
              harapan kami dengan mengurangi perputaran kertas yang ada. Banyak sedikitnya juga dapat mengurangi
              aktifitas penebangan hutan yang biasanya juga akan berdampak terhadap pencemaran udara. Jadi inilah
              pentingnya kita mengurangi limbah kertas.
            </p>
          </div>
        </section>
      </div>

      <?php include "partials/page-footer.php"; ?>
    </div>

    <button id="chatbot-button" class="success">
      <span class='icon material-symbols-outlined'>
        smart_toy
      </span>
    </button>

    <div class="chat-widget">
      <button id="chatToggleBtn" class="chat-toggle">💬</button>
      <div id="chatContainer" class="chat-container hidden">
        <div class="chat-header">
          <span>EcoBot 🤖</span>
          <button id="closeChat">✖</button>
        </div>
        <div id="chatBox" class="chat-box"></div>
        <div class="input-area">
          <input id="userInput" placeholder="Tulis pesan...">
          <button id="sendBtn">Kirim</button>
        </div>
      </div>
    </div>

    <script src="frontend.js"></script>

    <?php include "partials/chatbot.php"; ?>
  </body>
</html>
