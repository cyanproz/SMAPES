<!DOCTYPE html>
<html lang="en" class="theme--light">
  <head>
    <?php include "partials/html-head.php"; ?>
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
        <form id="login-form" action="" method="POST">
          <h1>Login</h1>

          <div id="login-error-message"></div>
          
          <div class="input-box">
            <span class="input-box-icon">
              <i class="bx bxs-user"></i>
            </span>
            <input type="text" tabindex="1" name="username" placeholder="Username" required="">
          </div>
          
          <div class="input-box">
            <button type="button" tabindex="3" title="Tampilkan Password" id="show-password-button" class="info input-box-icon">
              <i class="bx bxs-lock-alt"></i>
            </button>
            <input type="password" tabindex="2" name="password" id="password-input" placeholder="Password" required="">
            <!-- <label id="show-password-label">
              <input type="checkbox" name="" id="show-password-checkbox">
              Tampilkan password
            </label> -->
          </div>
          
          <button type="submit" tabindex="4" id="submit-button" class="info">Login</button>
        </form>
      </div>

      <?php include "partials/page-footer.php"; ?>
    </div>
  </body>
</html>
