<style>
  ._NoDropDownArrow::after{
    content:'' !important;
  }
</style>
<?php 
//if isset $_SESSION["adminloggedin"] then dashboard btn appear

$filename=basename($_SERVER["SCRIPT_NAME"]);
$slashOrNot=($filename=="index.php")?"":"../";
?>
<nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 py-lg-4">
  <div class="container px-0 px-md-3">
    <div class="dropdown me-3 d-none d-lg-block">
      <button class="btn btn-primary px-6 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
        aria-expanded="false">
        <span class="me-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-grid">
            <rect x="3" y="3" width="7" height="7"></rect>
            <rect x="14" y="3" width="7" height="7"></rect>
            <rect x="14" y="14" width="7" height="7"></rect>
            <rect x="3" y="14" width="7" height="7"></rect>
          </svg></span> All Departments
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <?php
        $data = DatabaseManager::select("categories", "C_name");
        for ($i = 0; $i < count($data); $i++) {
          $CatName = $data[$i]["C_name"];
          echo "<li><a class=\"dropdown-item\" href=\"".(($filename=="index.php")?"":"/")."pages/shop-grid.php\">$CatName</a></li>";
        }
        ?>
      </ul>
    </div>
    <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">
      <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
        <a href="<?php echo $slashOrNot ;?>index.php"><img src="assets/images/freshcart-logo.svg" alt="eCommerce HTML Template"></a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="d-block d-lg-none my-4">
        <form action="#">
          <div class="input-group ">
            <input class="form-control rounded" type="search" placeholder="Search for products">
            <span class="input-group-append">
              <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-search">
                  <circle cx="11" cy="11" r="8"></circle>
                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
              </button>
            </span>
          </div>
        </form>
        <div class="mt-2">
          <button type="button" class="btn  btn-outline-gray-400 text-muted w-100 " data-bs-toggle="modal"
            data-bs-target="#locationModal">
            <i class="feather-icon icon-map-pin me-2"></i>Pick Location
          </button>
        </div>
      </div>
      <div class="d-block d-lg-none mb-4">
        <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center" data-bs-toggle="collapse"
          href="<?php echo $slashOrNot ;?>#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7"></rect>
              <rect x="14" y="3" width="7" height="7"></rect>
              <rect x="14" y="14" width="7" height="7"></rect>
              <rect x="3" y="14" width="7" height="7"></rect>
            </svg></span> All Departments
        </a>
        <div class="collapse mt-2" id="collapseExample">
          <div class="card card-body">
            <ul class="mb-0 list-unstyled">
              <?php
              $data = DatabaseManager::select("categories", "C_name");
              for ($i = 0; $i < count($data); $i++) {
                $CatName = $data[$i]["C_name"];
                echo "<li><a class=\"dropdown-item\" href=\"".(($filename=="index.php")?"":"/")."pages/shop-grid.php\">$CatName</a></li>";
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="d-none d-lg-block">
        <ul class="navbar-nav align-items-center ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle _NoDropDownArrow" href="<?php echo $slashOrNot ;?>index.php" role="button"  >
              Home
            </a>
             
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle _NoDropDownArrow" href="<?php echo $slashOrNot ;?>pages/shop-grid.php" role="button"  >
              Shop
            </a>
            
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle _NoDropDownArrow" href="<?php echo $slashOrNot ;?>pages/store-list.php" role="button" ><!-- data-bs-toggle="dropdown" aria-expanded="false"-->
              Stores
            </a>
            <!-- <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/store-list.php">Store List</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/store-grid.php">Store Grid</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/store-single.php">Store Single</a></li>
            </ul> -->
          </li>
          <li class="nav-item dropdown dropdown-fullwidth">
            <a class="nav-link dropdown-toggle" href="<?php echo $slashOrNot ;?>#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mega menu
            </a>
            <div class=" dropdown-menu pb-0">
              <div class="row p-2 p-lg-4">
                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                  <h6 class="text-primary ps-3">Dairy, Bread & Eggs</h6>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Butter</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Milk Drinks</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Curd & Yogurt</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Eggs</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Buns & Bakery</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Cheese</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Condensed Milk</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Dairy Products</a>
                </div>
                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                  <h6 class="text-primary ps-3">Breakfast & Instant Food</h6>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Breakfast Cereal</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php"> Noodles, Pasta & Soup</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Frozen Veg Snacks</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php"> Frozen Non-Veg Snacks</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php"> Vermicelli</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php"> Instant Mixes</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php"> Batter</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php"> Fruit and Juices</a>
                </div>
                <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                  <h6 class="text-primary ps-3">Cold Drinks & Juices</h6>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Soft Drinks</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Fruit Juices</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Coldpress</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Water & Ice Cubes</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Soda & Mixers</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Health Drinks</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Herbal Drinks</a>
                  <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Milk Drinks</a>
                </div>
                <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                  <div class="card border-0">
                    <img src="assets/images/menu-banner.jpg" alt="eCommerce HTML Template" class="img-fluid">
                    <div class="position-absolute ps-6 mt-8">
                      <h5 class=" mb-0 ">Dont miss this <br>offer today.</h5>
                      <a href="<?php echo $slashOrNot ;?>pages/shop-grid.php" class="btn btn-primary btn-sm mt-3">Shop Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $slashOrNot ;?>#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pages
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/blog.php">Blog</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/blog-single.php">Blog Single</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/blog-category.php">Blog Category</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/about.php">About us</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/404error.php">404 Error</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/contact.php">Contact</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $slashOrNot ;?>#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/signin.php">Sign in</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/signup.php">Signup</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/forgot-password.php">Forgot Password</a></li>
              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="<?php echo $slashOrNot ;?>#">
                  My Account
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/account-orders.php">Orders</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/account-settings.php">Settings</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/account-address.php">Address</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/account-payment-method.php">Payment Method</a>
                  </li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/account-notification.php">Notification</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <?php if(isset($_SESSION["adminloggedin"])){ ?>

            <li class="nav-item ">
              <a class="nav-link" href="<?php echo $slashOrNot ;?>dashboard/index.php">
                Dashboard
              </a>
            </li>
            <?php } ?>
          <li class="nav-item dropdown dropdown-flyout">
            <a class="nav-link" href="<?php echo $slashOrNot ;?>#" id="navbarDropdownDocs" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Docs
            </a>
            <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs">
              <a class="dropdown-item align-items-start" href="<?php echo $slashOrNot ;?>docs/index.php">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-file-text text-primary" viewBox="0 0 16 16">
                    <path
                      d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                    <path
                      d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                  </svg>
                </div>
                <div class="ms-3 lh-1">
                  <h6 class="mb-1">Documentations</h6>
                  <p class="mb-0 small">
                    Browse the all documentation
                  </p>
                </div>
              </a>
              <a class="dropdown-item align-items-start" href="<?php echo $slashOrNot ;?>docs/changelog.php">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-layers text-primary" viewBox="0 0 16 16">
                    <path
                      d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                  </svg>
                </div>
                <div class="ms-3 lh-1">
                  <h6 class="mb-1">
                    Changelog <span class="text-primary ms-1">v1.1.0</span>
                  </h6>
                  <p class="mb-0 small">See what's new</p>
                </div>
              </a>
            </div>
          </li>
        </ul>
      </div>
      <div class="d-block d-lg-none h-100" data-simplebar="">
        <ul class="navbar-nav ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle _NoDropDownArrow" href="<?php echo $slashOrNot ;?>index.php" role="button"  >
              Home
            </a>
     
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle _NoDropDownArrow" href="<?php echo $slashOrNot ;?>pages/shop-grid.php" role="button"  >
              Shop
            </a>
            <!-- <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Shop Grid - Filter</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid-3-column.php">Shop Grid - 3 column</a>
              </li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-list.php">Shop List - Filter</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-filter.php">Shop - Filter</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-fullwidth.php">Shop Wide</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-single.php">Shop Single</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-single-2.php">Shop Single v2<span
                    class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-wishlist.php">Shop Wishlist</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-cart.php">Shop Cart</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-checkout.php">Shop Checkout</a></li>
            </ul> -->
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle _NoDropDownArrow" href="<?php echo $slashOrNot ;?>pages/store-list.php" role="button"  >
              Stores
            </a>
           
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $slashOrNot ;?>#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Mega Menu
            </a>
            <ul class="dropdown-menu">
              <li class="dropdown-submenu ">
                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="<?php echo $slashOrNot ;?>#">
                  Dairy, Bread & Eggs
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Milk Drinks</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Curd & Yogurt</a></li>
                  <li> <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Eggs</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Buns & Bakery</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Cheese</a></li>
                  <li> <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Condensed Milk</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Dairy Products</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu ">
                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="<?php echo $slashOrNot ;?>#">
                  Vegetables & Fruits
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Vegetables</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Fruits</a></li>
                  <li> <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Exotics & Premium</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Fresh Sprouts</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Frozen Veg</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu ">
                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="<?php echo $slashOrNot ;?>#">
                  Cold Drinks & Juices
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Soft Drinks</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Fruit Juices</a></li>
                  <li> <a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Coldpress</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Soda & Mixers</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Milk Drinks</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Health Drinks</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/shop-grid.php">Herbal Drinks</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $slashOrNot ;?>#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pages
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/blog.php">Blog</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/blog-single.php">Blog Single</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/blog-category.php">Blog Category</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/about.php">About us</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/404error.php">404 Error</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/contact.php">Contact</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $slashOrNot ;?>#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/signin.php">Sign in</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/signup.php">Signup</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/forgot-password.php">Forgot Password</a></li>
              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="<?php echo $slashOrNot ;?>#">
                  My Account
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/account-orders.php">Orders</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/account-settings.php">Settings</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/account-address.php">Address</a></li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/account-payment-method.php">Payment Method</a>
                  </li>
                  <li><a class="dropdown-item" href="<?php echo $slashOrNot ;?>pages/account-notification.php">Notification</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo $slashOrNot ;?>dashboard/index.php">
              Dashboard
            </a>
          </li>
          <li class="nav-item dropdown dropdown-flyout">
            <a class="nav-link" href="<?php echo $slashOrNot ;?>#" id="navbarDropdownDocs2" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Docs
            </a>
            <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs2">
              <a class="dropdown-item align-items-start" href="<?php echo $slashOrNot ;?>docs/index.php">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-file-text text-primary" viewBox="0 0 16 16">
                    <path
                      d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                    <path
                      d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                  </svg>
                </div>
                <div class="ms-3 lh-1">
                  <h6 class="mb-1">Documentations</h6>
                  <p class="mb-0 small">
                    Browse the all documentation
                  </p>
                </div>
              </a>
              <a class="dropdown-item align-items-start" href="<?php echo $slashOrNot ;?>docs/changelog.php">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-layers text-primary" viewBox="0 0 16 16">
                    <path
                      d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                  </svg>
                </div>
                <div class="ms-3 lh-1">
                  <h6 class="mb-1">
                    Changelog <span class="text-primary ms-1">v1.1.0</span>
                  </h6>
                  <p class="mb-0 small">See what's new</p>
                </div>
              </a>
            </div>

          </li>
        </ul>
      </div>
    </div>
  </div>

</nav>