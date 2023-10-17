<?php include "../inc/config.php"; ?>

<?php
if (isset($_POST["EditDetails"])) {
  $Mail = $_POST["Email"];
  $Name = $_POST["Name"];
  $ContactNumber = $_POST["ContactNumber"];
  $Client_Id = $_SESSION["UserLogin"]["Client_Id"];
  $cliId = DatabaseManager::select("clients", "Cli_Id as Cid", "Cli_Id='$Client_Id'")[0]["Cid"];

  $a = DatabaseManager::query("UPDATE Clients set Cli_Mail='$Mail',Cli_DisplayName='$Name' where Cli_Id=$cliId");
  $b = DatabaseManager::query("UPDATE users set Use_ContactNo='$ContactNumber' where _Client_Id=$cliId");
  if ($a && $b) {
    $_SESSION['UserLogin']["Full Name"] = $Name;
    $_SESSION['UserLogin']["Email"] = $Mail;
    $_SESSION['UserLogin']["ContactNumber"] = $ContactNumber;
    echo '
                            <script>
                            alert("Info Updated Successfully.. :) ");
                            window.location.href="account-settings.php";
                            </script>
                            ';
  } else {

    echo '
                            <script>
                            alert("Some Error Occur While Updating Info");
                            </script>
                            ';
    echo "not done";
  }
}
if (isset($_POST["UpdatePassword"])) {
  $NewPass = $_POST['NewPass'];
  $OldPass = $_POST['OldPass'];
  $Cliid = $_SESSION["UserLogin"]["Client_Id"];
  $passFromDb = DatabaseManager::select("clients", "Cli_Password as cp", "Cli_Id=$Cliid")[0]["cp"];
  $checkNewPass = password_verify($NewPass, $passFromDb);
  if (!$checkNewPass) {
    $checkOldPass = password_verify($OldPass, $passFromDb);
    $NewPass = password_hash($NewPass, PASSWORD_DEFAULT);
    if ($checkOldPass) {
      $isupdated = DatabaseManager::query("UPDATE clients set Cli_Password='$NewPass' where Cli_Id='$Cliid'");
      if ($isupdated) {
        echo '
        <script>
        alert("Password Updated SuccessFully :) ")
        window.location.href="account-settings.php";
        </script>
        ';

      } else {
        echo '
        <script>
        alert("Some Error Occur While Updating")
        </script>
        ';

      }
    } else {

      echo '
      <script>
      alert("Old Password Is INCORRECT! ")
      </script>
      ';
    }

  } else {

    echo '
          <script>
          alert("New Password Cannot be Old Password  ");
          </script>
          ';

  }
}
if (isset($_POST["DeletePerminantlyUseraccount"])) {

  $clientid = $_SESSION["UserLogin"]["Client_Id"];
  session_unset();
  session_destroy();
  $isDeletedFromUser = DatabaseManager::query("DELETE From users where _Client_Id='$clientid'");
  $isDeletedFromUser = true;
  if ($isDeletedFromUser) {
    $isDeletedFromClients = DatabaseManager::query("DELETE From clients where Cli_Id='$clientid'");
    $isDeletedFromClients = true;
    if ($isDeletedFromClients) {
      echo "true";
      die();

    } else {
      echo "false";
      die();

    }
  }

}
if (isset($_POST["SaveNewAddress"])) {
  $aid = $_POST["adid"];
  $name = $_POST["Name"];
  $address = $_POST["Address"];
    if (DatabaseManager::query("UPDATE `addresses` SET `Add_Name`='$name',`Add_Address`='$address' WHERE `Add_Id`='$aid'")) {
      echo "
     <script>
    //  alert('Address Updated Successfully');
     window.location.href='account-settings.php?selectTab=Address';
     </script>
     ";
 

  }
}
if (isset($_POST["Deleteaddress"])) {
  $Adid = $_POST["Deleteaddress"];
  if (DatabaseManager::query("DELETE FROM addresses Where `Add_Id`='$Adid'")) {
    echo "
    <script>
    // alert('Address Deleted Successfully');
    window.location.href='account-settings.php?selectTab=Address';
    </script>
    ";
  }

}
if (isset($_GET["changedefaultto"])) {
  $addressid = json_decode($_GET["changedefaultto"]);
  $cliid = $_SESSION["UserLogin"]["Client_Id"];
  $con = $connection;
  $con->begin_transaction();
  $a = DatabaseManager::query("UPDATE addresses set Add_IsDefault=0 where _Client_Id='$cliid'");
  $b = DatabaseManager::query("UPDATE `addresses` SET `Add_IsDefault` = '1' WHERE `addresses`.`Add_Id` = '$addressid'");
  if ($a && $b) {
    print_r($addressid);
    print_r($cliid);
    $con->commit();
    echo "
          <script>
            window.location.href='account-settings.php?selectTab=Address';
            </script>";
  } else {
    echo "
      <script>
        alert('error occer while changing default');
        window.location.href='account-settings.php?selectTab=Address';
        </script>";
    $con->rollback();
  }
  $con->close();
}

if (!(isset($_SESSION["UserLogin"]))) { ?>
  <script>
    window.location.href = "../index.php";
    console.log("hiii");
  </script>
<?php } ?>
<?php

if (isset($_POST["LogoutUser"]) || isset($_GET["LogOutUser"])) {
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
<!DOCTYPE html>
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

  <!-------------------------------------------------------------Main Start-------------------------------------------------- -->
  <main class="content">

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
                  <a class="nav-link _Nav_link  <?php echo (isset($_GET["selectTab"]) && $_GET["selectTab"] == "Settings") ? "active" : "";
                  echo (!isset($_GET["selectTab"])) ? "active" : ""; ?>   " data-LoadContentOf="Settings"><i
                      class="feather-icon icon-settings me-2"></i>Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link _Nav_link  <?php echo (isset($_GET["selectTab"]) && $_GET["selectTab"] == "Orders") ? "active" : ""; ?>  "
                    data-LoadContentOf="Orders" aria-current="page"><i
                      class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
                </li>
                <!-- nav item -->
                <!-- nav item -->
                <li class="nav-item">
                  <a class="nav-link _Nav_link  <?php echo (isset($_GET["selectTab"]) && $_GET["selectTab"] == "Address") ? "active" : ""; ?> "
                    data-LoadContentOf="Address"><i class="feather-icon icon-map-pin me-2"></i>Address</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                  <a class="nav-link _Nav_link  <?php echo (isset($_GET["selectTab"]) && $_GET["selectTab"] == "Payment") ? "active" : ""; ?> "
                    data-LoadContentOf="Payment"><i class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                  <a class="nav-link _Nav_link  <?php echo (isset($_GET["selectTab"]) && $_GET["selectTab"] == "Notification") ? "active" : ""; ?> "
                    data-LoadContentOf="Notification"><i class="feather-icon icon-bell me-2"></i>Notification</a>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                  <hr>
                </li>
                <!-- nav item -->
                <li class="nav-item">
                  <form action="account-settings.php" Method="POST">
                    <a class="nav-link text-danger " id="logout"><i class="feather-icon icon-log-out me-2"></i>
                      Log out

                    </a>
                  </form>
                </li>
              </ul>
            </div>
          </div>
          <style>
            ._Nav_link {
              cursor: pointer;

            }

            ._Nav_link:active {
              cursor: default;
            }
          </style>
          <!-- sidebar end-->

          <!-- content -->
          <div class="col-lg-9 col-md-8 col-12">
            <!-- settings -->
            <div class=" py-6 p-md-6 p-lg-10 _Setting_content_div" <?php echo (!isset($_GET["selectTab"]) || (isset($_GET["selectTab"]) && $_GET["selectTab"] == "Settings")) ? 'style="display: block;"' : 'style="display: none;"'; ?> data-Content_div='Settings'>
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
                    <form action="account-settings.php" Method="POST">
                      <!-- input -->
                      <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="Name"
                          value="<?php echo $_SESSION["UserLogin"]["Full Name"] ?>" placeholder="jitu chauhan">
                      </div>
                      <!-- input -->
                      <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="Email"
                          value="<?php echo $_SESSION["UserLogin"]["Email"] ?>" placeholder="example@gmail.com">
                      </div>
                      <!-- input -->
                      <div class="mb-5">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="ContactNumber"
                          value="<?php echo $_SESSION["UserLogin"]["ContactNumber"] ?>" placeholder="Phone number">
                      </div>
                      <!-- button -->
                      <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save Details</button>
                        <input type="hidden" name="EditDetails">

                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <hr class="my-10">
              <div class="pe-lg-14">
                <!-- heading -->
                <h5 class="mb-4">Password</h5>
                <form action="account-settings.php" method="Post" class=" row row-cols-1 row-cols-lg-2">
                  <!-- input -->
                  <div class="mb-3 col">
                    <label class="form-label">New Password</label>
                    <input type="password" name="NewPass" class="form-control" placeholder="**********">
                  </div>
                  <!-- input -->
                  <div class="mb-3 col">
                    <label class="form-label">Current Password</label>
                    <input type="password" name="OldPass" class="form-control" placeholder="**********">
                  </div>
                  <!-- input -->
                  <div class="col-12">
                    <p class="mb-4">Can’t remember your current password?<a href="#"> Reset your password.</a></p>
                    <button type="submit" href="#" class="btn btn-primary">Save Password</button>
                    <input type="hidden" name="UpdatePassword">
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
                <button class="btn btn-outline-danger" id="DeletePerminantlyUseraccount">I want to delete my
                  account</button>

                <!-- Modal -->
              </div>
            </div>
            <!-- orders -->
            <div class="py-6 p-md-6 p-lg-10  _Setting_content_div" style="display: none;" data-Content_div='Orders'>
              <!-- heading -->
              <h2 class="mb-6">Your Orders</h2>

              <div class="table-responsive-xxl border-0">
                <!-- Table -->
                <?php
                $clientid = $_SESSION["UserLogin"]["Client_Id"];
                $q = "SELECT
                       (SELECT products.P_Images FROM products WHERE products.P_Id=orders._Product_Id) as ProductImage,
                        (SELECT products.P_Title FROM products WHERE products.P_Id=orders._Product_Id) as ProductTitle,
                        (SELECT products.P_Weight FROM products WHERE products.P_Id=orders._Product_Id) as ProductWeight,
                        orders.Ord_Name as OrderNumber,
                        orders.Ord_Date as OrderDate,
                        orders.Ord_Quantity as quantity,
                        orders.Ord_Status as OrderStatus,
                        orders.Ord_Quantity*Ord_UnitPrice as TotalAmountOfSingleItemOrder
                     FROM orders WHERE orders.Ord_Status!=6 and _Client_Id=$clientid
                       ";
                $res = DatabaseManager::query($q);
                if ($res->num_rows != 0) {
                  ?>
                  <table class="table mb-0 text-nowrap table-centered ">
                    <!-- Table Head -->
                    <thead class="bg-light">
                      <tr>
                        <th>&nbsp;</th>
                        <th>Product</th>
                        <th>Order</th>
                        <th>Date</th>
                        <th>Items</th>
                        <th>Status</th>
                        <th>Amount</th>

                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Table body -->
                      <?php

                      while ($orders = mysqli_fetch_assoc($res)) {
                        echo "<pre>";

                        $ProductImage = $orders["ProductImage"];
                        $ProductTitle = $orders["ProductTitle"];
                        $ProductWeight = $orders["ProductWeight"];
                        $OrderNumber = $orders["OrderNumber"];
                        $OrderDate = $orders["OrderDate"];
                        $quantity = $orders["quantity"];
                        $OrderStatus = $orders["OrderStatus"];
                        $TA = $orders["TotalAmountOfSingleItemOrder"];

                        $Date = $OrderDate;
                        switch ($OrderStatus) {
                          case '0':
                            $Ostatus = '<span class="badge badge-warning text-dark bg-light-danger">Pending</span>';
                            break;
                          case '1':
                            $Ostatus = '<span class="badge badge-warning text-dark bg-warning">Packeging</span>';
                            break;
                          case '2':
                            $Ostatus = '<span class="badge badge-info text-light bg-dark">Shipping</span>';
                            break;
                          case '3':
                            $Ostatus = '<span class="badge badge-success text-dark bg-light-secondary">Warehouse</span>';
                            break;
                          case '4':
                            $Ostatus = '<span class="badge badge-primary text-dark bg-light-info">Delevering</span>';
                            break;
                          case '6':
                            $Ostatus = '<span class="badge badge-primary text-light bg-danger">Canceled</span>';
                            break;
                          default:
                            $Ostatus = '<span class="badge badge-success text-light bg-success">Success</span>';

                            break;
                        }


                        echo "
                        <tr>
                            <td class=\"align-middle border-top-0 w-0\">
                              <a href=\"#\"> <img src=\"../assets/images/$ProductImage\" alt=\"$ProductTitle\"
                                  class=\"icon-shape icon-xl\"></a>
  
                            </td>
                            <td class=\"align-middle border-top-0\">
  
                              <a href=\"#\" class=\"fw-semi-bold text-inherit\">
                                <h6 class=\"mb-0\">$ProductTitle</h6>
                              </a>
                              <span><small class=\"text-muted\">$ProductWeight</small></span>
  
                            </td>
                            <td class=\"align-middle border-top-0\">
                              <a href=\"#\" class=\"text-inherit\">#$OrderNumber</a>
  
                            </td>
                            <td class=\"align-middle border-top-0\">
                              $Date
  
                            </td>
                            <td class=\"align-middle border-top-0\">
                              $quantity
  
                            </td>
                            <td class=\"align-middle border-top-0\">
                             $Ostatus 
                            </td>
                            <td class=\"align-middle border-top-0\">
                              $$TA
                            </td>
                            <td class=\"text-muted align-middle border-top-0\">
                              <a href=\"#\" class=\"text-inherit\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                data-bs-title=\"View\"><i class=\"feather-icon icon-eye\"></i></a>
                            </td>
                          </tr>
                        
                        
                        ";
                        ?>

                        <?php
                      } ?>




                    </tbody>
                  </table>
                <?php } else {
                  echo "You ordered nothing :( <a class='link' href='shop.php'>Shop Now</a> :)";
                }
                ?>
              </div>
            </div>
            <!-- address -->

            <div class="py-6 p-md-6 p-lg-10 _Setting_content_div" style="display: none;" data-Content_div='Address'>
              <div class="d-flex justify-content-between mb-6">
                <!-- heading -->
                <h2 class="mb-0">Address</h2>
                <!-- button -->
                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addAddressModal">Add
                  a
                  new address </a>
              </div>
              <div class="row">
                <!-- col -->
                <style>
                  /* Style the label to look like an input field */
                  ._Label {
                    display: block;
                    padding: 4px;
                    border: 1px solid #ccc;
                    background-color: #f9f9f9;
                    border-radius: 4px;
                    font-family: Arial, sans-serif;
                    cursor: text;
                  }

                  /* Style the ._Label when it receives focus */
                  ._Label:hover {
                    background-color: #fff;
                  }

                  /* Style the ._Label when it receives focus */
                  ._Label:focus-within {
                    background-color: #fff;
                    box-shadow: 0 0 3px 2px #0077FF;
                  }
                </style>
                <?php
                $clientId = $_SESSION["UserLogin"]["Client_Id"];
                $q = "SELECT
                            addresses.Add_Id as id,
                            addresses.Add_Name as NameOfAddress,
                            addresses.Add_Address as AddressOfCli,
                            addresses.Add_IsDefault as isD
                      From addresses Where _Client_id=$clientId";
                $res = DatabaseManager::query($q);
                $ia = 0;
                while ($Address = mysqli_fetch_assoc($res)) {
                  $NameOfAddress = $Address['NameOfAddress'];
                  $AddressOfCli = $Address['AddressOfCli'];
                  $adid = $Address['id'];
                  $isD = ($Address['isD'] == 1) ? "<a href=\"#\"  class=\"_Defbtn btn btn-info btn-sm\">Default address</a>" : '<a href=\"#\"  class=\"_Defbtn btn btn-info btn-sm hidden \">Default address</a>';
                  $isactive = ($Address['isD'] == 1) ? 'checked' : '';

                  echo "
                        <div class=\"col-lg-5 col-xxl-4 col-12 mb-4 P_a\">
                          <!-- form -->
                          <div class=\"card\">
                            <div class=\"card-body p-6\">
                              <div class=\"form-check mb-4\">
                                <input class=\"form-check-input _Radio \" type=\"radio\" name=\"flexRadioDefault\" id=\"homeRadio" . $ia . "\" $isactive>
                                <label class=\"form-check-label text-dark _NameOfAddress fw-semi-bold\" for=\"homeRadio" . $ia++ . "\">
                                $NameOfAddress
                                </label>
                              </div>
                              <!-- address -->
                              <p class=\"mb-6 _Address \">
                              $AddressOfCli
                              </p> 
                              <!-- btn -->
                              $isD
                              <div class=\"mt-4\">
                              <form method='post' action='account-settings.php?selectTab=Address'>
                                <a  class=\"text-inherit _Nav_link _EditAddress\"  >Edit </a>
                                <input type='submit' class='btn text-danger '   value='Delete' />
                                <input type='hidden' class='_inpwid' name='Deleteaddress' value='$adid' />
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        ";
                }
                ?>

              </div>
            </div>

            <!-- payment -->
            `<div class="py-6 p-md-6 p-lg-10 _Setting_content_div" style="display: none;" data-Content_div='Payment'>
              <!-- heading -->
              <div class="d-flex justify-content-between mb-6 align-items-center">
                <h2 class="mb-0">Payment Methods</h2>
                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">Add
                  Payment </a>

              </div>
              <ul class="list-group list-group-flush">
                <!-- List group item -->
                <li class="list-group-item py-5 px-0">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex">
                      <!-- img -->
                      <img src="../assets/images/visa.svg" alt="">
                      <!-- text -->
                      <div class="ms-4">
                        <h5 class="mb-0 h6 h6">**** 1234</h5>
                        <p class="mb-0 small">Expires in 10/2023
                        </p>
                      </div>
                    </div>
                    <div>
                      <!-- button -->
                      <a href="#" class="btn btn-outline-gray-400 disabled btn-sm">Remove</a>
                    </div>
                  </div>
                </li>
                <!-- List group item -->
                <li class="list-group-item px-0 py-5">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex">
                      <!-- img -->
                      <img src="../assets/images/mastercard.svg" alt="" class="me-3">
                      <div>
                        <h5 class="mb-0 h6">Mastercard ending in 1234</h5>
                        <p class="mb-0 small">Expires in 03/2026</p>
                      </div>
                    </div>
                    <div>
                      <!-- button-->
                      <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                    </div>
                  </div>
                </li>
                <!-- List group item -->
                <li class="list-group-item px-0 py-5">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex">
                      <!-- img -->
                      <img src="../assets/images/discover.svg" alt="" class="me-3">
                      <div>
                        <!-- text -->
                        <h5 class="mb-0 h6">Discover ending in 1234</h5>
                        <p class="mb-0 small">Expires in 07/2020 <span class="badge bg-warning text-dark"> This card is
                            expired.</span></p>
                      </div>
                    </div>
                    <div>
                      <!-- btn -->
                      <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                    </div>
                  </div>
                </li>
                <!-- List group item -->
                <li class="list-group-item px-0 py-5">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex">
                      <!-- img -->
                      <img src="../assets/images/americanexpress.svg" alt="" class="me-3">
                      <!-- text -->
                      <div>
                        <h5 class="mb-0 h6">American Express ending in 1234</h5>
                        <p class="mb-0 small">Expires in 12/2021</p>
                      </div>
                    </div>
                    <div>
                      <!-- btn -->
                      <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                    </div>
                  </div>
                </li>
                <!-- List group item -->
                <li class="list-group-item px-0 py-5 border-bottom">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex">
                      <!-- img -->
                      <img src="../assets/images/paypal.svg" alt="" class="me-3">
                      <div>
                        <!-- text -->
                        <h5 class="mb-0 h6">Paypal Express ending in 1234</h5>
                        <p class="mb-0 small">Expires in 10/2021</p>
                      </div>
                    </div>
                    <div>
                      <!-- btn -->
                      <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- notification -->
            <div class="py-6 p-md-6 p-lg-10 _Setting_content_div" style="display: none;"
              data-Content_div='Notification'>
              <div class="mb-6">
                <!-- heading -->
                <h2 class="mb-0">Notification settings</h2>

              </div>

              <div class="mb-10">
                <!-- text -->
                <div class="border-bottom pb-3 mb-5">
                  <h5 class="mb-0">Email Notifications</h5>
                </div>
                <!-- text -->
                <div class="d-flex justify-content-between align-items-center mb-6">
                  <div>
                    <h6 class="mb-1">Weekly Notification</h6>
                    <p class="mb-0 ">Various versions have evolved over the years, sometimes by accident, sometimes on
                      purpose .</p>
                  </div>
                  <!-- checkbox -->
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <!-- text -->
                  <div>
                    <h6 class="mb-1">Account Summary</h6>
                    <p class="mb-0 pe-12 ">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                      turpis eguris eu sollicitudin massa. Nulla
                      ipsum odio, aliquam in odio et, fermentum blandit nulla.
                    </p>
                  </div>
                  <!-- form checkbox -->
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                  </div>
                </div>
              </div>
              <div class="mb-10">
                <!-- heading -->
                <div class="border-bottom pb-3 mb-5">
                  <h5 class="mb-0">Order updates</h5>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-6">
                  <div>
                    <!-- heading -->
                    <h6 class="mb-0">Text messages</h6>

                  </div>
                  <!-- form checkbox -->
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault2">
                    <label class="form-check-label" for="flexSwitchCheckDefault2"></label>
                  </div>
                </div>
                <!-- text -->
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="mb-1">Call before checkout</h6>
                    <p class="mb-0 ">We'll only call if there are pending changes
                    </p>
                  </div>
                  <!-- form checkbox -->
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked2" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked2"></label>
                  </div>
                </div>
              </div>
              <div class="mb-6">
                <!-- text -->
                <div class="border-bottom pb-3 mb-5">
                  <h5 class="mb-0">Website Notification</h5>
                </div>
                <div>
                  <!-- form checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckFollower" checked>
                    <label class="form-check-label" for="flexCheckFollower">
                      New Follower
                    </label>
                  </div>
                  <!-- form checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckPost">
                    <label class="form-check-label" for="flexCheckPost">
                      Post Like
                    </label>
                  </div>
                  <!-- form checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckPosted">
                    <label class="form-check-label" for="flexCheckPosted">
                      Someone you followed posted
                    </label>
                  </div>
                  <!-- form checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCollection">
                    <label class="form-check-label" for="flexCheckCollection">
                      Post added to collection
                    </label>
                  </div>
                  <!-- form checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckOrder">
                    <label class="form-check-label" for="flexCheckOrder">
                      Order Delivery
                    </label>
                  </div>
                </div>
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
    // changing active class on sidebarlink and display of content divs on click of sidebarlink
    $(document).ready(() => {
      let NL = document.getElementsByClassName("_Nav_link");
      let ContentDivs = document.getElementsByClassName("_Setting_content_div");

      for (let i = 0; i < NL.length; i++) {

        const link = NL[i];
        const contentdiv = ContentDivs[i];

        let attroflink = link.getAttribute("data-loadcontentof");
        let attrofContenrDiv = contentdiv.getAttribute("data-content_div");

        link.addEventListener("click", (e) => {

          let clickedlink = e.target;

          //removeing active class to navlink
          for (let I = 0; I < NL.length; I++) {
            const l = NL[I];
            l.classList.remove("active")
          }
          //adding active class to navlink
          clickedlink.classList.add("active");

          //show & hide content divs 
          if (attroflink == attrofContenrDiv) {
            for (let a = 0; a < ContentDivs.length; a++) {
              const div = ContentDivs[a];
              if (attrofContenrDiv == div.getAttribute("data-content_div")) {

                div.style.display = "block";
              } else {
                div.style.display = "none";
              }
            }
          }
        })
      }
    })
  </script>

  <?php
  // change selection on get req
  if (isset($_GET["selectTab"])) {
    $a = $_GET["selectTab"];
    ?>

    <script>
      //select contentdiv  on get req
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

            let a = document.getElementsByClassName("_Setting_content_div");
            for (let I = 0; I < a.length; I++) {

              const Cdiv = a[I];
              let attr = Cdiv.getAttribute("data-Content_div");

              if (attr === "<?php echo $a ?>") {
                for (let d = 0; d < a.length; d++) {
                  const setdisnone = a[d];
                  setdisnone.setAttribute("style", "display:none");
                }
                Cdiv.setAttribute("style", "display:block");
              }
            }

            break;
          }
        }
      });
    </script>

    <?php
  }
  ?>
  <script>
    //delete user acc perminantly
    $(document).ready(() => {
      $("#DeletePerminantlyUseraccount").on("click", () => {
        let a = confirm("Are You Sure You Wanna Delete Your Account Permanently? :( ");
        if (a) {
          $.ajax({
            method: 'POST',
            url: 'account-settings.php',
            data: {
              DeletePerminantlyUseraccount: true
            },
            success: function (response) {
              if (response === "true") {
                alert("Account deleted successfully :(");
                // You can perform other actions here, e.g., redirect to another page
              } else {
                alert("Account deletion failed");
              }
            }
          });

        } else {
          alert("Thanks");
        }
      });
    });
  </script>
  <script defr>
    // address EDIT AND DETETE
    let edA = document.getElementsByClassName("_EditAddress");
    let p = document.getElementsByClassName("P_a");
    let inpwid = document.getElementsByClassName("_inpwid");
    let NameField = document.getElementsByClassName("_NameOfAddress");
    let Address = document.getElementsByClassName("_Address");

    for (let index = 0; index < edA.length; index++) {
      const e = edA[index];

      e.addEventListener("click", (e) => {
        index;
        let P_a = p[index];
        let Oldname = NameField[index].innerText;
        let OldAddress = Address[index].innerText;

        let edhtml = `
                  <form action="account-settings.php?selectTab=Address" method="post">
                        <div class=\"card\">
                          <div class=\"card-body p-6\">
                            <div class="input-group input-group-sm mb-3">
                              <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                              <input type="text" class="form-control" name="Name" value='${Oldname}' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <!-- address -->
                              <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Address</span>
                                <textarea type="text" class="form-control" name="Address" aria-label="Sizing example input" style="min-height:120px;overflow: hidden scroll;" aria-describedby="inputGroup-sizing-sm">${OldAddress}</textarea>
                              </div>
                              <div class=\"mt-4\">
                              <form methos='post' action='account-settings.php'>
                                <input type="submit" class="btn btn-outline-success" name="SaveNewAddress" value="Save">
                                </form>
                              </div>
                              <div class="hidden _NameOfAddress "></div>
                              <div class="hidden _Address  "></div>
                              <input class="hidden _inpwid" type='hidden' name='adid' value='${inpwid[index].value}'/>
                              

                            </div>
                            </div>
                    </form>
                  `;
        P_a.innerHTML = edhtml;
      })

    }


    // Change default address
    let radioOfAdd = document.getElementsByClassName("_Radio");
    let Defbtn = document.getElementsByClassName("_Defbtn");
    for (let I = 0; I < radioOfAdd.length; I++) {
      const e = radioOfAdd[I];
      e.addEventListener("click", (a) => {
        let clickedbtn = e.target;
        let AddressId = inpwid[I].value;
        window.location.href = `account-settings.php?selectTab=Address&changedefaultto=${JSON.stringify(AddressId)}`;



      })
    }
  </script>


</body>


<!-- Mirrored from freshcart.codescandy.com/pages/account-settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:40 GMT -->

</html>