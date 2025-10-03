      <div id='page-header'>
        <nav style='display: inline-flex; user-select: none; white-space: nowrap;'>
          <button id="hamburger-button" class="page-header-button" style="display: flex;" onclick="collapseExpandMainSidebar();" onmouseenter="CommonLib.showTooltip(event, 'Menu');">
            <span class="icon material-symbols-outlined" style="display: flex; align-items: center; user-select: none;" onclick="event.preventDefault();">
              menu
            </span>
          </button>

          <label class='page-header-button' id='hamburger-menu-button'>
            <input style='display: none;' type='checkbox'/>
            <span class='material-symbols-outlined'>
              menu
            </span>
          </label>

          <span id="page-header-page-title" class="page-header-item" onmouseenter="CommonLib.showTooltip(event, 'Smart Paper Waste');">
            <span class="text">
              SMAPES
            </span>
          </span>

          <?php
            $pages = ["", "about.php", "drop-it.php", "catalogue.php"];
            $uri = $_SERVER['REQUEST_URI'];
            $selectedSidebarButton = [];

            foreach ($pages as $page) {
              $selectedSidebarButton[] = $uri === "$indexPage/$page" ? " selected" : "";
            }
          ?>

          <a href="." class="page-header-item<?= $selectedSidebarButton[0] ? " page--active" : " " ?>" onmouseenter="CommonLib.showTooltip(event, 'Home');">
            <span class="text">
              Home
            </span>
          </a>

          <a href="./about.php" class="page-header-item<?= $selectedSidebarButton[1] ? " page--active" : " " ?>" onmouseenter="CommonLib.showTooltip(event, 'About');">
            <span class="text">
              About
            </span>
          </a>

          <a href="./drop-it.php" class="page-header-item<?= $selectedSidebarButton[2] ? " page--active" : " " ?>" onmouseenter="CommonLib.showTooltip(event, 'Drop Your Papers');">
            <span class="text">
              Drop It!
            </span>
          </a>

          <a href="./catalogue.php" class="page-header-item<?= $selectedSidebarButton[3] ? " page--active" : " " ?>" onmouseenter="CommonLib.showTooltip(event, 'Shop');">
            <span class="text">
              Shop
            </span>
          </a>

          <div class='menu' style="display: none;">
            <!-- <button class='page-header-button' id='cyanproz-button'><a expr:href='data:blog.homepageUrl' style='text-decoration: none;'></a></button> -->
            <!-- <div style="user-select: none; display: inline; padding: 12px;">CyanProz's Blog</div> -->
            <button id='skip-navigation-button' tabindex='0'>Skip Navigation</button>
            <!-- <div style="display: inline; padding: 10px;"></div> -->
            <div class='page-header-dropdown'>
              <button class='page-header-button page-header-dropdown-button'>
                <span>Home</span>
                <!-- <div class="page-header-dropdown-menu">
                  <a class="page-header-dropdown-item" tabindex="0" href="Downloads">Apps & Downloads</a>
                  <*!__ <hr class="Separator"> __*>
                  <a class="page-header-dropdown-item" tabindex="0" href="CSharp.html">About</a>
                </div> -->
                <div class='page-header-dropdown-menu'>
                  <ul>
                    <li class='page-header-dropdown-item'><a href='?indexpage=blog' tabindex='0'>Blog</a></li>
                    <li class='page-header-dropdown-item'><a href='/p/products.html' tabindex='0'>Products</a></li>
                    <li class='page-header-dropdown-item'><a href='CSharp_Documentation/' tabindex='0'>About</a></li>
                  </ul>
                </div>
              </button>
            </div>
            <div class='page-header-dropdown'>
              <button class='page-header-button page-header-dropdown-button'>
                <span>Coding</span>
                <div class='page-header-dropdown-menu'>
                  <ul>
                    <li class='page-header-dropdown-item'><a href='CSharp_Documentation/' tabindex='0'>C#</a></li>
                    <li class='page-header-dropdown-item'><a href='Products/Idk.txt' tabindex='0'>Web Development</a></li>
                    <li class='page-header-dropdown-item'><a href='' tabindex='0'>Assembly</a></li>
                    <li class='page-header-dropdown-item'><a href='' tabindex='0'>Hello</a></li>
                  </ul>
                </div>
              </button>
            </div>
            <div class='page-header-dropdown'>
              <button class='page-header-button page-header-dropdown-button'>
                <span>Tools</span>
                <div class='page-header-dropdown-menu'>
                  <ul>
                    <li class='page-header-dropdown-item'><a href='?page=website_lab' tabindex='0'>Website Lab</a></li>
                  </ul>
                </div>
              </button>
            </div>
            <div class='page-header-dropdown'>
              <button class='page-header-button page-header-dropdown-button'>
                <span>Games</span>
                <div class='page-header-dropdown-menu'>
                  <ul>
                    <li class='page-header-dropdown-item'><a>brhfiofdjiof</a></li>
                  </ul>
                </div>
              </button>
            </div>
          </div>
        </nav>

        <nav style='display: inline-flex; user-select: none; white-space: nowrap;'>
          <a href="./login.php" class="page-header-item" onmouseenter="CommonLib.showTooltip(event, 'Login');">
            <span class="text">
              Login
            </span>
          </a>

          <!-- <div style="display: inline-grid; position: relative; ">
            <input id="Header_Search_Box" type="text" placeholder="Search">
          </div> -->
          <!-- <button class='page-header-button dropdown-button under-construction-button' title='This blog is currently under construction. It may take a while to complete. Press Shift+R or Ctrl+Shift+F5 to see changes based on styles &amp; scripts for this site'><span>&#9888;&#65039; Under Construction &#9888;&#65039;</span></button> -->
        </nav>
      </div>