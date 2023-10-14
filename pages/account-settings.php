<?php include "../inc/config.php"; ?>
<!DOCTYPE html>
<?php

if (isset($_POST["LogoutUser"])) {
  session_unset();
  session_destroy();
  ?>
  <script>
    alert("logged out succesfully :(")
    window.location.href = "../index.php";
  </script>
  <?php
}
?>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/pages/account-settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:40 GMT -->

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

<body >

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

  <!-------------------------------------------------------------Main Start-------------------------------------------------- -->
  <main class="content"  >
  
    <!-- section -->
    <section>
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-12">
            <div class="d-flex justify-content-between align-items-center d-md-none py-4">
              <!-- heading -->
              <h3 class="fs-5 mb-0">Account Setting</h3>
              <!-- button -->
              <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3 " type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount" aria-controls="offcanvasAccount">
                <i class="bi bi-text-indent-left fs-3"></i>
              </button>
            </div>
          </div>
          <!-- col -->
          <!-- sidebar start  -->
          <div class="col-lg-3 col-md-4 col-12 border-end  d-none d-md-block">
    <div class="pt-10 pe-lg-10">
        <!-- nav item -->
        <ul class="nav flex-column nav-pills nav-pills-dark">
            <li class="nav-item">
                <a class="nav-link _Nav_link  <?php echo (isset($_GET["selectTab"]) && $_GET["selectTab"]== "Settings")?"active":""; echo (!isset($_GET["selectTab"]))?"active":""; ?>   " data-LoadContentOf="Settings"><i
                        class="feather-icon icon-settings me-2"></i>Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link _Nav_link  <?php echo (isset($_GET["selectTab"]) && $_GET["selectTab"]== "Orders")?"active":"";?>  " data-LoadContentOf="Orders" aria-current="page"><i
                        class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
            </li>
            <!-- nav item -->
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link _Nav_link  <?php echo (isset($_GET["selectTab"]) && $_GET["selectTab"]== "Address")?"active":"";?> " data-LoadContentOf="Address"><i
                        class="feather-icon icon-map-pin me-2"></i>Address</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link _Nav_link  <?php echo (isset($_GET["selectTab"]) && $_GET["selectTab"]== "Payment")?"active":"";?> " data-LoadContentOf="Payment"><i
                        class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link _Nav_link  <?php echo (isset($_GET["selectTab"]) && $_GET["selectTab"]== "Notification")?"active":"";?> " data-LoadContentOf="Notification"><i
                        class="feather-icon icon-bell me-2"></i>Notification</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <hr>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <form action="account-settings.php" Method="POST">
                    <a class="nav-link " id="logout"><i class="feather-icon icon-log-out me-2"></i>
                        Log out

                    </a>
                </form>
            </li>
        </ul>
    </div>
</div>
<style>
    ._Nav_link{
        cursor: pointer;

    }
    ._Nav_link:active{
        cursor:default;
    }
</style>
          <!-- sidebar end-->


          <div class="col-lg-9 col-md-8 col-12" id="containerToLoadContentin">
            <div class=" py-6 p-md-6 p-lg-10">
              <div class="mb-6">
                <!-- heading -->
                <h2 class="mb-0">Account Setting</h2>
              </div>
              <div>
                <!-- heading -->
                <h5 class="mb-4">Account details</h5>
                <div class="row">
                  <div class="col-lg-5">
                    <!-- form -->
                    <form>
                      <!-- input -->
                      <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="jitu chauhan">
                      </div>
                      <!-- input -->
                      <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="example@gmail.com">
                      </div>
                      <!-- input -->
                      <div class="mb-5">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" placeholder="Phone number">
                      </div>
                      <!-- button -->
                      <div class="mb-3">
                        <button class="btn btn-primary">Save Details</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <hr class="my-10">
              <div class="pe-lg-14">
                <!-- heading -->
                <h5 class="mb-4">Password</h5>
                <form class=" row row-cols-1 row-cols-lg-2">
                  <!-- input -->
                  <div class="mb-3 col">
                    <label class="form-label">New Password</label>
                    <input type="password" class="form-control" placeholder="**********">
                  </div>
                  <!-- input -->
                  <div class="mb-3 col">
                    <label class="form-label">Current Password</label>
                    <input type="password" class="form-control" placeholder="**********">
                  </div>
                  <!-- input -->
                  <div class="col-12">
                    <p class="mb-4">Can’t remember your current password?<a href="#"> Reset your password.</a></p>
                    <a href="#" class="btn btn-primary">Save Password</a>
                  </div>
                </form>
              </div>
              <hr class="my-10">
              <div>
                <!-- heading -->
                <h5 class="mb-4">Delete Account</h5>
                <p class="mb-2">Would you like to delete your account?</p>
                <p class="mb-5">This account contain 12 orders, Deleting your account will remove all the order
                  details
                  associated with it.</p>
                <!-- btn -->
                <a href="#" class="btn btn-outline-danger">I want to delete my account</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </main>
  <!-------------------------------------------------------------Main end-------------------------------------------------- -->







  <!-- modal for mobile view  -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount" aria-labelledby="offcanvasAccountLabel">
    <!-- offcanvas header -->
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasAccountLabel">Offcanvas</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- offcanvas body -->
    <div class="offcanvas-body">
      <ul class="nav flex-column nav-pills nav-pills-dark">
        <!-- nav item -->
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="account-orders.php"><i
              class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
        </li>
        <!-- nav item -->

        <li class="nav-item">
          <a class="nav-link active" href="account-settings.php"><i
              class="feather-icon icon-settings me-2"></i>Settings</a>
        </li>
        <!-- nav item -->

        <li class="nav-item">
          <a class="nav-link" href="account-address.php"><i class="feather-icon icon-map-pin me-2"></i>Address</a>
        </li>
        <!-- nav item -->

        <li class="nav-item">
          <a class="nav-link" href="account-payment-method.php"><i
              class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
        </li>
        <!-- nav item -->

        <li class="nav-item">
          <a class="nav-link" href="account-notification.php"><i
              class="feather-icon icon-bell me-2"></i>Notification</a>
        </li>
      </ul>
      <hr class="my-6">
      <div>
        <!-- navs -->
        <ul class="nav flex-column nav-pills nav-pills-dark">
          <!-- nav item -->
          <li class="nav-item">
            <a class="nav-link " href="../index.php"><i class="feather-icon icon-log-out me-2"></i>Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- footer start -->
  <?php include "../inc/footer.php"; ?>
  <!-- footer end -->

  <!---------------------------------- Javascript------------------------------------------------>
  <!-- Libs JS start-->
  <?php include "../inc/LibsJs.php" ?>
  <!-- Libs JS end-->
  <!-- Theme JS -->
  <script src="../assets/js/theme.min.js"></script>

  <script>
    $("#logout").on("click", (e) => {
      e.target.parentElement.innerHTML += '<input type="submit"  id="logoutinpsub" name="LogoutUser" hidden value="Log out">'
      $("#logoutinpsub").click();
    })
  </script>

  <!-- Theme JS -->
  <script src="../assets/js/theme.min.js"></script>
  <script>
    $(document).ready(() => {
      $("._Nav_link").on("click", (e) => {
        let clickedbtn = e.target;
        $("._Nav_link").removeClass("active");
        clickedbtn.classList.add("active");
        let LoadContentOf = clickedbtn.getAttribute("data-LoadContentOf");

        let workerToChangeContent = new Worker("workers/AccountSettingWorker.js");

        workerToChangeContent.postMessage(LoadContentOf);//send to get content of


        workerToChangeContent.onmessage = (res) => {//get responce
          let content = res.data;

          document.getElementById("containerToLoadContentin").innerHTML = content;
        }

      })
    })
  </script>
  <?php
  if (isset($_GET["selectTab"])) {
    $a = $_GET["selectTab"];
    ?>
      
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        let NL = document.getElementsByClassName("_Nav_link");
        for (let i = 0; i < NL.length; i++) {
          const link = NL[i];
          if (link.getAttribute("data-LoadContentOf") === "<?php echo $a ?>") {
            // Remove "active" class from all links
            for (let j = 0; j < NL.length; j++) {
              NL[j].classList.remove("active");
            }
            link.classList.add("active");

            let LoadContentOf = link.getAttribute("data-LoadContentOf");

            let workerToChangeContent = new Worker("workers/AccountSettingWorker.js");

            workerToChangeContent.postMessage(LoadContentOf);//send to get content of


            workerToChangeContent.onmessage = (res) => {//get responce
              let content = res.data;

              document.getElementById("containerToLoadContentin").innerHTML = content;
            }
            break;
          }
        }
      });
    </script>

    <?php
  }
  ?>




</body>


<!-- Mirrored from freshcart.codescandy.com/pages/account-settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:40 GMT -->

</html>