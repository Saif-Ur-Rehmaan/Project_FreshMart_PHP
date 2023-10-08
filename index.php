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
                                        ?>
                                      
                                          <a href="#!" style="height:13.25rem;display: flex;
    justify-content: center;
    align-items: center; "> 
                                            <img src="assets/images/<?php echo $value["ProductImg"] ?>"  alt="<?php echo $value["ProductName"] ?>" class="mb-3 img-fluid"></a>
  
                                          <div class="card-product-action">
                                              <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                  data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                      data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                  title="Wishlist"><i class="bi bi-heart"></i></a>
                                              <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                  title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                          </div>
  
                                      </div>
                                      <div class="text-small mb-1">
                                        <a href="#!" class="text-decoration-none text-muted"><small><?php echo $value["CategoryName"] ?></small></a>
                                      </div>
                                      <h2 class="fs-6"><a href="pages/shop-single.php"
                                              class="text-inherit text-decoration-none"><?php echo $value["ProductName"] ?></a></h2>
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
                                                  // Handle other cases or display a default icon
                                                  break;
                                              }

                                              ?>
                                          </small>
                                           <span class="text-muted small"><?php echo number_format($value["AverageRating"], 1) ?>(<?php echo $value["NumberOfReviews"] ?>)</span>
                                      </div>
                                      <div class="d-flex justify-content-between align-items-center mt-3">

                                          <div>
                                            <?php
                                            if($value["SalePrice"]!=0){
                                              echo  '<span class="text-dark">$'.$value["SalePrice"].'</span>
                                              <span class="text-decoration-line-through text-muted ">$'.$value["RegularPrice"].'</span>';
                                            }else{
                                                      echo  '<span class="text-dark">$'.$value["RegularPrice"].'</span>';
                                                      
                                            }
                                            ?>
                                           
                                          </div>
                                          <div>
                                            <a href="#!" class="btn btn-primary btn-sm _AddToCartBtn" data-Product_id="<?php echo $value["ProductId"]?>" >
                                                  <svg xmlns="http://www.w3.org/2000/svg" onclick="this.parentNode.click()" width="16" height="16"
                                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                      stroke-linecap="round" stroke-linejoin="round"
                                                      class="feather feather-plus">
                                                      <line x1="12" y1="5" x2="12" y2="19"></line>
                                                      <line x1="5" y1="12" x2="19" y2="12"></line>
                                                  </svg> Add
                                            </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      
                  <?php } ?>
                    <!-- <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative">
                                    <div class=" position-absolute top-0 start-0">
                                        <span class="badge bg-success">14%</span>
                                    </div>
                                    <a href="pages/shop-single.php"><img src="assets/images/product-img-2.jpg"
                                            alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>

                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Bakery &
                                            Biscuits</small></a></div>
                                <h2 class="fs-6"><a href="pages/shop-single.php"
                                        class="text-inherit text-decoration-none">NutriChoice
                                        Digestive </a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5
                                        (25)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$24</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="pages/shop-single.php"><img
                                            src="assets/images/product-img-3.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Bakery &
                                            Biscuits</small></a></div>
                                <h2 class="fs-6"><a href="pages/shop-single.php"
                                        class="text-inherit text-decoration-none">Cadbury 5
                                        Star Chocolate</a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i></small> <span class="text-muted small">5
                                        (469)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$32</span> <span
                                            class="text-decoration-line-through text-muted">$35</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="pages/shop-single.php"><img
                                            src="assets/images/product-img-4.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                    <div class=" position-absolute top-0 start-0">
                                        <span class="badge bg-danger">Hot</span>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Snack &
                                            Munchies</small></a></div>
                                <h2 class="fs-6"><a href="pages/shop-single.php"
                                        class="text-inherit text-decoration-none">Onion
                                        Flavour Potato</a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <i class="bi bi-star"></i></small> <span class="text-muted small">3.5
                                        (456)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$3</span> <span
                                            class="text-decoration-line-through text-muted">$5</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="pages/shop-single.php"><img
                                            src="assets/images/product-img-5.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Instant
                                            Food</small></a></div>
                                <h2 class="fs-6"><a href="pages/shop-single.php"
                                        class="text-inherit text-decoration-none">Salted
                                        Instant Popcorn </a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5
                                        (39)</span>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <div><span class="text-dark">$13</span> <span
                                            class="text-decoration-line-through text-muted">$18</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">

                                <div class="text-center position-relative ">
                                    <div class=" position-absolute top-0 start-0">
                                        <span class="badge bg-danger">Sale</span>
                                    </div>
                                    <a href="#!"> <img src="assets/images/product-img-6.jpg"
                                            alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Dairy, Bread &
                                            Eggs</small></a></div>
                                <h2 class="fs-6"><a href="pages/shop-single.php"
                                        class="text-inherit text-decoration-none">Blueberry
                                        Greek Yogurt</a></h2>
                                <div>

                                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5
                                        (189)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$18</span> <span
                                            class="text-decoration-line-through text-muted">$24</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="pages/shop-single.php"><img
                                            src="assets/images/product-img-7.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Dairy, Bread &
                                            Eggs</small></a></div>
                                <h2 class="fs-6"><a href="pages/shop-single.php"
                                        class="text-inherit text-decoration-none">Britannia
                                        Cheese Slices</a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i></small> <span class="text-muted small">5
                                        (345)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$24</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="pages/shop-single.php"><img
                                            src="assets/images/product-img-8.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Instant
                                            Food</small></a></div>
                                <h2 class="fs-6"><a href="pages/shop-single.php"
                                        class="text-inherit text-decoration-none">Kellogg's
                                        Original Cereals</a>
                                </h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span class="text-muted small">4
                                        (90)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$32</span> <span
                                            class="text-decoration-line-through text-muted">$35</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="pages/shop-single.php"><img
                                            src="assets/images/product-img-9.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Snack &
                                            Munchies</small></a></div>
                                <h2 class="fs-6"><a href="pages/shop-single.php"
                                        class="text-inherit text-decoration-none">Slurrp
                                        Millet Chocolate </a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5
                                        (67)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">$3</span> <span
                                            class="text-decoration-line-through text-muted">$5</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <div class="text-center position-relative"> <a href="pages/shop-single.php"><img
                                            src="assets/images/product-img-10.jpg" alt="Grocery Ecommerce Template"
                                            class="mb-3 img-fluid"></a>
                                    <div class="card-product-action">
                                        <a href="#!" class="btn-action" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                        <a href="shop-wishlist.php" class="btn-action" data-bs-toggle="tooltip"
                                            data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                            title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                    </div>
                                </div>
                                <div class="text-small mb-1"><a href="#!"
                                        class="text-decoration-none text-muted"><small>Dairy, Bread &
                                            Eggs</small></a></div>
                                <h2 class="fs-6"><a href="pages/shop-single.php"
                                        class="text-inherit text-decoration-none">Amul
                                        Butter - 500 g</a></h2>
                                <div class="text-warning">

                                    <small> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <i class="bi bi-star"></i></small> <span class="text-muted small">3.5
                                        (89)</span>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <div><span class="text-dark">$13</span> <span
                                            class="text-decoration-line-through text-muted">$18</span>
                                    </div>
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg> Add</a></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center  position-relative "> <a href="pages/shop-single.php"><img
                                                src="assets/images/product-img-11.jpg" alt="Grocery Ecommerce Template"
                                                class="mb-3 img-fluid"></a>

                                        <div class="card-product-action">
                                            <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                    data-bs-toggle="tooltip" data-bs-html="true"
                                                    title="Quick View"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Wishlist"><i class="bi bi-heart"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-small mb-1"><a href="#!"
                                            class="text-decoration-none text-muted"><small>Tea, Coffee &
                                                Drinks</small></a></div>
                                    <h2 class="fs-6"><a href="pages/shop-single.php"
                                            class="text-inherit text-decoration-none">Roast
                                            Ground Coffee</a></h2>

                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div><span class="text-dark">$13</span> <span
                                                class="text-decoration-line-through text-muted">$18</span>
                                        </div>
                                        <div>
                                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </small>
                                            <span><small>4.5</small></span>
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
                                        <div class="deals-countdown w-100" data-countdown="2028/10/10 00:00:00"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center  position-relative "> <a href="pages/shop-single.php"><img
                                                src="assets/images/product-img-12.jpg" alt="Grocery Ecommerce Template"
                                                class="mb-3 img-fluid"></a>
                                        <div class="card-product-action">
                                            <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                    data-bs-toggle="tooltip" data-bs-html="true"
                                                    title="Quick View"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Wishlist"><i class="bi bi-heart"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-small mb-1"><a href="#!"
                                            class="text-decoration-none text-muted"><small>Fruits &
                                                Vegetables</small></a></div>
                                    <h2 class="fs-6"><a href="pages/shop-single.php"
                                            class="text-inherit text-decoration-none">Crushed
                                            Tomatoes</a></h2>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div><span class="text-dark">$13</span> <span
                                                class="text-decoration-line-through text-muted">$18</span>
                                        </div>
                                        <div>
                                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </small>
                                            <span><small>4.5</small></span>
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
                                    <div class="d-flex justify-content-start text-center mt-3 w-100">
                                        <div class="deals-countdown w-100" data-countdown="2028/12/9 00:00:00"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-product">
                                <div class="card-body">
                                    <div class="text-center  position-relative "> <a href="pages/shop-single.php"><img
                                                src="assets/images/product-img-13.jpg" alt="Grocery Ecommerce Template"
                                                class="mb-3 img-fluid"></a>
                                        <div class="card-product-action">
                                            <a href="#!" class="btn-action" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                                    data-bs-toggle="tooltip" data-bs-html="true"
                                                    title="Quick View"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Wishlist"><i class="bi bi-heart"></i></a>
                                            <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                                title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-small mb-1"><a href="#!"
                                            class="text-decoration-none text-muted"><small>Fruits &
                                                Vegetables</small></a></div>
                                    <h2 class="fs-6"><a href="pages/shop-single.php"
                                            class="text-inherit text-decoration-none">Golden
                                            Pineapple</a></h2>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div><span class="text-dark">$13</span> <span
                                                class="text-decoration-line-through text-muted">$18</span>
                                        </div>
                                        <div>
                                            <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i></small>
                                            <span><small>4.5</small></span>
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
                                        <div class="deals-countdown w-100" data-countdown="2028/11/11 00:00:00"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
  $(document).ready(()=>{
    $("._AddToCartBtn").on("click",(e)=>{
      let productId= e.target.getAttribute("data-Product_id");
      console.log(productId);
      //$.ajax()//use ajax for addtocart . similar for quickview ,location etc modals
    })
  })
</script>

</body>


<!-- Mirrored from freshcart.codescandy.com/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:03 GMT -->

</html>