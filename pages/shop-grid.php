<?php include "../inc/config.php"; ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/pages/shop-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:08 GMT -->

<head>

  <title>FreshCart - eCommerce HTML Template</title>
  <link href="../assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
  <link href="../assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta content="Codescandy" name="author">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-M8S4MT3EYG');
  </script>

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico">


  <!-- Libs CSS -->
  <link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
  <link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">


  <!-- Theme CSS -->
  <link rel="stylesheet" href="../assets/css/theme.min.css">


</head>

<body>

  <!------------------------------------------------------------- nav start -------------------------------------------------------------->
  <div class="border-bottom ">
    <?php include "../inc/nav/nav1-dealLanguage.php" ?>
    <?php include "../inc/nav/nav2-logoSearchLocation.php" ?>
    <?php include "../inc/nav/nav3-NavLinks.php" ?>
  </div>
  <!------------------------------------------------------------- nav end-------------------------------------------------- -->

  <!-------------------------------------------------------------Modals start-------------------------------------------------- -->
  <!-- Modal signup start -->
  <?php include "../inc/modals/modalUserSignup.php" ?>
  <!-- Modal signup end -->

  <!-- Shop Cart start -->
  <?php include "../inc/nav/ShoppingCart.php"; ?>
  <!-- Shop Cart end -->

  <!-- Modal location start-->
  <?php include "../inc/modals/locationSelect.php"; ?>
  <!-- Modal location end-->

  <!-- Modal Quickview product start-->
  <?php include "../inc/modals/QuickViewProduct.php"; ?>
  <!-- Modal Quickview product end-->
  <!-------------------------------------------------------------Modals end-------------------------------------------------- -->

  <main>
    <!-- section-->
    <div class="mt-4">

      <div class="container">
        <!-- row -->
        <div class="row ">
          <!-- col -->
          <div class="col-12">
            <!-- breadcrumb -->
            <nav aria-label="breadcrumb">

              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">Home</a></li>
                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Snacks & Munchies</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- section -->
    <div class=" mt-8 mb-lg-14 mb-8">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row gx-10">
          <!-- col -->
          <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
            <div class="offcanvas offcanvas-start offcanvas-collapse w-md-50 " tabindex="-1" id="offcanvasCategory"
              aria-labelledby="offcanvasCategoryLabel">
              <!-- mobile view -->
              <div class="offcanvas-header d-lg-none">
                <h5 class="offcanvas-title" id="offcanvasCategoryLabel">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <!-- mobile view end-->
              <div class="offcanvas-body ps-lg-2 pt-lg-0">
                <div class="mb-8">
                  <!-- title -->
                  <h5 class="mb-3">Categories</h5>
                  <!-- nav -->
                  <ul class="nav nav-category" id="categoryCollapseMenu">
                    <?php
                    $categories = DatabaseManager::select("categories", "C_id as Parentid,C_name");
                    $data = [];
                    foreach ($categories as $value) {
                      $parentCatName = $value["C_name"];
                      $parentcatid = $value["Parentid"];

                      $childCatArry = [];
                      $ParentData = [
                        "id" => $parentcatid,
                        "name" => $parentCatName
                      ];

                      $childCategory = DatabaseManager::select("categories", "C_id,C_name as ChildCatName", "C_ParentCategory =$parentcatid ");

                      foreach ($childCategory as $value) {
                        $row = [
                          "id" => $value["C_id"],
                          "name" => $value["ChildCatName"]
                        ];
                        array_push($childCatArry, $row);
                      }

                      $row = [
                        "ParentCategory" => $ParentData,
                        "ChildCategories" => $childCatArry
                      ];
                      array_push($data, $row);
                    }


                    // Use usort to sort the array
                    ?>

                    <?php
                    $i = 0;
                    foreach ($data as $row) { ?>
                      <li class="nav-item border-bottom w-100 collapsed" data-bs-toggle="collapse"
                        data-bs-target="#categoryFlush<?= $i ?>" aria-expanded="false"
                        aria-controls="categoryFlush<?= $i ?>">
                        <a href="#" class="nav-link">
                          <?= $row["ParentCategory"]["name"] ?> <i class="feather-icon icon-chevron-right"></i>
                        </a>
                        <!-- accordion collapse -->
                        <div id="categoryFlush<?= $i ?>" class="accordion-collapse collapse"
                          data-bs-parent="#categoryCollapseMenu">
                          <div>
                            <!-- nav -->

                            <ul class="nav flex-column ms-3">
                              <!-- nav item -->
                              <?php
                              if ($row["ChildCategories"] == null) {
                                echo '<li class="nav-item _filterByCategory"><a href="" class="nav-link">No sub category Present</a></li>';
                              } else {
                                foreach ($row["ChildCategories"] as $ChildCat) {
                                  $id = $ChildCat["id"];
                                  $name = $ChildCat["name"];
                                  echo '<li class="nav-item _filterByCategory" data-custom_Filterbycat="' . $id . '"><a href="#!" class="nav-link">' . $name . '</a></li>';
                                }

                              }
                              ?>

                            </ul>



                          </div>
                        </div>

                      </li>

                      <?php
                      $i++;
                    }
                    ?>
                    <!-- nav item -->


                  </ul>

                </div>

                <!--abhi sellers ka registration etc ka kaam ni kia isi liy ye hide h 
                  <div class="mb-8 " >

                  <h5 class="mb-3">Stores</h5>
                  <div class="my-4">
                    <!-- input --
                    <input type="search" class="form-control" placeholder="Search by store">
                  </div>
                  <!-- form check --
                  <div class="form-check mb-2">
                    <!-- input --
                    <input class="form-check-input" type="checkbox" value="" id="eGrocery" checked>
                    <label class="form-check-label" for="eGrocery">
                      E-Grocery
                    </label>
                  </div>
                  <!-- form check --
                  <div class="form-check mb-2">
                    <!-- input --
                    <input class="form-check-input" type="checkbox" value="" id="DealShare">
                    <label class="form-check-label" for="DealShare">
                      DealShare
                    </label>
                  </div>
                  <!-- form check --
                  <div class="form-check mb-2">
                    <!-- input --
                    <input class="form-check-input" type="checkbox" value="" id="Dmart">
                    <label class="form-check-label" for="Dmart">
                      DMart
                    </label>
                  </div>
                  <!-- form check --
                  <div class="form-check mb-2">
                    <!-- input --
                    <input class="form-check-input" type="checkbox" value="" id="Blinkit">
                    <label class="form-check-label" for="Blinkit">
                      Blinkit
                    </label>
                  </div>
                  <!-- form check --
                  <div class="form-check mb-2">
                    <!-- input --
                    <input class="form-check-input" type="checkbox" value="" id="BigBasket">
                    <label class="form-check-label" for="BigBasket">
                      BigBasket
                    </label>
                  </div>
                  <!-- form check --
                  <div class="form-check mb-2">
                    <!-- input --
                    <input class="form-check-input" type="checkbox" value="" id="StoreFront">
                    <label class="form-check-label" for="StoreFront">
                      StoreFront
                    </label>
                  </div>
                  <!-- form check --
                  <div class="form-check mb-2">
                    <!-- input --
                    <input class="form-check-input" type="checkbox" value="" id="Spencers">
                    <label class="form-check-label" for="Spencers">
                      Spencers
                    </label>
                  </div>
                  <!-- form check --
                  <div class="form-check mb-2">
                    <!-- input --
                    <input class="form-check-input" type="checkbox" value="" id="onlineGrocery">
                    <label class="form-check-label" for="onlineGrocery">
                      Online Grocery
                    </label>
                  </div>

                </div> -->
                <div class="mb-8">
                  <!-- price -->
                  <h5 class="mb-3">Price</h5>
                  <div>
                    <!-- range -->
                    <div id="priceRange" class="mb-3"></div>
                    <small class="text-muted">Price:</small> <span id="priceRange-value" class="small"></span>

                  </div>



                </div>
                <!-- rating -->
                <div class="mb-8">

                  <h5 class="mb-3">Rating</h5>
                  <div>
                    <!-- form check -->
                    <div class="form-check mb-2">
                      <!-- input -->
                      <input class="form-check-input" type="checkbox" value="" id="ratingFive">
                      <label class="form-check-label" for="ratingFive">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                      </label>
                    </div>
                    <!-- form check -->
                    <div class="form-check mb-2">
                      <!-- input -->
                      <input class="form-check-input" type="checkbox" value="" id="ratingFour" checked>
                      <label class="form-check-label" for="ratingFour">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star text-warning"></i>
                      </label>
                    </div>
                    <!-- form check -->
                    <div class="form-check mb-2">
                      <!-- input -->
                      <input class="form-check-input" type="checkbox" value="" id="ratingThree">
                      <label class="form-check-label" for="ratingThree">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                      </label>
                    </div>
                    <!-- form check -->
                    <div class="form-check mb-2">
                      <!-- input -->
                      <input class="form-check-input" type="checkbox" value="" id="ratingTwo">
                      <label class="form-check-label" for="ratingTwo">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                      </label>
                    </div>
                    <!-- form check -->
                    <div class="form-check mb-2">
                      <!-- input -->
                      <input class="form-check-input" type="checkbox" value="" id="ratingOne">
                      <label class="form-check-label" for="ratingOne">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                      </label>
                    </div>
                  </div>


                </div>
                <div class="mb-8 position-relative">
                  <!-- Banner Design -->
                  <!-- Banner Content -->
                  <div class="position-absolute p-5 py-8">
                    <h3 class="mb-0">Fresh Fruits </h3>
                    <p>Get Upto 25% Off</p>
                    <a href="#" class="btn btn-dark">Shop Now<i class="feather-icon icon-arrow-right ms-1"></i></a>
                  </div>
                  <!-- Banner Content -->
                  <!-- Banner Image -->
                  <!-- img --><img src="../assets/images/assortment-citrus-fruits.png" alt=""
                    class="img-fluid rounded ">
                  <!-- Banner Image -->
                </div>
              </div>
            </div>
          </aside>
          <!-- filtration will be done using ajax -->
          <section class="col-lg-9 col-md-12">
            <!-- card -->
            <div class="card mb-4 bg-light border-0">
              <!-- card body -->
              <div class=" card-body p-9">
                <h2 class="mb-0 fs-1">All Products</h2><!--Snacks & Munchies-->
              </div>
            </div>
            <!-- list icon -->
            <div class="d-lg-flex justify-content-between align-items-center">
              <div class="mb-3 mb-lg-0">
                <p class="mb-0">
                  <span class="text-dark">
                    <?php
                    $hasproducts = (count(DatabaseManager::select("products", "COUNT(P_Id) as TotalProducts")) > 0);
                    if ($hasproducts) {
                      echo DatabaseManager::select("products", "COUNT(P_Id) as TotalProducts")[0]["TotalProducts"];
                    } else {
                      echo "0";
                    }
                    ?>
                  </span>
                  Products found
                </p>
              </div>

              <!-- icon -->
              <div class="d-md-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center justify-content-between">
                  <div>

                    <a href="shop-list.php" class="text-muted me-3"><i class="bi bi-list-ul"></i></a>
                    <a href="shop-grid.php" class=" me-3 active"><i class="bi bi-grid"></i></a>
                    <a href="shop-grid-3-column.php" class="me-3 text-muted"><i class="bi bi-grid-3x3-gap"></i></a>
                  </div>
                  <div class="ms-2 d-lg-none">
                    <a class="btn btn-outline-gray-400 text-muted" data-bs-toggle="offcanvas" href="#offcanvasCategory"
                      role="button" aria-controls="offcanvasCategory"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter me-2">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                      </svg> Filters</a>
                  </div>
                </div>

                <div class="d-flex mt-2 mt-lg-0">
                  <div class="me-2 flex-grow-1">
                    <!-- select option -->
                    <select class="form-select">
                      <option selected>Show: 50</option>
                      <option value="10">10</option>
                      <option value="20">20</option>
                      <option value="30">30</option>
                    </select>
                  </div>
                  <div>
                    <!-- select option -->
                    <select class="form-select">
                      <option selected>Sort by: Featured</option>
                      <option value="Low to High">Price: Low to High</option>
                      <option value="High to Low"> Price: High to Low</option>
                      <option value="Release Date"> Release Date</option>
                      <option value="Avg. Rating"> Avg. Rating</option>

                    </select>
                  </div>

                </div>

              </div>
            </div>
            <!-- row -->

            <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">
              <?php
              $limit = 0;
              $offset = 15;
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
                        (SELECT COUNT(reviews_products.Rev_Id) FROM reviews_products WHERE reviews_products._Product_id = products.P_Id) desc LIMIT $limit,$offset;              
                        ";
              $res = mysqli_query($connection, $query);
              $PopularProducts = [];


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


              foreach ($PopularProducts as $key => $value) {
                ?>
                <div class="col">
                  <div class="card card-product" style="height:100%">
                    <div class="card-body" style="display: flex;flex-direction: column;justify-content: space-around;">

                      <div class="text-center position-relative ">
                        <?php
                        if ($value["SalePrice"] != 0) {
                          echo '<div class=" position-absolute top-0 start-0">
                                              <span class="badge bg-danger">Sale</span>
                                          </div>';
                        }
                        $pid = $value["ProductId"];
                        ?>

                        <a href="#!" style="height:13.25rem;display: flex;justify-content: center;align-items: center; ">
                          <img src="../assets/images/<?php echo $value["ProductImg"] ?>"
                            alt="<?php echo $value["ProductName"] ?>" class="mb-3 img-fluid"></a>

                        <div class="card-product-action">
                          <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                          </a>
                          <a class="btn-action _WishlishBtn " data-custom-product-id="<?php echo $value["ProductId"]; ?>"
                            data-bs-toggle="tooltip" data-bs-html="true"
                            title="<?= (isset($_SESSION["Wishlist"]) && in_array($pid, $_SESSION["Wishlist"])) ? "Added" : "Wishlist"; ?>">

                            <i
                              class="_WishlishHeartIcon <?= (isset($_SESSION["Wishlist"]) && in_array($pid, $_SESSION["Wishlist"])) ? "bi bi-heart-fill \" style=\" color:green;\"" : "bi bi-heart \" style=\"color:;\""; ?> "></i>
                          </a>
                          <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare">
                            <i class="bi bi-arrow-left-right"></i>
                          </a>
                        </div>

                      </div>
                      <div class="text-small mb-1">
                        <a href="#!" class="text-decoration-none text-muted"><small>
                            <?php echo $value["CategoryName"] ?>
                          </small></a>
                      </div>
                      <h2 class="fs-6"><a href="pages/shop-single.php" class="text-inherit text-decoration-none">
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
                            data-Product_id="<?php echo $value["ProductId"] ?>"
                            data-custom-attr="<?= (isset($_SESSION["Cart"]) && in_array($value["ProductId"], $_SESSION["Cart"])) ? "Added" : "Add"; ?>">

                            <svg xmlns="http://www.w3.org/2000/svg" class="_addIcon" width="16" height="16"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                              <?= (isset($_SESSION["Cart"]) && in_array($value["ProductId"], $_SESSION["Cart"])) ? '
                                                    <polyline points="20 6 9 17 4 12"></polyline>' : '
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>'; ?>
                            </svg>

                            <span class="_addtext">
                              <?= (isset($_SESSION["Cart"]) && in_array($value["ProductId"], $_SESSION["Cart"])) ? "Added" : "Add"; ?>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php } ?>

            </div>
            <?php
            $totalRec = 12;
            ; //willbefetched from db
            if ($totalRec > 12) {
              ?>
              <div class="row mt-8">
                <div class="col">
                  <!-- nav -->
                  <nav>
                    <ul class="pagination">
                      <li class="page-item disabled">
                        <a class="page-link  mx-1 " href="#" aria-label="Previous">
                          <i class="feather-icon icon-chevron-left"></i>
                        </a>
                      </li>
                      <li class="page-item "><a class="page-link  mx-1 active" href="#">1</a></li>
                      <li class="page-item"><a class="page-link mx-1 text-body" href="#">2</a></li>

                      <li class="page-item"><a class="page-link mx-1 text-body" href="#">...</a></li>
                      <li class="page-item"><a class="page-link mx-1 text-body" href="#">12</a></li>
                      <li class="page-item">
                        <a class="page-link mx-1 text-body" href="#" aria-label="Next">
                          <i class="feather-icon icon-chevron-right"></i>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>

            <?php }
            ?>
          </section>
        </div>
      </div>
    </div>
  </main>



  <!-- modal -->



  <!-- footer start -->
  <?php include "../inc/footer.php"; ?>
  <!-- footer end -->

  <!-- Javascript-->
  <script src="../assets/libs/nouislider/dist/nouislider.min.js"></script>
  <script src="../assets/libs/wnumb/wNumb.min.js"></script>
  <!-- Libs JS start-->
  <?php include "../inc/LibsJs.php" ?>
  <?php include "../inc/js/Js_addtocart.php" ?>
  <?php include "../inc/js/Js_Whishlist.php" ?>
  <!-- Libs JS end-->
  <!-- Theme JS -->
  <script src="../assets/js/theme.min.js"></script>



</body>


<!-- Mirrored from freshcart.codescandy.com/pages/shop-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:09 GMT -->

</html>