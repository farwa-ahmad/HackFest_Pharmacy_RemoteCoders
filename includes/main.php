</head>
<body>
  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
            <?php
            if (!isset($_SESSION['customer_email'])) {
              echo "Welcome :Guest";
            } else {
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
            ?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <p class="icon-basket">
            <?php items(); ?> items
          </p>
          </a>
        </div>
        <ul class="login">
          <li class="login__item">
            <?php
            if (!isset($_SESSION['customer_email'])) {
              echo '<a href="customer_register.php" class="login__link">Register</a>';
            } else {
              echo '<a href="customer/my_account.php?my_orders" class="login__link">My Account</a>';
            }
            ?>
          </li>


          <li class="login__item">
            <?php
            if (!isset($_SESSION['customer_email'])) {
              echo '<a href="checkout.php" class="login__link">Sign In</a>';
            } else {
              echo '<a href="./logout.php" class="login__link">Logout</a>';
            }
            ?>

          </li>
        </ul>

      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">
        <div class="logo">
          <a class="logo__link" href="index.php">
            <img class="logo__img" src="images/logo.png" alt="LifeLine logotype" width="120" height="1">
          </a>
        </div>
        <nav class="main-nav">

          <ul class="categories">
            <li class="categories__item">
              <a class="categories__link" href="about.php">
                About
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="shop.php">
                Shop
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="contact.php">
                Contact Us
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="customer/my_account.php?my_orders">
              My Account <i class="fa fa-chevron-down"></i>
              </a>
              
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">My Orders</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Shopping Cart</a>
                      </li>
                      <!-- <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Delete Account</a>
                      </li> -->
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Edit Account</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Change Password</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>

            <li class="categories__item">
              <div class="wrap">
                <div class="search">
                  <input type="text" class="searchTerm" placeholder="Search">
                  <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>