<?php include 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/dashboard/products.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:08 GMT -->

<?php include "inc/head/head1.php"; ?>

<body>
    <!-- main wrapper-->

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
                        <div class="d-md-flex justify-content-between align-items-center">
                            <div>
                                <h2>Products</h2>
                                <!-- breacrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                                    </ol>
                                </nav>
                            </div>
                            <!-- button -->
                            <div>
                                <a href="add-product.php" class="btn btn-primary">Add Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row ">
                    <div class="col-xl-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lg">
                            <div class="px-6 py-6 ">
                                <div class="row justify-content-between">
                                    <!-- form -->
                                    <div class="col-lg-4 col-md-6 col-12 mb-2 mb-lg-0">
                                        <form class="d-flex" role="search">
                                            <input class="form-control" type="search" id="_PRODUCT_SEARCH_INP"
                                                placeholder="Search Products" aria-label="Search">
                                        </form>
                                    </div>
                                    <!-- select option -->
                                    <div class="col-lg-2 col-md-4 col-12">
                                        <select class="form-select " id="_filter_status">
                                            <option <?php echo (isset($_GET["filter_status"]) && $_GET["filter_status"] == "0") ? "selected" : ""; ?> value="all">Status
                                            </option>
                                            <option <?php echo (isset($_GET["filter_status"]) && $_GET["filter_status"] == "1") ? "selected" : ""; ?> value="1">Active
                                            </option>
                                            <option <?php echo (isset($_GET["filter_status"]) && $_GET["filter_status"] == "0") ? "selected" : ""; ?> value="0">Deactive
                                            </option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- card body -->
                            <div class="card-body p-0">
                                <!-- table -->
                                <div class="table-responsive">
                                    <table
                                        class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                                        <thead class="bg-light">
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="checkAll">
                                                        <label class="form-check-label" for="checkAll">

                                                        </label>
                                                    </div>
                                                </th>
                                                <th>Image</th>
                                                <th>Proudct Name</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Price</th>
                                                <th>Create at</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="_product_tbody">
                                            <?php
                                            $cardsPerPage = 10;
                                            $totalRecords = DatabaseManager::select("products", "count(P_Id) as cid")[0]["cid"];
                                            $totalPages = ceil($totalRecords / $cardsPerPage); //paginaion loop limit &Workin
                                            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                                            $offset = ($currentPage - 1) * $cardsPerPage;
                                            
                                            $responce = mysqli_query($connection, "SELECT   (SELECT C_name From categories where C_id=_Category_Id ) as CatName,`P_Id`,`P_Images`,`P_Title`,`Date`,`P_Status`,`P_RegularPrice` FROM `products` limit $offset,$cardsPerPage");
                                             

                                            while ($row = mysqli_fetch_assoc($responce)) {


                                                ?>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="productOne">
                                                            <label class="form-check-label" for="productOne">

                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#!"> <img
                                                                src="../assets/images/<?php echo  $row["P_Images"] ?>"
                                                                alt="" class="icon-shape icon-md"></a>
                                                    </td>
                                                    <td><a href="#" class="text-reset">
                                                            <?php echo $row["P_Title"] ?>
                                                        </a></td>
                                                    <td>
                                                        <?php echo $row["CatName"] ?>

                                                    </td>

                                                    <td>
                                                        <?php

                                                        if ($row["P_Status"] == 1) {
                                                            echo '<span class="badge bg-light-primary text-dark-primary">Active</span>';
                                                        } else if ($row["P_Status"] == 0) {
                                                            echo '<span class="badge bg-light-danger text-dark-danger">Deactive</span>';
                                                        } ?>
                                                    </td>
                                                    <td>$
                                                        <?php echo $row["P_RegularPrice"] ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        echo date("j M Y", strtotime($row["Date"]));
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="text-reset" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="feather-icon icon-more-vertical fs-5"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="phpworkshop/productmanage.php?DeleteProductOfId=<?php echo $row["P_Id"]; ?>"><i
                                                                            class="bi bi-trash me-3"></i>Delete</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="add-product.php?EditProductOfId=<?php echo $row["P_Id"]; ?>"><i
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
                            <div class=" border-top d-md-flex justify-content-between align-items-center px-6 py-6">
                                <span>Showing <?php echo $offset." to ".$responce->num_rows." of ".$totalRecords." entries " ?></span>
                               

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
     <?php include "../inc/LibsJs.php"?>
    
    

    <!-- Theme JS -->
     <script src="../assets/js/theme.min.js"></script>
    <!-- product search -->
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
                        ProductSearch: searchValue,
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
                                                    <input class="form-check-input" type="checkbox" value="" id="productOne">
                                                    <label class="form-check-label" for="productOne">

                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#!"> <img src="../assets/images/${row['P_Images']}" alt="" class="icon-shape icon-md"></a>
                                            </td>
                                            <td><a href="#" class="text-reset">${row["P_Title"]}</a></td>
                                            <td>Snack & Munchies</td>

                                            <td>`;

                                html += (row["P_Status"] == 1) ? '<span class="badge bg-light-primary text-dark-primary">Active</span>' :
                                    (row["P_Status"] == 0) ? '<span class="badge bg-light-danger text-dark-danger">Deactive</span>' :
                                        '';

                                html += `
                                            </td>
                                            <td>Rs ${row["P_RegularPrice"]}</td>
                                            <td>${row["Date"]}</td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="phpworkshop/productmanage.php?DeleteProductOfId=${row["P_Id"]}"><i class="bi bi-trash me-3"></i>Delete</a></li>
                                                        <li><a class="dropdown-item" href="add-product.php?EditProductOfId=${row["P_Id"]}"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
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
    <!-- product search end-->

</body>


<!-- Mirrored from freshcart.codescandy.com/dashboard/products.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:08 GMT -->

</html>