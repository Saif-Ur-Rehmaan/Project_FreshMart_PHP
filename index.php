<?php include "inc/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>FreshCart - eCommerce HTML Template</title>
    <link href="assets/libs/slick-carousel/slick/slick.css" rel="stylesheet" />
    <link href="assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet" />
    <link href="assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
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
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">


    <!-- Libs CSS -->
    <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
    <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">


</head>

<body>
    <!------------------------------------------------------------- nav start -------------------------------------------------------------->
    <div class="border-bottom ">
        <?php include "inc/nav/nav1-dealLanguage.php" ?>
        <?php include "inc/nav/nav2-logoSearchLocation.php" ?>
        <?php include "inc/nav/nav3-NavLinks.php" ?>
    </div>
    <!------------------------------------------------------------- nav end-------------------------------------------------- -->

    <!-------------------------------------------------------------Modals start-------------------------------------------------- -->
    <!-- Modal signup start -->
    <?php include "inc/modals/modalUserSignup.php" ?>
    <!-- Modal signup end -->

    <!-- Shop Cart start -->
    <?php include "inc/nav/ShoppingCart.php"; ?>
    <!-- Shop Cart end -->

    <!-- Modal location start-->
    <?php include "inc/modals/locationSelect.php"; ?>
    <!-- Modal location end-->

    <!-- Modal Quickview product start-->
    <?php include "inc/modals/QuickViewProduct.php"; ?>
    <!-- Modal Quickview product end-->
    <!-------------------------------------------------------------Modals end-------------------------------------------------- -->

    <!-------------------------------------------------------------- main start ------------------------------------------------ -->
    <main>
        <!-- slider -->
        <section class="mt-8">
            <div class="container">
                <div class="hero-slider ">
                    <div
                        style="background: url(assets/images/slide-1.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                        <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                            <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

                            <h2 class="text-dark display-5 fw-bold mt-4">SuperMarket For Fresh Grocery </h2>
                            <p class="lead">Introduced a new model for online grocery shopping
                                and convenient home delivery.</p>
                            <a href="#!" class="btn btn-dark mt-3">Shop Now <i
                                    class="feather-icon icon-arrow-right ms-1"></i></a>
                        </div>

                    </div>
                    <div class=" "
                        style="background: url(assets/images/slider-2.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                        <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                            <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                            <h2 class="text-dark display-5 fw-bold mt-4">Free Shipping on <br> orders over <span
                                    class="text-primary">$100</span></h2>
                            <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts
                                are applied.
                            </p>
                            <a href="#!" class="btn btn-dark mt-3">Shop Now <i
                                    class="feather-icon icon-arrow-right ms-1"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Category Section Start-->
        <section class="mb-lg-10 mt-lg-14 my-8">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-6">

                        <h3 class="mb-0">Featured Categories</h3>

                    </div>
                </div>
                <div class="category-slider ">
                    <?php
                    $res = DatabaseManager::query("SELECT DISTINCT
                                        (SELECT categories.C_name FROM categories WHERE categories.C_id=products._Category_id) as Cname,
                                            products.P_Images as Category1stProductimg
                                        , products._Category_id as cid FROM products WHERE products.P_IsFeatured=1  group BY products._Category_id");
                    while ($row = mysqli_fetch_assoc($res)) {
                        $cid = $row["cid"];
                        $ProductImg = $row["Category1stProductimg"];
                        $Cname = $row["Cname"];
                        ?>
                        <div class="item">
                            <a href="pages/shop-grid.php" class="text-decoration-none text-inherit">
                                <div class="card card-product mb-lg-4">
                                    <div class="card-body text-center py-8">
                                        <img src="assets/images/<?php echo $ProductImg; ?>" alt="<?php echo $Cname ?>"
                                            class="mb-3 img-fluid">
                                        <div class="text-truncate">
                                            <?php echo $Cname ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php } ?>







                </div>


            </div>
        </section>
        <!-- Category Section End-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-3 mb-lg-0">
                        <div>
                            <div class="py-10 px-8 rounded"
                                style="background:url(assets/images/grocery-banner.png)no-repeat; background-size: cover; background-position: center;">
                                <div>
                                    <h3 class="fw-bold mb-1">Fruits & Vegetables
                                    </h3>
                                    <p class="mb-4">Get Upto <span class="fw-bold">30%</span> Off</p>
                                    <a href="#!" class="btn btn-dark">Shop Now</a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-12 col-md-6 ">

                        <div>
                            <div class="py-10 px-8 rounded"
                                style="background:url(assets/images/grocery-banner-2.jpg)no-repeat; background-size: cover; background-position: center;">
                                <div>
                                    <h3 class="fw-bold mb-1">Freshly Baked
                                        Buns
                                    </h3>
                                    <p class="mb-4">Get Upto <span class="fw-bold">25%</span> Off</p>
                                    <a href="#!" class="btn btn-dark">Shop Now</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Popular Products Start-->
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-6">

                        <h3 class="mb-0">Popular Products</h3>

                    </div>
                </div>

                <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
                    <?php
                    $query = "SELECT
                  products.P_Id AS pid,
                  products.P_Title AS productname,
                  (SELECT categories.C_name FROM categories WHERE categories.C_id = products._Category_id) AS categoryname,
                  (SELECT SUM(reviews_products.Rev_Star) FROM reviews_products WHERE reviews_products._Product_id = products.P_Id) AS total_rating,
                  (SELECT COUNT(reviews_products.Rev_Id) FROM reviews_products WHERE reviews_products._Product_id = products.P_Id) AS total_reviews,
                  CASE
                      WHEN (SELECT COUNT(reviews_products.Rev_Id) FROM reviews_products WHERE reviews_products._Product_id = products.P_Id) > 0 THEN
                          ROUND((SELECT SUM(reviews_products.Rev_Star) FROM reviews_products WHERE reviews_products._Product_id = products.P_Id) /
                          (SELECT COUNT(reviews_products.Rev_Id) FROM reviews_products WHERE reviews_products._Product_id = products.P_Id) * 2) / 2
                      ELSE
                          0
                  END AS average_rating,
                  (SELECT COUNT(reviews_products.Rev_Id) FROM reviews_products WHERE reviews_products._Product_id = products.P_Id) as ReviewCount,
                  products.P_RegularPrice as Price,
                  products.P_SalePrice as SalePrice,
                  products.P_Images as pimg
              FROM products
               order by
                (SELECT COUNT(reviews_products.Rev_Id) FROM reviews_products WHERE reviews_products._Product_id = products.P_Id) desc;              
              ";
                    $res = mysqli_query($connection, $query);
                    $PopularProducts = [];

                    if ($res->num_rows > 10) {
                        for ($i = 0; $i < 10; $i++) {
                            $row = $row = mysqli_fetch_assoc($res);
                            $data = [
                                "ProductId" => $row["pid"],
                                "CategoryName" => $row["categoryname"],
                                "ProductName" => $row["productname"],
                                "ProductImg" => $row["pimg"],
                                "AverageRating" => $row["average_rating"],
                                "NumberOfReviews" => $row["ReviewCount"],
                                "RegularPrice" => $row["Price"],
                                "SalePrice" => $row["SalePrice"]
                            ];
                            array_push($PopularProducts, $data);
                        }
                    } else {
                        while ($row = mysqli_fetch_assoc($res)) {
                            $data = [
                                "ProductId" => $row["pid"],
                                "CategoryName" => $row["categoryname"],
                                "ProductName" => $row["productname"],
                                "ProductImg" => $row["pimg"],
                                "AverageRating" => $row["average_rating"],
                                "NumberOfReviews" => $row["ReviewCount"],
                                "RegularPrice" => $row["Price"],
                                "SalePrice" => $row["SalePrice"]
                            ];
                            array_push($PopularProducts, $data);

                        }

                    }

                    foreach ($PopularProducts as $key => $value) {
                        ?>
                        <div class="col">
                            <div class="card card-product" style="height:100%">
                                <div class="card-body" style="
    display: flex;
    flex-direction: column;
    justify-content: space-around;
">

                                    <div class="text-center position-relative ">
                                        <?php
                                        if ($value["SalePrice"] != 0) {
                                            echo '<div class=" position-absolute top-0 start-0">
                                              <span class="badge bg-danger">Sale</span>
                                          </div>';
                                        }
                                        $pid = $value["ProductId"];
                                        ?>

                                        <a href="#!"
                                            style="height:13.25rem;display: flex;justify-content: center;align-items: center; ">
                                            <img src="assets/images/<?php echo $value["ProductImg"] ?>"
                                                alt="<?php echo $value["ProductName"] ?>" class="mb-3 img-fluid"></a>

                                        <div class="card-product-action">
                                            <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal">
                                                <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                    title="Quick View"></i>
                                            </a>
                                            <a class="btn-action _WishlishBtn "
                                                data-custom-product-id="<?php echo $value["ProductId"]; ?>"
                                                data-bs-toggle="tooltip" data-bs-html="true"
                                                title="<?= (isset($_SESSION["Wishlist"]) && in_array($pid, $_SESSION["Wishlist"])) ? "Added" : "Wishlist"; ?>">

                                                <i
                                                    class="_WishlishHeartIcon <?= (isset($_SESSION["Wishlist"]) && in_array($pid, $_SESSION["Wishlist"])) ? "bi bi-heart-fill \" style=\" color:green;\"" : "bi bi-heart \" style=\"color:;\""; ?> "></i>
                                            </a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Compare">
                                                <i class="bi bi-arrow-left-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="text-small mb-1">
                                        <a href="#!" class="text-decoration-none text-muted"><small>
                                                <?php echo $value["CategoryName"] ?>
                                            </small></a>
                                    </div>
                                    <h2 class="fs-6"><a href="pages/shop-single.php"
                                            class="text-inherit text-decoration-none">
                                            <?php echo $value["ProductName"] ?>
                                        </a></h2>
                                    <div>

                                        <small class="text-warning">
                                            <?php
                                            // Assuming $value["NumberOfReviews"] contains the average rating value
                                            $averageRating = $value["AverageRating"];

                                            switch ($averageRating) {
                                                case 1:
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    break;
                                                case 1.5:
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-half"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    break;
                                                case 2:
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    break;
                                                case 2.5:
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-half"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    break;
                                                case 3:
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    break;
                                                case 3.5:
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-half"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    break;
                                                case 4:
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    break;
                                                case 4.5:
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-half"></i>';
                                                    break;
                                                case 5:
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    echo '<i class="bi bi-star-fill"></i>';
                                                    break;
                                                default:
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';
                                                    echo '<i class="bi bi-star"></i>';

                                                    break;
                                            }

                                            ?>
                                        </small>
                                        <span class="text-muted small">
                                            <?php echo number_format($value["AverageRating"], 1) ?>(
                                            <?php echo $value["NumberOfReviews"] ?>)
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-3">

                                        <div>
                                            <?php
                                            if ($value["SalePrice"] != 0) {
                                                echo '<span class="text-dark">$' . $value["SalePrice"] . '</span>
                                              <span class="text-decoration-line-through text-muted ">$' . $value["RegularPrice"] . '</span>';
                                            } else {
                                                echo '<span class="text-dark">$' . $value["RegularPrice"] . '</span>';

                                            }
                                            ?>

                                        </div>
                                        <div>
                                            <a href="#!" class="btn btn-primary btn-sm _AddToCartBtn"
                                                data-Product_id="<?php echo $value["ProductId"] ?>" data-custom-attr="<?= (isset($_SESSION["Cart"]) && in_array($value["ProductId"],$_SESSION["Cart"]))?"Added":"Add";?>">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="_addIcon" width="16"
                                                    height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus">
                                                    <?= (isset($_SESSION["Cart"]) && in_array($value["ProductId"],$_SESSION["Cart"]))?'
                                                    <polyline points="20 6 9 17 4 12"></polyline>':'
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>';?>
                                                </svg>

                                                <span class="_addtext">
                                                <?= (isset($_SESSION["Cart"]) &&in_array($value["ProductId"],$_SESSION["Cart"]))?"Added":"Add";?>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </section>
        <!-- Popular Products End-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-6">
                        <h3 class="mb-0">Daily Best Sells</h3>
                    </div>
                </div>
                <div class="table-responsive-xl pb-6">
                    <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
                        <div class="col">
                            <div class=" pt-8 px-6 px-xl-8 rounded"
                                style="background:url(assets/images/banner-deal.jpg)no-repeat; background-size: cover; height: 470px;">
                                <div>
                                    <h3 class="fw-bold text-white">100% Organic
                                        Coffee Beans.
                                    </h3>
                                    <p class="text-white">Get the best deal before close.</p>
                                    <a href="#!" class="btn btn-primary">Shop Now <i
                                            class="feather-icon icon-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        $pids = DatabaseManager::select("discounts LIMIT 3", "Product_Id,DATE_FORMAT(EndDate, '%Y/%m/%d %H:%i:%s') AS formatted_date");
                        foreach ($pids as $key => $value) {
                            $DPId = $value["Product_Id"];
                            $DealEndDate = $value["formatted_date"];
                            $Record = DatabaseManager::select("products", "
                                products.P_Images as PImg,
                                products.P_Title as PTitle,
                                products.P_SalePrice as salep,
                                products.P_RegularPrice as regprice,
                                (select categories.C_name FROM categories  WHERE categories.C_id=products._Category_Id)as catName,	
                                (CASE
                                    WHEN (SELECT COUNT(reviews_products.Rev_Id) FROM reviews_products WHERE reviews_products._Product_id = products.P_Id) > 0 
                                        THEN
                                        ROUND((SELECT SUM(reviews_products.Rev_Star) FROM reviews_products WHERE reviews_products._Product_id = products.P_Id) /
                                        (SELECT COUNT(reviews_products.Rev_Id) FROM reviews_products WHERE reviews_products._Product_id = products.P_Id) * 2) / 2
                                        ELSE
                                            0
                                END) AS average_rating
                                ", "products.P_Id=$DPId");

                            $PImg = $Record[0]["PImg"];
                            $PTitle = $Record[0]["PTitle"];
                            $salep = $Record[0]["salep"];
                            $regprice = $Record[0]["regprice"];
                            $catName = $Record[0]["catName"];
                            $average_rating = $Record[0]["average_rating"]; ?>


                            <div class="col">
                                <div class="card card-product">
                                    <div class="card-body">
                                        <div class="text-center  position-relative "> <a href="pages/shop-single.php"><img
                                                    src="assets/images/<?php echo $PImg ?>" alt="<?php echo $PTitle ?>"
                                                    class="mb-3 img-fluid"></a>

                                            <div class="card-product-action">
                                                <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                    data-bs-target="#quickViewModal">
                                                    <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true"
                                                        title="Quick View"></i>
                                                </a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                    title="Wishlist">
                                                    <i class="bi bi-heart"></i>
                                                </a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                    title="Compare">
                                                    <i class="bi bi-arrow-left-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="text-small mb-1">
                                            <a href="#!" class="text-decoration-none text-muted">
                                                <small>
                                                    <?php echo $catName ?>a
                                                </small>
                                            </a>
                                        </div>
                                        <h2 class="fs-6">
                                            <a href="pages/shop-single.php" class="text-inherit text-decoration-none">
                                                <?php echo $PTitle ?>
                                            </a>
                                        </h2>

                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div><span class="text-dark">$
                                                    <?php echo $salep //will be calculated by taking fix percent e.g 20% of actual price  ?>
                                                </span> <span class="text-decoration-line-through text-muted">$
                                                    <?php echo $regprice ?>
                                                </span>
                                            </div>
                                            <div>
                                                <small class="text-warning">
                                                    <?php
                                                    // Assuming $value["NumberOfReviews"] contains the average rating value
                                                    $averageRating = $average_rating;

                                                    switch ($averageRating) {
                                                        case 1:
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            break;
                                                        case 1.5:
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-half"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            break;
                                                        case 2:
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            break;
                                                        case 2.5:
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-half"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            break;
                                                        case 3:
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            break;
                                                        case 3.5:
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-half"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            break;
                                                        case 4:
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            break;
                                                        case 4.5:
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-half"></i>';
                                                            break;
                                                        case 5:
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            echo '<i class="bi bi-star-fill"></i>';
                                                            break;
                                                        default:
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            echo '<i class="bi bi-star"></i>';
                                                            break;
                                                    }

                                                    ?>
                                                </small>
                                                <span><small>
                                                        <?php echo $average_rating ?>
                                                    </small></span>
                                            </div>
                                        </div>
                                        <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg> Add to cart </a></div>
                                        <div class="d-flex justify-content-start text-center mt-3">
                                            <div class="deals-countdown w-100" data-countdown="<?php echo $DealEndDate ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        <?php }
                        ?>

                    </div>
                </div>
            </div>
        </section>
        <section class="my-lg-14 my-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="assets/images/clock.svg" alt=""></div>
                            <h3 class="h5 mb-3">
                                10 minute grocery now
                            </h3>
                            <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores
                                near you.</p>
                        </div>
                    </div>
                    <div class="col-md-6  col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="assets/images/gift.svg" alt=""></div>
                            <h3 class="h5 mb-3">Best Prices & Offers</h3>
                            <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best
                                pricess &
                                offers.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="assets/images/package.svg" alt=""></div>
                            <h3 class="h5 mb-3">Wide Assortment</h3>
                            <p>Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg
                                & other
                                categories.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-8 mb-xl-0">
                            <div class="mb-6"><img src="assets/images/refresh-cw.svg" alt=""></div>
                            <h3 class="h5 mb-3">Easy Returns</h3>
                            <p>Not satisfied with a product? Return it at the doorstep & get a refund within hours. No
                                questions asked
                                <a href="#!">policy</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--------------------------------------------------------------- main end -------------------------------------------------- -->





    <!-- footer start -->
    <?php include "inc/footer.php"; ?>
    <!-- footer end -->

    <!---------------------------------- Javascript------------------------------------------------>
    <!-- Libs JS start-->
    <?php include "inc/LibsJs.php" ?>
    <!-- Libs JS end-->
    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>
    <script src="assets/libs/jquery-countdown/dist/jquery.countdown.min.js"></script>
    <script src="assets/js/vendors/countdown.js"></script>
    <script src="assets/libs/slick-carousel/slick/slick.min.js"></script>
    <script src="assets/js/vendors/slick-slider.js"></script>
    <script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="assets/js/vendors/tns-slider.js"></script>
    <script src="assets/js/vendors/zoom.js"></script>
    <script src="assets/js/vendors/increment-value.js"></script>

    <!---------------------------------- Javascript------------------------------------------------>
    <script>
        //add and remove product from cart
        $(document).ready(() => {
            let AddtocartBtns = document.getElementsByClassName("_AddToCartBtn");
            let AddtocartPlusIcon = document.getElementsByClassName("_addIcon");
            let AddtocartText = document.getElementsByClassName("_addtext");
            let cartProductCounter=document.getElementsByClassName("_CountCartItem");
            for (let i = 0; i < AddtocartBtns.length; i++) {
                const ADBTN = AddtocartBtns[i];


                ADBTN.addEventListener("click", (e) => {
                    let clickedbtn=AddtocartBtns[i];
                    let productId = clickedbtn.getAttribute("data-Product_id");
                    let IsAdded = clickedbtn.getAttribute("data-custom-attr"); 
                    if (IsAdded=="Add") {
                        $.ajax({
                            url: 'inc/worker.php',
                            method: 'POST',
                            data: {
                                AddToCartProduct: productId
                            },
                            success: (responce) => {
                                let res = JSON.parse(responce) 
                                clickedbtn.setAttribute("data-custom-attr","Added")
                                
                                AddtocartText[i].innerText = "Added";
                                
                                AddtocartPlusIcon[i].innerHTML='<polyline points="20 6 9 17 4 12"></polyline>';//ok icon
                                for (let ac = 0; ac < cartProductCounter.length; ac++) {
                                    const a = cartProductCounter[ac];
                                    a.innerHTML=res.TotalCartItems;
                                }
                            },
                            error: (error) => {
                                console.error(error);
                            }
                        })
                    }else{
                        $.ajax({
                            url: 'inc/worker.php',
                            method: 'POST',
                            data: {
                                RemoveFromCartProduct: productId
                            },
                            success: (responce) => {
                                let res = JSON.parse(responce) ;
                                AddtocartText[i].innerText = "Add";
                                clickedbtn.setAttribute("data-custom-attr","Add")
                                AddtocartPlusIcon[i].innerHTML=' <line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line>';//ok icon
                                for (let ac = 0; ac < cartProductCounter.length; ac++) {
                                    const a = cartProductCounter[ac];
                                    a.innerHTML=res.TotalCartItems;
                                }
                            
                            },
                            error: (error) => {
                                console.error(error);
                            }
                        }) 
                    }

                })
            }
        })
    </script>



    <script>
        // wishlist add and remove
        let wishBtns = document.getElementsByClassName("_WishlishBtn");
        let wishicons = document.getElementsByClassName("_WishlishHeartIcon");
        let CountWishlist = document.getElementById("CountWishlist");
        for (let i = 0; i < wishBtns.length; i++) {
            const Wbtn = wishBtns[i];
            Wbtn.addEventListener("click", (e) => {
                let clickedbtn = wishBtns[i];
                let icon = wishicons[i];
                let product = clickedbtn.getAttribute("data-custom-product-id")
                let AddedOrNot = clickedbtn.getAttribute("data-bs-original-title");

                if (AddedOrNot == 'Wishlist') {

                    $.ajax({
                        url: 'inc/worker.php',
                        method: 'POST',
                        data: {
                            AddToWishlist: product
                        },
                        success: (responce) => {
                            let res = JSON.parse(responce);
                            //changing icon
                            icon.classList = "bi bi-heart-fill _WishlishHeartIcon";
                            icon.style.color = "green";
                            //changing class and tooltip

                            clickedbtn.setAttribute("data-bs-original-title", "Added");

                            CountWishlist.innerText = res.TotalItems


                        },
                        error: (error) => {
                            console.error(error);
                        }
                    })
                } else if (AddedOrNot == "Added") {
                    $.ajax({
                        url: 'inc/worker.php',
                        method: 'POST',
                        data: {
                            RemoveFromWishlist: product
                        },
                        success: (responce) => {
                            let res = JSON.parse(responce);
                            //changing icon
                            icon.classList = "bi bi-heart _WishlishHeartIcon";
                            icon.style.color = " ";
                            //changing class and tooltip

                            clickedbtn.setAttribute("data-bs-original-title", "Wishlist");

                            CountWishlist.innerText = res.TotalItems

                        },
                        error: (error) => {
                            console.error(error);
                        }
                    })

                } else {
                    console.log("added or not attr is : " + AddedOrNot);
                }

            })
        }
    </script>
</body>



</html>