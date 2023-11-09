<style>
  ._NoDropDownArrow::after {
    content: '' !important;
  }
</style>
<?php
//if isset $_SESSION["adminloggedin"] then dashboard btn appear

$filename = basename($_SERVER["SCRIPT_NAME"]);
$slashOrNot = ($filename == "index.php") ? "" : "../";
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
          echo "<li><a class=\"dropdown-item\" href=\"" . (($filename == "index.php") ? "" : "/") . "pages/shop-grid.php\">$CatName</a></li>";
        }
        ?>
      </ul>
    </div>
    <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">
      <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
        <a href="<?php echo $slashOrNot; ?>index.php"><img src="assets/images/freshcart-logo.svg"
            alt="eCommerce HTML Template"></a>
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
          href="<?php echo $slashOrNot; ?>#collapseExample" role="button" aria-expanded="false"
          aria-controls="collapseExample">
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
                echo "<li><a class=\"dropdown-item\" href=\"" . (($filename == "index.php") ? "" : "/") . "pages/shop-grid.php\">$CatName</a></li>";
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="d-none d-lg-block">
        <ul class="navbar-nav align-items-center ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle _NoDropDownArrow" href="<?php echo $slashOrNot; ?>index.php"
              role="button">
              Home
            </a>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle _NoDropDownArrow" href="<?php echo $slashOrNot; ?>pages/shop-grid.php"
              role="button">
              Shop
            </a>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle _NoDropDownArrow" href="<?php echo $slashOrNot; ?>pages/store-list.php"
              role="button"><!-- data-bs-toggle="dropdown" aria-expanded="false"-->
              Stores
            </a>
            <!-- <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/store-list.php">Store List</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/store-grid.php">Store Grid</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/store-single.php">Store Single</a></li>
            </ul> -->
          </li>
          <li class="nav-item dropdown dropdown-fullwidth">
            <a class="nav-link dropdown-toggle" href="<?php echo $slashOrNot; ?>#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Mega menu
            </a>
            <div class=" dropdown-menu pb-0">
              <div class="row p-2 p-lg-4">
                <?php
                $categories = DatabaseManager::select("categories", "C_id,C_name", "C_ParentCategory Is null");
                if (count($categories) <= 4) {
                  for ($i = 0; $i < 3; $i++) {
                    $value = $categories[$i];

                    $ParentCatId = $value["C_id"];
                    $catname = $value["C_name"];
                    echo "
                      <div class=\"col-lg-3 col-6 mb-4 mb-lg-0\">
                      <h6 class=\"text-primary ps-3\">$catname</h6>";

                    $subCategories = DatabaseManager::select("categories", "C_id,C_name", "C_ParentCategory=$ParentCatId ");
                    for ($j = 0; $j < 8; $j++) {
                      if (isset($subCategories[$j])) {

                        $InnerValue = $subCategories[$j];
                        $subCatName = $InnerValue["C_name"];
                        $subCatId = $InnerValue["C_id"];
                        echo '<a class="dropdown-item" href="' . $slashOrNot . 'pages/shop-grid.php">' . $subCatName . '</a>';

                      } else {
                        $subCatName = "subCat : $j";
                        $subCatId = "subId : $j";
                        echo '<a class="dropdown-item" href="' . $slashOrNot . 'pages/shop-grid.php">' . $subCatName . '</a>';


                      }
                    }
                    echo '</div>';
                  }
                } else {

                }
                ?>


                <!-- css issue  -->
                <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                  <div class="card border-0">
                    <img src="assets/images/menu-banner.jpg" alt="eCommerce HTML Template" class="img-fluid">
                    <div class="position-absolute ps-6 mt-8">
                      <h5 class=" mb-0 ">Dont miss this <br>offer today.</h5>
                      <a href="<?php echo $slashOrNot; ?>pages/shop-grid.php" class="btn btn-primary btn-sm mt-3">Shop
                        Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $slashOrNot; ?>#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Pages
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/blog.php">Blog</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/blog-single.php">Blog Single</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/blog-category.php">Blog Category</a>
              </li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/about.php">About us</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/404error.php">404 Error</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/contact.php">Contact</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $slashOrNot; ?>#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>


            <ul class="dropdown-menu">
              <?php
              if (!(isset($_SESSION["UserLogin"]))) {
                echo '<li><a class="dropdown-item" href="' . $slashOrNot . 'pages/signin.php">Sign in</a></li>';
                echo '<li><a class="dropdown-item" href="' . $slashOrNot . 'pages/signup.php">Signup</a></li>';
              }
              if(isset($_SESSION["UserLogin"])){
                echo '
                
                <li><a class="dropdown-item" href="'.$slashOrNot.'pages/account-settings.php?selectTab=Orders">Orders</a></li>
                <li><a class="dropdown-item" href="'.$slashOrNot.'pages/account-settings.php?selectTab=Notification">Notification</a></li>
                <li><a class="dropdown-item" href="'.$slashOrNot.'pages/account-settings.php?selectTab=Address">Address</a></li>
                <li><a class="dropdown-item" href="'.$slashOrNot.'pages/account-settings.php?selectTab=Payment">PaymentMethod</a></li>
                <li><a class="dropdown-item" href="'.$slashOrNot.'pages/account-settings.php?selectTab=Settings">Settings</a></li>
                <li><a class="dropdown-item text-danger" href="'.$slashOrNot.'pages/account-settings.php?LogOutUser=true">Logout</a></li>
                ';
              }
                ?>
            </ul>
 
          </li>
        
          <?php if (isset($_SESSION["UserLogin"]) && $_SESSION["UserLogin"]["Role"]=="Admin") { ?>

            <li class="nav-item ">
              <a class="nav-link" href="<?php echo $slashOrNot; ?>dashboard/index.php">
                Dashboard
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
      <div class="d-block d-lg-none h-100" data-simplebar="">
        <ul class="navbar-nav ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle _NoDropDownArrow" href="<?php echo $slashOrNot; ?>index.php"
              role="button">
              Home
            </a>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle _NoDropDownArrow" href="<?php echo $slashOrNot; ?>pages/shop-grid.php"
              role="button">
              Shop
            </a>
            <!-- <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/shop-grid.php">Shop Grid - Filter</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/shop-grid-3-column.php">Shop Grid - 3 column</a>
              </li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/shop-list.php">Shop List - Filter</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/shop-filter.php">Shop - Filter</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/shop-fullwidth.php">Shop Wide</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/shop-single.php">Shop Single</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/shop-single-2.php">Shop Single v2<span
                    class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/shop-wishlist.php">Shop Wishlist</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/shop-cart.php">Shop Cart</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/shop-checkout.php">Shop Checkout</a></li>
            </ul> -->
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle _NoDropDownArrow" href="<?php echo $slashOrNot; ?>pages/store-list.php"
              role="button">
              Stores
            </a>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $slashOrNot; ?>#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Mega Menu
            </a>



            <ul class="dropdown-menu">

              <?php
              $categories = DatabaseManager::select("categories", "C_id,C_name", "C_ParentCategory Is null");
              if (count($categories) <= 4) {
                for ($i = 0; $i < 3; $i++) {
                  $value = $categories[$i];

                  $ParentCatId = $value["C_id"];
                  $catname = $value["C_name"];
                  echo '
                  <li class="dropdown-submenu ">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="' . $slashOrNot . '#">
                    ' . $catname . '
                  </a>
                  <ul class="dropdown-menu">
                 ';

                  $subCategories = DatabaseManager::select("categories", "C_id,C_name", "C_ParentCategory=$ParentCatId ");
                  for ($j = 0; $j < 8; $j++) {
                    if (isset($subCategories[$j])) {

                      $InnerValue = $subCategories[$j];
                      $subCatName = $InnerValue["C_name"];
                      $subCatId = $InnerValue["C_id"];
                      echo ' <li><a class="dropdown-item" href="' . $slashOrNot . 'pages/shop-grid.php">' . $subCatName . '</a></li>';

                    } else {
                      $subCatName = "subCat : $j";
                      $subCatId = "subId : $j";
                      echo ' <li><a class="dropdown-item" href="' . $slashOrNot . 'pages/shop-grid.php">' . $subCatName . '</a></li>';
                    }
                  }
                  echo '</ul>';
                }
              } else {

              }
              ?>
            </ul>




          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $slashOrNot; ?>#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Pages
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/blog.php">Blog</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/blog-single.php">Blog Single</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/blog-category.php">Blog Category</a>
              </li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/about.php">About us</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/404error.php">404 Error</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/contact.php">Contact</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $slashOrNot; ?>#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>


            <ul class="dropdown-menu">
              <?php
              if (!(isset($_SESSION["UserLogin"]))) {
                echo '<li><a class="dropdown-item" href="' . $slashOrNot . 'pages/signin.php">Sign in</a></li>';
                echo '<li><a class="dropdown-item" href="' . $slashOrNot . 'pages/signup.php">Signup</a></li>';
              }
              ?>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/account-settings.php?selectTab=orders">Orders</a></li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/account-settings.php?selectTab=settings">Settings</a>
              </li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/account-settings.php?selectTab=address">Address</a>
              </li>
              <li><a class="dropdown-item" href="<?php echo $slashOrNot; ?>pages/account-settings?selectTab=payment">Payment
                  Method</a>
              </li>
              <li><a class="dropdown-item"
                  href="<?php echo $slashOrNot; ?>pages/account-settings.php?selectTab=notification">Notification</a></li>
            </ul>

          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo $slashOrNot; ?>dashboard/index.php">
              Dashboard
            </a>
          </li>
          
        </ul>
      </div>
    </div>
  </div>

</nav>