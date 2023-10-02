<?php include "inc/config.php"; ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/dashboard/reviews.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:13 GMT -->
<?php include "inc/head/head1.php"; ?>

<body>



  <?php include 'inc/nav/nav.php' ?>
  <div class="main-wrapper">
    <!-- navbar vertical -->

    <?php include 'inc/nav/nav2.php' ?>


    <!-- main -->
    <main class="main-content-wrapper">
      <div class="container">
        <div class="row mb-8">
          <div class="col-md-12">
            <div>
              <!-- page header -->
              <h2>Reviews</h2>
              <!-- breacrumb -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                </ol>
              </nav>

            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row ">
          <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
              <div class="p-6 ">
                <div class="row justify-content-between">
                  <div class="col-md-4 col-12 mb-2 mb-md-0">
                    <!-- form -->
                    <form class="d-flex" role="search">
                      <input class="form-control" id="_PRODUCT_SEARCH_INP" type="search" placeholder="Search Reviews"
                        aria-label="Search">
                    </form>
                  </div>
                  <div class="col-lg-2 col-md-4 col-12">
                    <!-- main -->
                    <select class="form-select" id="_filter_status">
                      <option selected value="all">All Rating</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="4">Four</option>
                      <option value="5">Five</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- card body -->
              <div class="card-body p-0">
                <!-- table -->
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
                        <th>Product</th>
                        <th>Name</th>
                        <th>Reviews</th>
                        <th>Rating</th>
                        <th>Date</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="_product_tbody">
                      <?php
                      $cardsPerPage = 10;
                      $totalRecords = DatabaseManager::select("ReviewsOfCustomersView", "count(_Client_Id) as cid")[0]["cid"];
                      $totalPages = ceil($totalRecords / $cardsPerPage); //paginaion loop limit &Workin
                      $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                      $offset = ($currentPage - 1) * $cardsPerPage;

                      $responce = mysqli_query($connection, "SELECT * FROM `ReviewsOfCustomersView` limit $offset,$cardsPerPage");


                      while ($value = mysqli_fetch_assoc($responce)) {

                        ?>
                        <tr>

                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="reviewOne">
                              <label class="form-check-label" for="reviewOne">

                              </label>
                            </div>
                          </td>

                          <td><a href="#" class="text-reset">
                              <?php echo $value["ProductName"] ?>
                            </a></td>
                          <td>
                            <?php echo $value["CustomerName"] ?>
                          </td>

                          <td>
                            <span class="text-truncate">
                              <?php echo $value["CustomerComment"] ?>
                            </span>
                          </td>
                          <td>
                            <div>
                              <?php
                              switch ($value["RatingStar"]) {
                                case '1':
                                  echo '<span><i class="bi bi-star-fill text-warning"></i></span>';
                                  for ($i = 0; $i < 5; $i++) {
                                    echo '<span><i class="bi bi-star-fill text-light"></i></span>';
                                  }
                                  ;
                                  break;

                                case '2':
                                  for ($i = 0; $i < 2; $i++) {
                                    echo '<span><i class="bi bi-star-fill text-warning"></i></span>';
                                  }
                                  ;
                                  for ($i = 0; $i < 3; $i++) {
                                    echo '<span><i class="bi bi-star-fill text-light"></i></span>';
                                  }
                                  ;
                                  break;

                                case '3':
                                  for ($i = 0; $i < 3; $i++) {
                                    echo '<span><i class="bi bi-star-fill text-warning"></i></span>';
                                  }
                                  ;
                                  for ($i = 0; $i < 2; $i++) {
                                    echo '<span><i class="bi bi-star-fill text-light"></i></span>';
                                  }
                                  ;
                                  break;
                                case '4':
                                  for ($i = 0; $i < 4; $i++) {
                                    echo '<span><i class="bi bi-star-fill text-warning"></i></span>';
                                  }
                                  ;
                                  echo '<span><i class="bi bi-star-fill text-light"></i></span>';
                                  break;

                                default:
                                  for ($i = 0; $i < 5; $i++) {
                                    echo '<span><i class="bi bi-star-fill text-warning"></i></span>';
                                  }
                                  ;
                                  break;
                              }
                              ?>


                            </div>
                          </td>
                          <td>
                            <?php echo $value["DateOfReview"] ?>
                          </td>
                          <td hidden>
                            <div class="dropdown disabled ">
                              <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="feather-icon icon-more-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu" style="z-index: 100;">
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


                  $arry = DatabaseManager::select("ReviewsOfCustomersView   limit $offset, $cardsPerPage");
                  ?>
                  <?php if ($totalRecords > 10) { ?>
                    <nav class="mt-2 mt-md-0">

                      <ul class="pagination mb-0 ">
                        <?php



                        if ($currentPage > 1) {
                          echo '    <li class="page-item"><a class="page-link " href="reviews.php?page=' . ($currentPage - 1) . '">Previous</a></li>';
                        } else {
                          echo '<li class="page-item disabled"><a class="page-link " href="#!">Previous</a></li>';
                        }

                        if ($totalPages <= 5) {
                          // Display all available pages if there are 5 or fewer
                          for ($i = 1; $i <= $totalPages; $i++) {
                            if ($i == $currentPage) {
                              echo '<li class="page-item"><a class="page-link active" href="reviews.php?page=' . $i . '">' . $i . '</a></li>';
                            } else {
                              echo '<li class="page-item"><a class="page-link" href="reviews.php?page=' . $i . '">' . $i . '</a></li>';
                            }
                          }
                        } else {
                          // Display the current page and two pages before and after it
                          $startPage = max(1, $currentPage - 2);
                          $endPage = min($totalPages, $currentPage + 2);

                          for ($i = $startPage; $i <= $endPage; $i++) {
                            if ($i == $currentPage) {
                              echo '<li class="page-item"><a class="page-link active" href="reviews.php?page=' . $i . '">' . $i . '</a></li>';
                            } else {
                              echo '<li class="page-item"><a class="page-link " href="reviews.php?page=' . $i . '">' . $i . '</a></li>';
                            }
                          }
                        }

                        if ($currentPage < $totalPages) {
                          echo '    <li class="page-item"><a class="page-link " href="reviews.php?page=' . ($currentPage + 1) . '">Next</a></li>';
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
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

  <!-- Theme JS -->
  <script src="../assets/js/theme.min.js"></script>
  <script>
    $(document).ready(() => {
      $('#_PRODUCT_SEARCH_INP').on("keyup", search)
      $('#_filter_status').on("change", search)

      function search() {
        let searchValue = $('#_PRODUCT_SEARCH_INP').val();
        let filter_status_S = $('#_filter_status').val();
        
        if (filter_status_S == "all") {
          filter_status_S = ''
        }


        // console.log(searchValue);
        $.ajax({
          url: 'ajax/searchManage.php',
          method: 'GET',
          data: {
            ReviewSearch: searchValue,
            filter_status: filter_status_S
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

                html = ` <tr>

                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="reviewOne">
                                <label class="form-check-label" for="reviewOne">

                                </label>
                              </div>
                            </td>

                            <td><a href="#" class="text-reset">
                                ${row["ProductName"]}
                              </a></td>
                            <td>
                              ${row["CustomerName"]}
                            </td>

                            <td>
                              <span class="text-truncate">
                                ${row["CustomerComment"]}
                              </span>
                            </td>
                            <td>
                              <div>`;

                switch (row["RatingStar"]) {
                  case '1':
                    html += '<span><i class="bi bi-star-fill text-warning"></i></span>';
                    for ($i = 0; $i < 5; $i++) {
                      html += '<span><i class="bi bi-star-fill text-light"></i></span>';
                    }
                    ;
                    break;

                  case '2':
                    for ($i = 0; $i < 2; $i++) {
                      html += '<span><i class="bi bi-star-fill text-warning"></i></span>';
                    }
                    ;
                    for ($i = 0; $i < 3; $i++) {
                      html += '<span><i class="bi bi-star-fill text-light"></i></span>';
                    }
                    ;
                    break;

                  case '3':
                    for ($i = 0; $i < 3; $i++) {
                      html += '<span><i class="bi bi-star-fill text-warning"></i></span>';
                    }
                    ;
                    for ($i = 0; $i < 2; $i++) {
                      html += '<span><i class="bi bi-star-fill text-light"></i></span>';
                    }
                    ;
                    break;
                  case '4':
                    for ($i = 0; $i < 4; $i++) {
                      html += '<span><i class="bi bi-star-fill text-warning"></i></span>';
                    }
                    ;
                    html += '<span><i class="bi bi-star-fill text-light"></i></span>';
                    break;

                  default:
                    for ($i = 0; $i < 5; $i++) {
                      html += '<span><i class="bi bi-star-fill text-warning"></i></span>';
                    }
                    ;
                    break;
                }



                html += `</div>
                            </td>
                            <td>
                                ${row["DateOfReview"]}
                            </td>
                            <td hidden>
                              <div class="dropdown disabled "   >
                                <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="feather-icon icon-more-vertical fs-5"></i>
                                </a>
                                <ul class="dropdown-menu" style="z-index: 100;">
                                  <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
                                  <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            </tr>`;







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


<!-- Mirrored from freshcart.codescandy.com/dashboard/reviews.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:13 GMT -->

</html>