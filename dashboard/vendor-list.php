<?php include "inc/config.php"; ?><!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/dashboard/vendor-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:28 GMT -->
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
        <div class="row mb-8">
          <div class="col-md-12">
            <!-- page header -->
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h2>Vendors</h2>
                <!-- breacrumb -->
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vendors</li>
                  </ol>
                </nav>
              </div>
              <!-- button -->
              <div>
                <a href="vendor-grid.php" class="btn btn-light btn-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-grid"
                    viewBox="0 0 16 16">
                    <path
                      d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                  </svg>
                </a>
                <a href="vendor-list.php" class="btn btn-primary  btn-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                    class="bi bi-list-task" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z" />
                    <path
                      d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z" />
                    <path fill-rule="evenodd"
                      d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row ">
          <div class="col-xl-12 col-12 mb-5">
            <div class="card h-100 card-lg">
              <div class="p-6 ">
                <div class="row ">
                  <!-- search bar -->
                  <div class="col-md-4 col-12">
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" id="_PRODUCT_SEARCH_INP" placeholder="Search Seller" aria-label="Search">
                    </form>
                  </div>
                </div>
              </div>
              <!-- card body -->
              <div class="card-body p-0">
                <!-- table -->
                <div class="table-responsive">
                  <table class="table table-centered table-hover text-nowrap table-borderless mb-0">
                    <thead class="bg-light">
                      <tr>
                        <th>Seller Id</th>
                        <th>Store Name</th>
                        <th>Email</th>
                        <th>Gross Sale</th>
                        <th>Earning</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="_product_tbody">
                      <?php   
                         $cardsPerPage = 10;
                      $totalRecords = DatabaseManager::select("VendorsOrSellers", "count(Sel_Id) as cid")[0]["cid"];
                      $totalPages = ceil($totalRecords / $cardsPerPage); //paginaion loop limit &Workin
                      $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                      $offset = ($currentPage - 1) * $cardsPerPage;

                      $responce = mysqli_query($connection, "SELECT * FROM `VendorsOrSellers` limit $offset,$cardsPerPage");


                      while ($value = mysqli_fetch_assoc($responce)) {
                        
                        ?>
                        <tr>
                          <td>
                            #<?php echo $value["Sel_Id"]; ?>
                          </td>
                          <td><a href="#" class="text-reset"><?php echo $value["Sel_StoreName"]; ?></a></td>
                          <td><?php echo $value["Mail"] ?></td>
  
                          <td>$<?php echo $value["TotalStoreSell"];?>
                          </td>
                          <td>$<?php echo $value["Earning"]; ?></td>
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
                

                $arry = DatabaseManager::select("VendorsOrSellers limit $offset, $cardsPerPage");
                ?>
                <?php if ($totalRecords > 10) { ?>
                  <nav class="mt-2 mt-md-0">

                    <ul class="pagination mb-0 ">
                      <?php



                      if ($currentPage > 1) {
                        echo '    <li class="page-item"><a class="page-link " href="vendor-list.php?page=' . ($currentPage - 1) . '">Previous</a></li>';
                      } else {
                        echo '<li class="page-item disabled"><a class="page-link " href="#!">Previous</a></li>';
                      }

                      if ($totalPages <= 5) {
                        // Display all available pages if there are 5 or fewer
                        for ($i = 1; $i <= $totalPages; $i++) {
                          if ($i == $currentPage) {
                            echo '<li class="page-item"><a class="page-link active" href="vendor-list.php?page=' . $i . '">' . $i . '</a></li>';
                          } else {
                            echo '<li class="page-item"><a class="page-link" href="vendor-list.php?page=' . $i . '">' . $i . '</a></li>';
                          }
                        }
                      } else {
                        // Display the current page and two pages before and after it
                        $startPage = max(1, $currentPage - 2);
                        $endPage = min($totalPages, $currentPage + 2);

                        for ($i = $startPage; $i <= $endPage; $i++) {
                          if ($i == $currentPage) {
                            echo '<li class="page-item"><a class="page-link active" href="vendor-list.php?page=' . $i . '">' . $i . '</a></li>';
                          } else {
                            echo '<li class="page-item"><a class="page-link " href="vendor-list.php?page=' . $i . '">' . $i . '</a></li>';
                          }
                        }
                      }

                      if ($currentPage < $totalPages) {
                        echo '    <li class="page-item"><a class="page-link " href="vendor-list.php?page=' . ($currentPage + 1) . '">Next</a></li>';
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
      
      function search() {
        let searchValue = $('#_PRODUCT_SEARCH_INP').val();
        
         
        
        // console.log(searchValue);
        $.ajax({
          url: 'ajax/searchManage.php',
          method: 'GET',
          data: {
            SellerSearch: searchValue
          },
          success: (e) => {
            let data = JSON.parse(e)
            console.log(data);
            html = ``;
            if (data.length != 0) {


              data.forEach(row => {
                html +=`
                        <tr>
                          <td>
                            #${row.SellerId}
                          </td>
                          <td><a href="#" class="text-reset">${row.StoreName}</a></td>
                          <td>${ row.Mail}</td>
  
                          <td>
                            ${row.TotalStoreSell}
                          </td>
                          <td>$60.00</td>
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


<!-- Mirrored from freshcart.codescandy.com/dashboard/vendor-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:28 GMT -->

</html>