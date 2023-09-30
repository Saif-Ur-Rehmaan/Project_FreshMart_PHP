<?php include "inc/config.php"; ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/dashboard/categories.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:08 GMT -->
<?php include "inc/head/head1.php"; ?>

<body>

  <!-- main wrapper -->
  <?php include 'inc/nav/nav.php' ?>
  <div class="main-wrapper">
    <!-- navbar vertical -->

    <?php include 'inc/nav/nav2.php' ?>


    <!-- main -->
    <main class="main-content-wrapper">
      <div class="container">
        <!-- row -->
        <div class="row mb-8">
          <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
              <!-- pageheader -->
              <div>
                <h2>Categories</h2>
                <!-- breacrumb -->
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                  </ol>
                </nav>
              </div>
              <!-- button -->
              <div>
                <a href="add-category.php" class="btn btn-primary">Add New Category</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
              <div class=" px-6 py-6 ">
                <div class="row justify-content-between">
                  <div class="col-lg-4 col-md-6 col-12 mb-2 mb-md-0">
                    <!-- form -->
                    <form class="d-flex" role="search">
                      <input class="form-control" id="_PRODUCT_SEARCH_INP" type="search" placeholder="Search Category"
                        aria-label="Search">
                    </form>
                  </div>
                  <!-- select option -->
                  <div class="col-xl-2 col-md-4 col-12">
                    <select class="form-select" id="_filter_status">
                      <option selected value="all">All</option>
                      <option value="1">Published</option>
                      <option value="0">Unpublished</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- card body -->
              <div class="card-body p-0">
                <!-- table -->
                <div class="table-responsive ">
                  <table class="table table-centered table-hover mb-0 text-nowrap table-borderless table-with-checkbox">
                    <thead class="bg-light">
                      <tr>
                        <th>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                            <label class="form-check-label" for="checkAll">

                            </label>
                          </div>
                        </th>
                        <th>Icon</th>
                        <th> Name</th>
                        <th>Proudct</th>
                        <th>Status</th>

                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="_product_tbody">
                      <?php
                      $cardsPerPage = 10;
                      $totalRecords = DatabaseManager::select("categories", "count(C_id) as cid")[0]["cid"];
                      $totalPages = ceil($totalRecords / $cardsPerPage); //paginaion loop limit &Workin
                      $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                      $offset = ($currentPage - 1) * $cardsPerPage;

                      $responce = DatabaseManager::query("SELECT `C_id`,`C_Logo`,`C_name`,`C_Status` FROM `categories` limit $offset,$cardsPerPage");


                      while ($row = mysqli_fetch_assoc($responce)) { ?>

                        <tr>

                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="categoryOne">
                              <label class="form-check-label" for="categoryOne">

                              </label>
                            </div>
                          </td>

                          <td>
                            <a href="#!"> <img src="../assets/images/icons/<?php echo $row["C_Logo"] ?>" alt=""
                                class="icon-shape icon-sm"></a>
                          </td>

                          <td><a href="#" class="text-reset">
                              <?php echo $row["C_name"] ?>
                            </a></td>
                          <td>
                            <?php
                            $cid = $row["C_id"];
                            echo DatabaseManager::select("products", "count(P_Id) as p", "_Category_id=$cid")[0]["p"]
                              ?>
                          </td>

                          <td>
                            <?php
                            echo ($row["C_Status"] == 1) ? '<span class="badge bg-light-primary text-dark-primary">Published</span>' : '<span class="badge bg-light-danger text-dark-danger">Unpublished</span>';
                            ?>

                          </td>

                          <td>
                            <div class="dropdown">
                              <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="feather-icon icon-more-vertical fs-5"></i>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                    href="phpworkshop/categorymanage.php?DeleteCategoryOfId=<?php echo $row["C_id"] ?>"><i
                                      class="bi bi-trash me-3"></i>Delete</a></li>
                                <li><a class="dropdown-item"
                                    href="add-category.php?EditCategoryOfId=<?php echo $row["C_id"]?>"><i
                                      class="bi bi-pencil-square me-3 "></i>Edit</a>
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
              <div class="border-top d-md-flex justify-content-between align-items-center  px-6 py-6">
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
                        echo '    <li class="page-item"><a class="page-link " href="products.php?page=' . ($currentPage - 1) . '">Previous</a></li>';
                      } else {
                        echo '<li class="page-item disabled"><a class="page-link " href="#!">Previous</a></li>';
                      }

                      if ($totalPages <= 5) {
                        // Display all available pages if there are 5 or fewer
                        for ($i = 1; $i <= $totalPages; $i++) {
                          if ($i == $currentPage) {
                            echo '<li class="page-item"><a class="page-link active" href="products.php?page=' . $i . '">' . $i . '</a></li>';
                          } else {
                            echo '<li class="page-item"><a class="page-link" href="products.php?page=' . $i . '">' . $i . '</a></li>';
                          }
                        }
                      } else {
                        // Display the current page and two pages before and after it
                        $startPage = max(1, $currentPage - 2);
                        $endPage = min($totalPages, $currentPage + 2);

                        for ($i = $startPage; $i <= $endPage; $i++) {
                          if ($i == $currentPage) {
                            echo '<li class="page-item"><a class="page-link active" href="products.php?page=' . $i . '">' . $i . '</a></li>';
                          } else {
                            echo '<li class="page-item"><a class="page-link " href="products.php?page=' . $i . '">' . $i . '</a></li>';
                          }
                        }
                      }

                      if ($currentPage < $totalPages) {
                        echo '    <li class="page-item"><a class="page-link " href="products.php?page=' . ($currentPage + 1) . '">Next</a></li>';
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
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

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
            CategorySearch: searchValue,
            filter_status: filter_status_S
          },
          success: (e) => {
            let data = JSON.parse(e)
            console.log(data);
            html = ``;
            if (data.length != 0) {


              data.forEach(row => {

                html += `
                                    <tr>

                                            
                                            <td>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="categoryOne">
                                                <label class="form-check-label" for="categoryOne">

                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <a href="#!"> <img src="../assets/images/icons/${row["C_Logo"]}" alt=""
                                                  class="icon-shape icon-sm"></a>
                                            </td>
                                            
                                            <td><a href="#" class="text-reset">${row["C_name"]}</a></td>

                <td>${row["ProductCount"]}</td>




                <td>`;

                html += (row["C_Status"] == 1) ? '<span class="badge bg-light-primary text-dark-primary">Published</span>' : '<span class="badge bg-light-danger text-dark-danger">Unpublished</span>';

                html += `
                                            </td> 

                                            <td>
                                              <div class="dropdown">
                                                <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                  <i class="feather-icon icon-more-vertical fs-5"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                  <li><a class="dropdown-item"
                                                      href="phpworkshop/categorymanage.php?DeleteCategoryOfId=${row["C_id"]}"><i
                                                        class="bi bi-trash me-3"></i>Delete</a></li>
                                                  <li><a class="dropdown-item"
                                                      href="add-category.php?EditCategoryOfId=${row["C_id"]}"><i
                                                        class="bi bi-pencil-square me-3 "></i>Edit</a>
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


<!-- Mirrored from freshcart.codescandy.com/dashboard/categories.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:11 GMT -->

</html>