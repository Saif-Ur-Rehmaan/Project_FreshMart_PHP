<?php include "inc/config.php"; ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/dashboard/customers.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:12 GMT -->
<?php include "inc/head/head1.php"; ?>

<body>


  <?php include 'inc/nav/nav.php' ?>
  <div class="main-wrapper">
    <!-- navbar vertical -->

    <?php include 'inc/nav/nav2.php' ?>

    <main class="main-content-wrapper">
      <div class="container">
        <div class="row mb-8">
          <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
              <div>
                <h2>Customers</h2>
                <!-- breacrumb -->
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Customers</li>
                  </ol>
                </nav>
              </div>
              <div>
                <a href="#!" class="btn btn-primary">Add New Customer</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-xl-12 col-12 mb-5">
            <div class="card h-100 card-lg">

              <div class="p-6">
                <div class="row justify-content-between">
                  <div class="col-md-4 col-12">
                    <form class="d-flex" role="search">
                      <input class="form-control" type="search" id="_PRODUCT_SEARCH_INP" placeholder="Search Customers"
                        aria-label="Search">

                    </form>
                  </div>

                </div>
              </div>
              <div class="card-body p-0 ">

                <div class="table-responsive">
                  <table class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
                    <thead class="bg-light">

                      <tr>
                        <th>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                            <label class="form-check-label" for="checkAll">

                            </label>
                          </div>
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Registration Date</th>
                        <th>Phone</th>
                        <th>Spent</th>

                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="_product_tbody">
                      <?php
                      $cardsPerPage = 10;
                      $totalRecords = DatabaseManager::select("customersview", "count(_Client_id) as cid")[0]["cid"];
                      $totalPages = ceil($totalRecords / $cardsPerPage); //paginaion loop limit &Workin
                      $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                      $offset = ($currentPage - 1) * $cardsPerPage;

                      $responce = mysqli_query($connection, "SELECT * FROM `customersview` limit $offset,$cardsPerPage");


                      while ($value = mysqli_fetch_assoc($responce)) {
                        ?>
                        <tr>

                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="customerOne">
                              <label class="form-check-label" for="customerOne">

                              </label>
                            </div>
                          </td>

                          <td>
                            <div class="d-flex align-items-center">
                              <img src="../assets/images/avatar-1.jpg" alt=""
                                class="avatar avatar-xs rounded-circle">
                              <div class="ms-2">
                                <a href="#" class="text-inherit">
                                  <?php echo $value["CustomerName"]; ?>
                                </a>
                              </div>
                            </div>
                          </td>
                          <td>
                            <?php echo $value["Mail"]; ?>
                          </td>

                          <td>
                            <?php $dbDate = $value["RegisterDate"];

                            // Convert the database date to a timestamp
                            $timestamp = strtotime($dbDate);

                            // Format the timestamp as desired
                            $formattedDate = date("d F, Y \a\\t h:ia", $timestamp);

                            echo $formattedDate; ?>
                          </td>
                          <td>
                            <?php echo $value["ContactNo"]; ?>
                          </td>
                          <td>
                            $
                            <?php echo $value["spend"]; ?>
                          </td>

                          <td hidden>
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

                <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                <span>Showing
                  <?php echo $offset . " to " . $responce->num_rows . " of " . $totalRecords . " entries " ?>
                </span>


                <?php
                

                $arry = DatabaseManager::select("Customersview   limit $offset, $cardsPerPage");
                ?>
                <?php if ($totalRecords > 10) { ?>
                  <nav class="mt-2 mt-md-0">

                    <ul class="pagination mb-0 ">
                      <?php



                      if ($currentPage > 1) {
                        echo '    <li class="page-item"><a class="page-link " href="customers.php?page=' . ($currentPage - 1) . '">Previous</a></li>';
                      } else {
                        echo '<li class="page-item disabled"><a class="page-link " href="#!">Previous</a></li>';
                      }

                      if ($totalPages <= 5) {
                        // Display all available pages if there are 5 or fewer
                        for ($i = 1; $i <= $totalPages; $i++) {
                          if ($i == $currentPage) {
                            echo '<li class="page-item"><a class="page-link active" href="customers.php?page=' . $i . '">' . $i . '</a></li>';
                          } else {
                            echo '<li class="page-item"><a class="page-link" href="customers.php?page=' . $i . '">' . $i . '</a></li>';
                          }
                        }
                      } else {
                        // Display the current page and two pages before and after it
                        $startPage = max(1, $currentPage - 2);
                        $endPage = min($totalPages, $currentPage + 2);

                        for ($i = $startPage; $i <= $endPage; $i++) {
                          if ($i == $currentPage) {
                            echo '<li class="page-item"><a class="page-link active" href="customers.php?page=' . $i . '">' . $i . '</a></li>';
                          } else {
                            echo '<li class="page-item"><a class="page-link " href="customers.php?page=' . $i . '">' . $i . '</a></li>';
                          }
                        }
                      }

                      if ($currentPage < $totalPages) {
                        echo '    <li class="page-item"><a class="page-link " href="customers.php?page=' . ($currentPage + 1) . '">Next</a></li>';
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
      </div>
    </main>

  </div>


  <!-- Libs JS -->
   <?php include "../inc/LibsJs.php"?>
  
  

  <!-- Theme JS -->
   <script src="../assets/js/theme.min.js"></script>
  <script>
    $(document).ready(() => {
      $('#_PRODUCT_SEARCH_INP').on("keyup", search)

      function search() {
        let searchValue = $('#_PRODUCT_SEARCH_INP').val();



        // console.log(searchValue);
        $.ajax({
          url: 'ajax/searchManage.php',
          method: 'GET',
          data: {
            CustomerSearch: searchValue
          },
          success: (e) => {
            let data = JSON.parse(e) 
            html = ``;
            if (data.length != 0) {

              // Assuming row.RegisterDate contains a valid date string
              data.forEach(row => {
                const rawDate = new Date(row.RegisterDate);

                const options = {
                  year: "numeric",
                  month: "long",
                  day: "numeric",
                  hour: "numeric",
                  minute: "numeric",
                  hour12: true,
                };

                const formattedDate = `${rawDate.toLocaleDateString("en-US", options)} `;


                html += `  <tr>
                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="customerOne">
                                <label class="form-check-label" for="customerOne">

                                </label>
                              </div>
                            </td>

                            <td>
                              <div class="d-flex align-items-center">
                                <img src="../assets/images/avatar-1.jpg" alt=""
                                  class="avatar avatar-xs rounded-circle">
                                <div class="ms-2">
                                  <a href="#" class="text-inherit">
                                    ${row.CustomerName}
                                  </a>
                                </div>
                              </div>
                            </td>
                            <td>
                              ${row.Mail}
                            </td>

                            <td>
                              ${formattedDate}
                            </td>
                            <td>${row.ContactNo}</td>
                            <td>
                              $${row.spend}
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
                            </tr>`









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


<!-- Mirrored from freshcart.codescandy.com/dashboard/customers.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:13 GMT -->

</html>