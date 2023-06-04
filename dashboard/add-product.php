<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/dashboard/add-product.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:27 GMT -->

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

        function gtag() {
            dataLayer.push(arguments);
        }
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


    <link href="../assets/libs/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <title>Dashboard</title>
</head>

<body>
    <!-- main wrapper -->

    <?php include 'includes/nav.php' ?>
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
                            <a class="nav-link " href="index.php">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon"> <i class="bi bi-house"></i></span>
                                    <span class="nav-link-text">Dashboard</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mt-6 mb-3">
                            <span class="nav-label">Store Managements</span>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link  active " href="products.php">
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
                            <a class="nav-link   collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navCategoriesOrders" aria-expanded="false" aria-controls="navCategoriesOrders">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon"> <i class="bi bi-bag"></i></span>
                                    <span class="nav-link-text">Orders</span>
                                </div>
                            </a>
                            <div id="navCategoriesOrders" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="order-list.php">
                                            List
                                        </a>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item ">
                                        <a class="nav-link " href="order-single.php">
                                            Single

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link " href="vendor-grid.php">
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
                            <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelFirst" aria-expanded="false" aria-controls="navMenuLevelFirst">
                                <span class="nav-link-icon"><i class=" bi bi-arrow-90deg-down"></i></span>
                                <span class="nav-link-text">Menu Level</span>
                            </a>
                            <div id="navMenuLevelFirst" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond1" aria-expanded="false" aria-controls="navMenuLevelSecond1">
                                            Two Level
                                        </a>
                                        <div id="navMenuLevelSecond1" class="collapse" data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#">NavItem 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#">NavItem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed  " href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeOne1" aria-expanded="false" aria-controls="navMenuLevelThreeOne1">
                                            Three Level
                                        </a>
                                        <div id="navMenuLevelThreeOne1" class="collapse " data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeTwo" aria-expanded="false" aria-controls="navMenuLevelThreeTwo">
                                                        NavItem 1
                                                    </a>
                                                    <div id="navMenuLevelThreeTwo" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="#">
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
                            <span class="nav-label">Site Settings</span> <span class="badge bg-light-info text-dark-info">Coming Soon</span>
                        </li>
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
                            <span class="nav-label">Support</span> <span class="badge bg-light-info text-dark-info">Coming Soon</span>
                        </li>
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
                            <span class="nav-label">Our Apps</span>
                        </li>
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

        <nav class="navbar-vertical-nav offcanvas offcanvas-start navbar-offcanvac" tabindex="-1" id="offcanvasExample">
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
                            <a class="nav-link " href="index.php">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon"> <i class="bi bi-house"></i></span>
                                    <span>Dashboard</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mt-6 mb-3">
                            <span class="nav-label">Store Managements</span>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link  active " href="products.php">
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
                            <a class="nav-link   collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navOrders" aria-expanded="false" aria-controls="navOrders">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon"> <i class="bi bi-bag"></i></span>
                                    <span class="nav-link-text">Orders</span>
                                </div>
                            </a>
                            <div id="navOrders" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item ">
                                        <a class="nav-link " href="order-list.php">
                                            List
                                        </a>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item ">
                                        <a class="nav-link " href="order-single.php">
                                            Single

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="vendor-grid.php">
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
                            <span class="nav-label">Site Settings</span> <span class="badge bg-light-info text-dark-info">Coming Soon</span>
                        </li>
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
                            <span class="nav-label">Support</span> <span class="badge bg-light-info text-dark-info">Coming Soon</span>
                        </li>
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
                            <span class="nav-label">Our Apps</span>
                        </li>
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
                        <li id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond2" aria-expanded="false" aria-controls="navMenuLevelSecond2">
                                        Two Level
                                    </a>
                                    <div id="navMenuLevelSecond2" class="collapse" data-bs-parent="#navMenuLevel">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link " href="#">NavItem 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="#">NavItem 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  collapsed  " href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree2" aria-expanded="false" aria-controls="navMenuLevelThree2">
                                        Three Level
                                    </a>
                                    <div id="navMenuLevelThree2" class="collapse " data-bs-parent="#navMenuLevel">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree3" aria-expanded="false" aria-controls="navMenuLevelThree3">
                                                    NavItem 1
                                                </a>
                                                <div id="navMenuLevelThree3" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="#">
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
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row mb-8">
                    <div class="col-md-12">
                        <div class="d-md-flex justify-content-between align-items-center">
                            <!-- page header -->
                            <div>
                                <h2>Add New Product</h2>
                                <!-- breacrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="text-inherit">Products</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                                    </ol>
                                </nav>
                            </div>
                            <!-- button -->
                            <div>
                                <a href="products.php" class="btn btn-light">Back to Product</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- row -->
                <form action="PhpWorkstation.php"  method="post" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <!-- card -->
                            <div class="card mb-6 card-lg">
                                <!-- card body -->
                                <div class="card-body p-6 ">
                                    <h4 class="mb-4 h5">Product Information</h4>
                                    <div class="row">
                                        <!-- input -->
                                        <div class="mb-3 col-lg-6">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" name="P_Title" placeholder="Product Name" required>
                                        </div>
                                        <!-- input catagori -->
                                        <div class="mb-3 col-lg-6">
                                            <label class="form-label">Product Category</label>
                                            <select name="_Catagori" class="form-select">
                                                <option selected>Product Category</option>
                                                <!-- value my Catagori id aai gi jo forien key h  -->
                                                <option value="2">DryFruit & Bakery</option>
                                                
                                                    <!-- php loop chly ga or categori ki table sy catagories aain gi -->
                                            </select>
                                        </div>
                                        <!-- input -->
                                        <div class="mb-3 col-lg-6">
                                            <label for="P_Weight" class="form-label">Weight</label>
                                            <input type="text" id="P_Weight" name="P_Weight" class="form-control" placeholder="Weight" required>
                                        </div>
                                        <!-- input -->
                                        <div class="mb-3 col-lg-6">
                                            <label for="P_Units" class="form-label">Units</label>
                                            <select name="P_Units" class="form-select">
                                                <option selected>Select Units</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                            </select>
                                        </div>
                                        <div>
                                            <div class="mb-3 col-lg-12 mt-5">
                                                <!-- heading -->
                                                <h4 class="mb-3 h5">Product Images</h4>

                                                <!-- input -->
                                                <div action="#" style="min-height: 20vh; cursor: pointer;" id="dropbox" class="d-flex justify-content-center border-dashed rounded-2 ">
                                                
                                                <div class="fallback d-flex align-items-center" >
                                                        <input name="file[]" type="file" id="choosefile" multiple>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- input -->
                                        <div class="mb-3 col-lg-12 mt-5">
                                            <h4 class="mb-3 h5">Product Descriptions</h4>
                                            <textarea class="py-8" style="width: inherit;" name="P_Description" id="editor"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-12">
                            <!-- card -->
                            <div class="card mb-6 card-lg">
                                <!-- card body -->
                                <div class="card-body p-6">
                                    <!-- input -->
                                    <div class="form-check form-switch mb-4">
                                        <input name="P_InStock" class="form-check-input" type="checkbox" role="switch" id="flexSwitchStock" checked>
                                        <label class="form-check-label" for="flexSwitchStock">In Stock</label>
                                    </div>
                                    <!-- input -->
                                    <div>
                                        <div class="mb-3">
                                            <label class="form-label" for="P_Code" >Product Code</label>
                                            <input type="text" name="P_Code" class="form-control" placeholder="Enter Product Title">
                                        </div>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Product SKU</label>
                                            <input type="text" name="P_SKU" class="form-control" placeholder="Enter Product Title">
                                        </div>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label" id="productSKU">Status</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="P_Status" id="inlineRadio1" value="1" checked>
                                                <label class="form-check-label" for="inlineRadio1">Active</label>
                                            </div>
                                            <!-- input -->
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="P_Status" id="inlineRadio2" value="0">
                                                <label class="form-check-label" for="inlineRadio2">Disabled</label>
                                            </div>
                                            <!-- input -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card mb-6 card-lg">
                                <!-- card body -->
                                <div class="card-body p-6">
                                    <h4 class="mb-4 h5">Product Price</h4>
                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Regular Price</label>
                                        <input type="text" name="P_RegularPrice" class="form-control" placeholder="$0.00">
                                    </div>
                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Sale Price</label>
                                        <input type="text" class="form-control" name="P_SalePrice" placeholder="$0.00">
                                    </div>

                                </div>
                            </div>
                            <!-- card -->
                            <div class="card mb-6 card-lg">
                                <!-- card body -->
                                <div class="card-body p-6">
                                    <h4 class="mb-4 h5">Meta Data</h4>
                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" name="P_MetaTitle" class="form-control" placeholder="Title">
                                    </div>

                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description</label>
                                        <textarea name="P_MetaDescription" class="form-control" rows="3" placeholder="Meta Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- button -->
                            <div class="d-grid">
                                
                                <input type="submit" class="btn btn-primary" value="Create Product" name="Add_Product">

                            </div>
                        </div>

                    </div>
                </form>

<div>
        </main>

    </div>


    <!-- Libs JS -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script src="../assets/js/vendors/editor.js"></script>
    <script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>

</body>


<!-- Mirrored from freshcart.codescandy.com/dashboard/add-product.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:27 GMT -->

</html>




