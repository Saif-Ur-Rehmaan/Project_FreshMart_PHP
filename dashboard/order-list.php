<?php  
include "inc/config.php"; ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/dashboard/order-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:11 GMT -->
<?php include "inc/head/head1.php"; ?>

<body>

  <!-- main -->

  <?php include 'inc/nav/nav.php' ?>
  <div class="main-wrapper">
    <!-- navbar vertical -->

    <?php include 'inc/nav/nav2.php' ?>


    <!-- main wrapper -->
    <main class="main-content-wrapper">
      <div class="container">
        <!-- row -->
        <div class="row mb-8">
          <div class="col-md-12">
            <!-- page header -->
            <div>
              <h2>Order List</h2>
              <!-- breacrumb -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Order List</li>
                </ol>
              </nav>

            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row">
          <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
              <div class=" p-6 ">
                <div class="row justify-content-between">
                  <div class="col-md-4 col-12 mb-2 mb-md-0">
                    <!-- form -->
                    <form class="d-flex" role="search">
                      <input class="form-control" type="search" id="_PRODUCT_SEARCH_INP" placeholder="Search"
                        aria-label="Search">

                    </form>
                  </div>
                  <div class="col-lg-2 col-md-4 col-12">
                    <!-- select -->
                    <select class="form-select" id="_filter_status">
                      <option selected value="all">All</option>
                      <option value="0">Pending</option>
                      <option value="1">Packeging</option>
                      <option value="2">Shipping</option>
                      <option value="3">Warehouse</option>
                      <option value="4">Delivering</option>
                      <option value="5">Success</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- card body -->
              <div class="card-body p-0">
                <!-- table responsive -->
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
                        <th>Order Name</th>
                        <th>Customer</th>
                        <th>Date & TIme</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Total Amount</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="_product_tbody">
                      <?php

                      $cardsPerPage = 10;
                      $totalRecords = DatabaseManager::select("searchorderview", "count(_Product_Id) as cid")[0]["cid"];
                      $totalPages = ceil($totalRecords / $cardsPerPage); //paginaion loop limit &Workin
                      $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                      $offset = ($currentPage - 1) * $cardsPerPage;

                      $responce = mysqli_query($connection, "SELECT * FROM `searchorderview` limit $offset,$cardsPerPage");


                      while ($value = mysqli_fetch_assoc($responce)) {

                        $P_ID = $value["_Product_Id"];
                        $CLi_ID = $value["_Client_Id"];
                        $ProductImage = $value["P_Images"];
                        $OrderName = $value["Ord_Name"];
                        $CustomerName = $value["Cli_DisplayName"];
                        $PaymentType = $value["Use_PaymentMethod"];
                        $OrderDate = (new DateTime($value["Ord_Date"]))->format('j F Y (g:ia)');
                        $Status = $value["Ord_Status"];
                        $TotalAmount = $value["Totalamount"];

                        //amount abhi static h q k formula ni pta
                      
                        ?>

                        <tr>

                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="orderOne">
                              <label class="form-check-label" for="orderOne">

                              </label>
                            </div>
                          </td>
                          <td>
                            <a href="#!"> <img src="../assets/images/<?php echo $ProductImage; ?>" alt=""
                                class="icon-shape icon-md"></a>
                          </td>
                          <td><a href="#" class="text-reset"><!--example :FC#1007-->
                              <?php echo $OrderName; ?>
                            </a></td>
                          <td>
                            <?php echo $CustomerName; ?>
                          </td>

                          <td>
                            <?php echo $OrderDate; ?>
                          </td>
                          <td>
                            <?php echo $PaymentType; ?>
                          </td>

                          <td>
                            <?php
                            /*
                            0=pending,
                            1=packeging,
                            2=shipping,
                            3=warehouse,
                            4=delevering
                            5=success*/
                            switch ($Status) {
                              case '0':
                                echo '<span class="badge badge-warning text-dark bg-light-danger">Pending</span>';
                                break;
                              case '1':
                                echo '<span class="badge badge-warning text-dark bg-warning">Packeging</span>';
                                break;
                              case '2':
                                echo '<span class="badge badge-info text-light bg-dark">Shipping</span>';
                                break;
                              case '3':
                                echo '<span class="badge badge-success text-dark bg-light-secondary">Warehouse</span>';
                                break;
                              case '4':
                                echo '<span class="badge badge-primary text-dark bg-light-info">Delevering</span>';
                                break;
                              case '6':
                                echo '<span class="badge badge-primary text-light bg-danger">Canceled</span>';
                                break;
                              default:
                                echo '<span class="badge badge-success text-light bg-success">Success</span>';

                                break;
                            }
                            ; ?>
                          </td>
                          <td>$
                            <?php echo $TotalAmount ?>
                          </td>

                          <td>
                            <div class="dropdown">
                              <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="feather-icon icon-more-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
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
              <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                <span>Showing
                  <?php echo $offset . " to " . $responce->num_rows . " of " . $totalRecords . " entries " ?>
                </span>


                <?php


                $arry = DatabaseManager::select("products limit $offset, $cardsPerPage");
                ?>
                <?php if ($totalRecords > 10) { ?>
                  <nav class="mt-2 mt-md-0">

                    <ul class="pagination mb-0 ">
                      <?php



                      if ($currentPage > 1) {
                        echo '    <li class="page-item"><a class="page-link " href="order-list.php?page=' . ($currentPage - 1) . '">Previous</a></li>';
                      } else {
                        echo '<li class="page-item disabled"><a class="page-link " href="#!">Previous</a></li>';
                      }

                      if ($totalPages <= 5) {
                        // Display all available pages if there are 5 or fewer
                        for ($i = 1; $i <= $totalPages; $i++) {
                          if ($i == $currentPage) {
                            echo '<li class="page-item"><a class="page-link active" href="order-list.php?page=' . $i . '">' . $i . '</a></li>';
                          } else {
                            echo '<li class="page-item"><a class="page-link" href="order-list.php?page=' . $i . '">' . $i . '</a></li>';
                          }
                        }
                      } else {
                        // Display the current page and two pages before and after it
                        $startPage = max(1, $currentPage - 2);
                        $endPage = min($totalPages, $currentPage + 2);

                        for ($i = $startPage; $i <= $endPage; $i++) {
                          if ($i == $currentPage) {
                            echo '<li class="page-item"><a class="page-link active" href="order-list.php?page=' . $i . '">' . $i . '</a></li>';
                          } else {
                            echo '<li class="page-item"><a class="page-link " href="order-list.php?page=' . $i . '">' . $i . '</a></li>';
                          }
                        }
                      }

                      if ($currentPage < $totalPages) {
                        echo '    <li class="page-item"><a class="page-link " href="order-list.php?page=' . ($currentPage + 1) . '">Next</a></li>';
                      }

                      ?>
















                    </ul>
                  </nav>
                <?php } ?>
              </div>
            </div>

          </div>

        </div>
      </div>
    </main>

  </div>


  <!-- Libs JS -->
   <?php include "../inc/LibsJs.php"?>
  
  

  <!-- Theme JS -->
   <script src="../assets/js/theme.min.js"></script>

  <script>
    $(document).ready(() => {
      //   let  searchinp[0];
      // console.log(searchinp);
      $('#_PRODUCT_SEARCH_INP').on("keyup", search)
      $('#_filter_status').on("change", search)
      function search() {
        let searchValue = $('#_PRODUCT_SEARCH_INP').val();
        let filter_status_S = $('#_filter_status').val();
        if (filter_status_S == "all") {
          filter_status_S = ''
        }
        console.log(filter_status_S);
        // console.log(searchValue);
        $.ajax({
          url: 'ajax/searchManage.php',
          method: 'GET',
          data: {
            OrderSearch: searchValue,
            filter_status: filter_status_S
          },
          success: (e) => {
            let data = JSON.parse(e)
            html = ``;
            if (data.length != 0) {


              data.forEach(row => {

                html += `
                                    <tr>

                                     
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="orderOne">
                              <label class="form-check-label" for="orderOne">

                              </label>
                            </div>
                          </td>
                          <td>
                            <a href="#!"> <img src="../assets/images/${row.P_Images}" alt=""
                                class="icon-shape icon-md"></a>
                          </td>
                          <td><a href="#" class="text-reset"><!--example :FC#1007-->
                              ${row.Ord_Name}
                            </a></td>
                          <td>
                            ${row.Cli_DisplayName}
                          </td>

                          <td>
                            ${row.Ord_Date}
                          </td>
                          <td>
                            ${row.Use_PaymentMethod}
                          </td>



                <td>`;

                switch (row.Ord_Status) {
                  case '0':
                    html += '<span class="badge badge-warning text-dark bg-light-danger">Pending</span>';
                    break;
                  case '1':
                    html += '<span class="badge badge-warning text-dark bg-warning">Packeging</span>';
                    break;
                  case '2':
                    html += '<span class="badge badge-info text-light bg-dark">Shipping</span>';
                    break;
                  case '3':
                    html += '<span class="badge badge-success text-dark bg-light-secondary">Warehouse</span>';
                    break;
                  case '4':
                    html += '<span class="badge badge-primary text-dark bg-light-info">Delevering</span>';
                    break;
                  case '6':
                    html += '<span class="badge badge-primary text-light bg-danger">Canceled</span>';
                    break;
                  default:
                    html += '<span class="badge badge-success text-light bg-success">Success</span>';

                    break;
                }

                html += `
                </td>
                          <td>$${row.Totalamount}</td>

                          <td>
                            <div class="dropdown">
                              <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="feather-icon icon-more-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                                    
                                    `;
              });
              $("#_product_tbody").html(html);
            } else {
              html = "<tr><td>product not found</td></tr>"
              $("#_product_tbody").html(html);
            }

          }, error: (e) => {
            console.error(e)
          }
        })
      }

    })

  </script>

</body>


<!-- Mirrored from freshcart.codescandy.com/dashboard/order-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:11 GMT -->

</html>