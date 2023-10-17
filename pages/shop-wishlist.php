<?php include '../inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/pages/shop-wishlist.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:07 GMT -->

<head>

  <title>FreshCart - eCommerce HTML Template</title>
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
                <li class="breadcrumb-item active" aria-current="page">My Wishlist</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- section -->
    <section class="mt-8 mb-14">
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="mb-8">
              <!-- heading -->
              <h1 class="mb-1">My Wishlist</h1>
              <p>There are
                <span id="CountWishlist2">

                  <?= (isset($_SESSION["Wishlist"])) ? count($_SESSION["Wishlist"]) : 0; ?>
                </span>
                products in this wishlist.
              </p>
            </div>
            <div>
              <?php
              if (isset($_SESSION["Wishlist"]) && count($_SESSION["Wishlist"]) != 0) { ?>
                <div class="table-responsive">
                  <table class="table text-nowrap table-with-checkbox">
                    <thead class="table-light">
                      <tr>
                        <th>
                          <!-- form check -->
                          <div class="form-check">
                            <!-- input --><input class="form-check-input" type="checkbox" value="" id="checkAll">
                            <!-- label --><label class="form-check-label" for="checkAll">

                            </label>
                          </div>
                        </th>
                        <th></th>
                        <th>Product</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                        <th>Remove</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $WL = $_SESSION["Wishlist"];
                      foreach ($WL as $key => $Pid) {
                        $data = DatabaseManager::select("products", "P_Images as Pimg,P_Title as Pname ,P_Weight as Pw,
                                  case 
                                    when P_SalePrice!=0 then P_SalePrice
                                    else P_RegularPrice  
                                  end as Price ,
                                  P_Status as Pst
                                  
                                  ", "P_Id=$Pid");
                        $Pimg = $data[0]["Pimg"];
                        $Pname = $data[0]["Pname"];
                        $Pw = $data[0]["Pw"];
                        $Price = $data[0]["Price"];
                        $Pst = $data[0]["Pst"]; ?>

                        <tr>

                          <td class="align-middle">
                            <!-- form check -->
                            <div class="form-check">
                              <!-- input --><input class="form-check-input" type="checkbox" value="" id="chechboxTwo">
                              <!-- label --><label class="form-check-label" for="chechboxTwo">

                              </label>
                            </div>

                          </td>
                          <td class="align-middle">
                            <a href="#"><img src="../assets/images/<?= $Pimg ?>" class="icon-shape icon-xxl" alt=""></a>

                          </td>
                          <td class="align-middle">
                            <div>
                              <h5 class="fs-6 mb-0"><a href="#" class="text-inherit">
                                  <?= $Pname ?>
                                </a></h5>
                              <small>
                                <?= $Pw ?>
                              </small>
                            </div>
                          </td>
                          <td class="align-middle">$
                            <?= $Price ?>
                          </td>
                          <?=
                            ($Pst == 1) ? '<td class="align-middle"><span class="badge bg-success">In Stock</span></td>' : '<td class="align-middle"><span class="badge bg-danger">Out of Stock</span></td>';
                          ?>
                          <td class="align-middle">
                            <div class="btn btn-primary btn-sm">Add to Cart</div>
                          </td>
                          <td class="align-middle ">
                            <a href="#" class="text-muted _RemoveItemFromWishlist" data-custom-item-id="<?= $Pid ?>"
                              data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                              <i class="feather-icon icon-trash-2"></i>
                            </a>
                          </td>
                        </tr>

                      <?php
                      }
                      ?>


                    </tbody>
                  </table>
                </div>

              <?php } else { ?>
                <p>Your Wishlist Is empty :( <a href="shop.php" class="link">See Products Now</a></p>
              <?php } ?>
              <!-- table -->

            </div>
          </div>

        </div>



      </div>

    </section>
  </main>








  <!-- footer start -->
  <?php include "../inc/footer.php"; ?>
  <!-- footer end -->

  <!---------------------------------- Javascript------------------------------------------------>
  <!-- Libs JS start-->
  <?php include "../inc/LibsJs.php" ?>
  <!-- Libs JS end-->
  <!-- Theme JS -->
  <script src="../assets/js/theme.min.js"></script>



  <!-- Theme JS -->
  <script src="../assets/js/theme.min.js"></script>


  <script>
    //remove item
    let removeItmbtn = document.getElementsByClassName("_RemoveItemFromWishlist");
    let CountWishlist = document.getElementById("CountWishlist");
    let CountWishlist2 = document.getElementById("CountWishlist2");
    for (let i = 0; i < removeItmbtn.length; i++) {
      const r = removeItmbtn[i];
      r.addEventListener("click", (e) => {
        let clickedBtn = e.target.parentElement;
        let wholeTr = clickedBtn.parentElement.parentElement;
        let product = clickedBtn.getAttribute("data-custom-item-id");
        console.log(product);
        $.ajax({
          url: '../inc/worker.php',
          method: 'POST',
          data: {
            RemoveFromWishlist: product
          },
          success: (responce) => {
            let res = JSON.parse(responce);
            CountWishlist.innerText = res.TotalItems;
            CountWishlist2.innerText = res.TotalItems;
            wholeTr.remove();

          },
          error: (error) => {
            console.error(error);
          }
        })

      })
    }

  </script>

</body>


<!-- Mirrored from freshcart.codescandy.com/pages/shop-wishlist.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:08 GMT -->

</html>