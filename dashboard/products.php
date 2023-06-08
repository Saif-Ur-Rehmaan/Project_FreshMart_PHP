<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/dashboard/products.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:08 GMT -->

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


    <title>Dashboard</title>
</head>

<body>
    <!-- main wrapper-->

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
            <div class="container">
                <div class="row mb-8">
                    <div class="col-md-12">
                        <!-- page header -->
                        <div class="d-md-flex justify-content-between align-items-center">
                            <div>
                                <h2>Products</h2>
                                <!-- breacrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                                    </ol>
                                </nav>
                            </div>
                            <!-- button -->
                            <div>
                                <a href="add-product.php" class="btn btn-primary">Add Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row ">
                    <div class="col-xl-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lg">
                            <div class="px-6 py-6 ">
                                <div class="row justify-content-between">
                                    <!-- form -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-2 mb-lg-0">
                                        <form class="d-flex" role="search">
                                            <input class="form-control" type="search" placeholder="Search Products" aria-label="Search">
                                        </form>
                                    </div>
                                    <!-- select option -->
                                    <div class="col-lg-2 col-md-4 col-12">
                                        <select class="form-select">
                                            <option selected>Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Deactive</option>
                                            <option value="3">Draft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body p-0">
                                <!-- table -->
                                <div class="table-responsive">
                                    <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                                        <label class="form-check-label" for="checkAll">

                                                        </label>
                                                    </div>
                                                </th>
                                                <th>Image</th>
                                                <th>Proudct Name</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Price</th>
                                                <th>Create at</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'includes/config.php';

                                            $responce = mysqli_query($connection, "SELECT `P_Id`,`P_Images`,`P_Title`,`Date`,`P_Status`,`P_RegularPrice` FROM `products`");
                                            while ($row = mysqli_fetch_assoc($responce)) {
                                                // echo "<pre>";
                                                // print_r($row);
                                                // echo "</pre>";
                                                // used explode() to get only 1st image

                                            ?>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="productOne">
                                                            <label class="form-check-label" for="productOne">

                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#!"> <img src="../assets/images/products/<?php echo (explode(" , ",$row["P_Images"])[0]) ?>" alt="" class="icon-shape icon-md"></a>
                                                    </td>
                                                    <td><a href="#" class="text-reset"><?php echo $row["P_Title"] ?></a></td>
                                                    <td>Snack & Munchies</td>

                                                    <td>
                                                        <?php
                                                        if ($row["P_Status"] == 1) {
                                                            echo '<span class="badge bg-light-primary text-dark-primary">Active</span>';
                                                        } else {
                                                            echo '<span class="badge bg-light-danger text-dark-danger">Deactive</span>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>$<?php echo $row["P_RegularPrice"] ?></td>
                                                    <td>
                                                        <?php
                                                        echo date("j M Y", strtotime($row["Date"]));
                                                        ?></td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="PhpWorkstation.php?DeleteProductOfId=<?php echo $row["P_Id"]; ?>"><i class="bi bi-trash me-3"></i>Delete</a></li>
                                                                <li><a class="dropdown-item" href="add-product.php?EditProductOfId=<?php echo $row["P_Id"]; ?>"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>



                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class=" border-top d-md-flex justify-content-between align-items-center px-6 py-6">
                                <span>Showing 1 to 8 of 12 entries</span>
                                <nav class="mt-2 mt-md-0">
                                    <ul class="pagination mb-0 ">
                                        <li class="page-item disabled"><a class="page-link " href="#!">Previous</a></li>
                                        <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                    </ul>
                                </nav>
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


<!-- Mirrored from freshcart.codescandy.com/dashboard/products.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:08 GMT -->

</html>