<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/dashboard/vendor-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:11 GMT -->
<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta content="Codescandy" name="author">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M8S4MT3EYG');
</script>

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico">


<!-- Libs CSS -->
<link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="../assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
<link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">


<!-- Theme CSS -->
<link rel="stylesheet" href="../assets/css/theme.min.css">


  <title>Dashboard</title>
</head>

<body>


    <!-- main wrapper -->
    <?php include 'includes/nav.php'?>
    <div class="main-wrapper">
      <!-- navbar vertical -->
      
            <nav class="navbar-vertical-nav d-none d-xl-block ">
                <div class="navbar-vertical">
                                <div class="px-4 py-5">
                                    <a href="../index.php" class="navbar-brand">
                                        <img src="../assets/images/logo/freshcart-logo.svg" alt="">
                                    </a>
                                </div>
                                <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
                                    <ul class="navbar-nav flex-column" id="sideNavbar">

                                        <li class="nav-item ">
                                            <a class="nav-link " href="index.php" >
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-house"></i></span>
                                                    <span class="nav-link-text">Dashboard</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item mt-6 mb-3">
                                            <span class="nav-label">Store Managements</span></li>
                                        <li class="nav-item ">
                                            <a class="nav-link "  href="products.php">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-cart"></i></span>
                                                    <span class="nav-link-text">Products</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="categories.php">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-list-task"></i></span>
                                                    <span class="nav-link-text">Categories</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link   collapsed " href="#"
                                                data-bs-toggle="collapse" data-bs-target="#navCategoriesOrders" aria-expanded="false"
                                                aria-controls="navCategoriesOrders">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-bag"></i></span>
                                                    <span class="nav-link-text">Orders</span>
                                                </div>
                                            </a>
                                            <div id="navCategoriesOrders" class="collapse "
                                                data-bs-parent="#sideNavbar">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item ">
                                                        <a class="nav-link "
                                                            href="order-list.php">
                                                            List
                                                        </a>
                                                    </li>
                                                    <!-- Nav item -->
                                                    <li class="nav-item ">
                                                        <a class="nav-link "
                                                            href="order-single.php">
                                                            Single

                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item ">
                                            <a class="nav-link  active " href="vendor-grid.php">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-shop"></i></span>
                                                    <span class="nav-link-text">Sellers / Vendors</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="customers.php">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-people"></i></span>
                                                    <span class="nav-link-text">Customers</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="reviews.php">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-star"></i></span>
                                                    <span class="nav-link-text">Reviews</span>
                                                </div>
                                            </a>
                                        </li>
                                         <!-- Nav item -->
 <li class="nav-item">
    <a class="nav-link  collapsed " href="#"
        data-bs-toggle="collapse" data-bs-target="#navMenuLevelFirst" aria-expanded="false"
        aria-controls="navMenuLevelFirst">
        <span class="nav-link-icon"><i class=" bi bi-arrow-90deg-down"></i></span>
        <span class="nav-link-text">Menu Level</span>
    </a>
    <div id="navMenuLevelFirst" class="collapse "
        data-bs-parent="#sideNavbar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link " href="#"
                    data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond1" aria-expanded="false"
                    aria-controls="navMenuLevelSecond1">
                    Two Level
                </a>
                <div id="navMenuLevelSecond1" class="collapse" data-bs-parent="#navMenuLevel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link "
                                href="#">NavItem 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "
                                href="#">NavItem 2</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link  collapsed  " href="#"
                    data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeOne1" aria-expanded="false"
                    aria-controls="navMenuLevelThreeOne1">
                    Three Level
                </a>
                <div id="navMenuLevelThreeOne1"
                    class="collapse "
                    data-bs-parent="#navMenuLevel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link  collapsed "
                                href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeTwo"
                                aria-expanded="false" aria-controls="navMenuLevelThreeTwo">
                                NavItem 1
                            </a>
                            <div id="navMenuLevelThreeTwo"
                                class="collapse collapse "
                                data-bs-parent="#navMenuLevelThree">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link "
                                            href="#">
                                            NavChild Item 1
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Nav
                                Item 2</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</li>

                                        <li class="nav-item mt-6 mb-3">
                                            <span class="nav-label">Site Settings</span> <span class="badge bg-light-info text-dark-info">Coming Soon</span></li>
                                        <li class="nav-item ">
                                            <a class="nav-link disabled" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-newspaper"></i></span>
                                                    <span class="nav-link-text">Blog</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link disabled" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-images"></i></span>
                                                    <span class="nav-link-text">Media</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link disabled" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-gear"></i></span>
                                                    <span class="nav-link-text">Store Settings</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item mt-6 mb-3">
                                            <span class="nav-label">Support</span> <span class="badge bg-light-info text-dark-info">Coming Soon</span></li>
                                        <li class="nav-item ">
                                            <a class="nav-link disabled" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-headphones"></i></span>
                                                    <span class="nav-link-text">Support Ticket</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link disabled" href="#">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-question-circle"></i></span>
                                                    <span class="nav-link-text">Help Center</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link disabled" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-infinity"></i></span>
                                                    <span class="nav-link-text">How FreshCart Works</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item mt-6 mb-3">
                                            <span class="nav-label">Our Apps</span></li>
                                        <li class="nav-item ">
                                            <a class="nav-link disabled" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-apple"></i></span>
                                                    <span class="nav-link-text">Apple Store</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link disabled" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-google-play"></i></span>
                                                    <span class="nav-link-text">Google Play Store</span>
                                                </div>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            </nav>

                            <nav class="navbar-vertical-nav offcanvas offcanvas-start navbar-offcanvac" tabindex="-1" id="offcanvasExample" >
                                <div class="navbar-vertical">
                                                <div class="px-4 py-5 d-flex justify-content-between align-items-center">
                                                    <a href="../index.php" class="navbar-brand">
                                                        <img src="../assets/images/logo/freshcart-logo.svg" alt="">
                                                    </a>
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
                                                    <ul class="navbar-nav flex-column">
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="index.php" >
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-house"></i></span>
                                                                    <span>Dashboard</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mt-6 mb-3">
                                                            <span class="nav-label">Store Managements</span></li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link "  href="products.php">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-cart"></i></span>
                                                                    <span class="nav-link-text">Products</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="categories.php">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-list-task"></i></span>
                                                                    <span class="nav-link-text">Categories</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link   collapsed " href="#"
                                                                data-bs-toggle="collapse" data-bs-target="#navOrders" aria-expanded="false"
                                                                aria-controls="navOrders">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-bag"></i></span>
                                                                    <span class="nav-link-text">Orders</span>
                                                                </div>
                                                            </a>
                                                            <div id="navOrders" class="collapse "
                                                                data-bs-parent="#sideNavbar">
                                                                <ul class="nav flex-column">
                                                                    <li class="nav-item ">
                                                                        <a class="nav-link "
                                                                            href="order-list.php">
                                                                            List
                                                                        </a>
                                                                    </li>
                                                                    <!-- Nav item -->
                                                                    <li class="nav-item ">
                                                                        <a class="nav-link "
                                                                            href="order-single.php">
                                                                            Single

                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link  active " href="vendor-grid.php">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-shop"></i></span>
                                                                    <span class="nav-link-text">Sellers / Vendors</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="customers.php">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-people"></i></span>
                                                                    <span class="nav-link-text">Customers</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="reviews.php">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-star"></i></span>
                                                                    <span class="nav-link-text">Reviews</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mt-6 mb-3">
                                                            <span class="nav-label">Site Settings</span> <span class="badge bg-light-info text-dark-info">Coming Soon</span></li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link disabled" href="#!">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-newspaper"></i></span>
                                                                    <span class="nav-link-text">Blog</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link disabled" href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-images"></i></span>
                                                                    <span class="nav-link-text">Media</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link disabled" href="#!">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-gear"></i></span>
                                                                    <span class="nav-link-text">Store Settings</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mt-6 mb-3">
                                                            <span class="nav-label">Support</span> <span class="badge bg-light-info text-dark-info">Coming Soon</span></li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link disabled" href="#!">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-headphones"></i></span>
                                                                    <span class="nav-link-text">Support Ticket</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link disabled" href="#">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-question-circle"></i></span>
                                                                    <span class="nav-link-text">Help Center</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link disabled" href="#!">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-infinity"></i></span>
                                                                    <span class="nav-link-text">How FreshCart Works</span>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        <li class="nav-item mt-6 mb-3">
                                                            <span class="nav-label">Our Apps</span></li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link disabled" href="#!">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-apple"></i></span>
                                                                    <span class="nav-link-text">Apple Store</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link disabled" href="#!">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-google-play"></i></span>
                                                                    <span class="nav-link-text">Google Play Store</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li id="navMenuLevel" class="collapse "
                                                        data-bs-parent="#sideNavbar">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="#"
                                                                    data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond2" aria-expanded="false"
                                                                    aria-controls="navMenuLevelSecond2">
                                                                    Two Level
                                                                </a>
                                                                <div id="navMenuLevelSecond2" class="collapse" data-bs-parent="#navMenuLevel">
                                                                    <ul class="nav flex-column">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link "
                                                                                href="#">NavItem 1</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link "
                                                                                href="#">NavItem 2</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link  collapsed  " href="#"
                                                                    data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree2" aria-expanded="false"
                                                                    aria-controls="navMenuLevelThree2">
                                                                    Three Level
                                                                </a>
                                                                <div id="navMenuLevelThree2"
                                                                    class="collapse "
                                                                    data-bs-parent="#navMenuLevel">
                                                                    <ul class="nav flex-column">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link  collapsed "
                                                                                href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree3"
                                                                                aria-expanded="false" aria-controls="navMenuLevelThree3">
                                                                                NavItem 1
                                                                            </a>
                                                                            <div id="navMenuLevelThree3"
                                                                                class="collapse collapse "
                                                                                data-bs-parent="#navMenuLevelThree">
                                                                                <ul class="nav flex-column">
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link "
                                                                                            href="#">
                                                                                            NavChild Item 1
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link " href="#">Nav
                                                                                Item 2</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>


                                                    </ul>
                                                </div>
                                            </div>

                                            </nav>
    

      <!-- main -->
      <main class="main-content-wrapper">
        <div class="container">
          <div class="row mb-8">
            <div class="col-md-12">
              <!-- pageheader -->
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h2>Vendors</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Vendors</li>
                    </ol>
                  </nav>
                </div>
                <div>
                  <!-- button -->
                  <a href="vendor-grid.php" class="btn btn-primary btn-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                      class="bi bi-grid" viewBox="0 0 16 16">
                      <path
                        d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                    </svg>
                  </a>
                  <a href="vendor-list.php" class="btn btn-light  btn-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                      class="bi bi-list-task" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z" />
                      <path
                        d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z" />
                      <path fill-rule="evenodd"
                        d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z" />
                    </svg>
                  </a>
                </div>

              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 g-lg-6">
            <!-- col -->
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img -->
                    <img src="../assets/images/stores-logo/stores-logo-1.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">
                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">E-Grocery Super Market</a></h2>
                    <div class="mb-2">Seller ID: #009</div>
                    <div>heathercarpenter@dayrep.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$200.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$200.00</h5>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-2.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">DealShare Mart</a></h2>
                    <div class="mb-2">Seller ID: #008</div>
                    <div>werve1962@superrito.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$350.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$150.00</h5>
                    </div>



                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-3.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">DMart</a></h2>
                    <div class="mb-2">Seller ID: #007</div>
                    <div>trablinever@armyspy.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$120.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$45.00</h5>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-4.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">Blinkit Store</a></h2>
                    <div class="mb-2">Seller ID: #006</div>
                    <div>steened@rhyta.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$1200.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$400.00</h5>
                    </div>



                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-5.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">StoreFront Super Market</a></h2>
                    <div class="mb-2">Seller ID: #005</div>
                    <div>mansper@einrot.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$230.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$50.00</h5>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-6.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">BigBasket</a></h2>
                    <div class="mb-2">Seller ID: #004</div>
                    <div>lizin@armyspy.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$560.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$120.00</h5>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-7.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">Swiggy Instamart</a></h2>
                    <div class="mb-2">Seller ID: #003</div>
                    <div>tured@jourrapide.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$780.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$360.00</h5>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-8.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">Online Grocery Mart</a></h2>
                    <div class="mb-2">Seller ID: #002</div>
                    <div>liturname@einrot.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$460.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$175.00</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-9.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">
                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">Spencers</a></h2>
                    <div class="mb-2">Seller ID: #001</div>
                    <div>fark1952@rhyta.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$630.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$190.00</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
    </main>

  </div>


  <!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>

</body>


<!-- Mirrored from freshcart.codescandy.com/dashboard/vendor-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:12 GMT -->
</html>