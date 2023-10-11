<?php include "inc/config.php"; ?>
<!DOCTYPE html>
<html lang="en">


<?php include "inc/head/head1.php"; ?>

<body>
    <!-- main -->
    <div>
        <?php include 'inc/nav/nav.php' ?>
        <div class="main-wrapper">
            <!-- navbar vertical -->

            <?php include 'inc/nav/nav2.php' ?>





            <!-- main wrapper -->
            <main class="main-content-wrapper">
                <section class="container">
                    <!-- row -->
                    <div class="row mb-8">
                        <div class="col-md-12">
                            <!-- card -->
                            <div class="card bg-light border-0 rounded-4"
                                style="background-image: url(../assets/images/slider-image-1.jpg); background-repeat: no-repeat; background-size: cover; background-position: right;">
                                <div class="card-body p-lg-12">
                                    <h1>Welcome back! FreshCart
                                    </h1>
                                    <p>FreshCart is simple & clean design for developer and
                                        designer.</p>
                                    <a href="products.php" class="btn btn-primary">
                                        Create Product
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table -->

                    <div class="row">
                        <div class="col-lg-4 col-12 mb-6">
                            <!-- card -->
                            <div class="card h-100 card-lg">
                                <!-- card body -->
                                <div class="card-body p-6">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center mb-6">
                                        <div>
                                            <h4 class="mb-0 fs-5">Earnings
                                                <!-- amount we Earned after order succeeded   -->
                                            </h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-light-danger text-dark-danger rounded-circle">
                                            <i class="bi bi-currency-dollar fs-5"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class=" mb-2 fw-bold fs-2">
                                            <?php
                                            $query = " SELECT 
                                            sum(orders.Ord_UnitPrice * orders.Ord_Quantity) AS totalamountOfLastThirtyDays, 
                                            SUM((orders.Ord_UnitPrice * orders.Ord_Quantity) - (
                                                (SELECT products.P_ActualPrice FROM products WHERE products.P_Id = orders._Product_Id) * orders.Ord_Quantity
                                            )) AS EarningOfLastThirtyDays from orders WHERE orders.Ord_Date >= DATE_SUB(NOW(), INTERVAL 30 DAY) AND orders.Ord_Status!=6";
                                            $Data = DatabaseManager::fetch_Assoc($query);
                                            echo "$" . $Data["EarningOfLastThirtyDays"];
                                            ?>
                                        </h1>
                                        <span>Monthly revenue</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mb-6">
                            <!-- card -->
                            <div class="card h-100 card-lg">
                                <!-- card body -->
                                <div class="card-body p-6">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center mb-6">
                                        <div>
                                            <h4 class="mb-0 fs-5">Orders (Current)</h4>
                                        </div>
                                        <div
                                            class="icon-shape icon-md bg-light-warning text-dark-warning rounded-circle">
                                            <i class="bi bi-cart fs-5"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class=" mb-2 fw-bold fs-2">
                                            <?php
                                            echo DatabaseManager::select("orders", "COUNT(Ord_Id) as ordercount", "Ord_Status=5")[0]["ordercount"]
                                                ?>
                                        </h1>
                                        <span><span class="text-dark me-1">
                                                <?php
                                                $res = DatabaseManager::query("SELECT count(Ord_Id) as co from orders  where orders.Ord_Status=5 AND orders.Ord_Date >= DATE_SUB(NOW(), INTERVAL 7 DAY)");
                                                $data = mysqli_fetch_assoc($res);
                                                $salesCount = $data["co"];
                                                if ($salesCount > 30) {
                                                    echo '30+ </span>New Sales</span>';
                                                } else {
                                                    echo $salesCount . '</span>New Sales</span>';
                                                }
                                                ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mb-6">
                            <!-- card -->
                            <div class="card h-100 card-lg">
                                <!-- card body -->
                                <div class="card-body p-6">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center mb-6">
                                        <div>
                                            <h4 class="mb-0 fs-5">Total Customers</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-light-info text-dark-info rounded-circle">
                                            <i class="bi bi-people fs-5"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class=" mb-2 fw-bold fs-2">
                                            <?php echo DatabaseManager::select("users", "Count(Use_Id) as uc")[0]["uc"] ?>
                                        </h1>
                                        <span><span class="text-dark me-1">
                                                <?php
                                                $a = DatabaseManager::query("SELECT COUNT(*) AS NewCustomers
                                        FROM (
                                            SELECT users.Use_Id
                                            FROM users
                                            WHERE users.Use_RegistrationDate > DATE_SUB(NOW(), INTERVAL 7 DAY)
                                        ) AS new_customer_subquery;
                                        ");
                                                $b = mysqli_fetch_assoc($a);
                                                $customercount = $b["NewCustomers"];
                                                if ($customercount > 1000) {
                                                    echo "$customercount +";
                                                } else {
                                                    echo $customercount;

                                                }

                                                ?>
                                            </span>new in 7 days</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- row -->
                    <div class="row ">
                        <div class="col-xl-8 col-lg-6 col-md-12 col-12 mb-6">
                            <!-- card -->
                            <div class="card h-100 card-lg">
                                <div class="card-body p-6">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="mb-1 fs-5">Revenue </h3>
                                            <small>(
                                                <?php
                                                if (isset($_GET["filter-year"])) {
                                                    $filterCurrentYearAs = $_GET["filter-year"];

                                                    $lastyearrevinue = "SELECT
                                                YEAR(Ord_Date) AS Year,
                                                SUM(Ord_Quantity * Ord_UnitPrice) AS Revenue
                                                FROM orders
                                                WHERE YEAR(Ord_Date) = $filterCurrentYearAs - 1 AND Ord_Status=5
                                                GROUP BY Year;
                                            ";

                                                    $todayyearrevinue = "SELECT
                                                YEAR(Ord_Date) AS Year,
                                                SUM(Ord_Quantity * Ord_UnitPrice) AS Revenue
                                                FROM orders
                                                WHERE YEAR(Ord_Date) = $filterCurrentYearAs AND Ord_Status=5
                                                GROUP BY Year;
                                            ";

                                                    $a = DatabaseManager::query($lastyearrevinue);
                                                    $b = DatabaseManager::query($todayyearrevinue);

                                                    $LYR = 0;
                                                    $TYR = 0;

                                                    if ($a->num_rows != 0) {
                                                        $LYR = mysqli_fetch_assoc($a)["Revenue"];
                                                    }

                                                    if ($b->num_rows != 0) {
                                                        $TYR = mysqli_fetch_assoc($b)["Revenue"];
                                                    }

                                                    if ($LYR != 0 && $TYR != 0) {
                                                        $percentageChange = (($TYR - $LYR) / abs($LYR)) * 100;
                                                        $changeSign = ($percentageChange >= 0) ? '+' : '-';
                                                        $percentageChangeFormatted = $changeSign . abs($percentageChange) . '%';
                                                        echo $percentageChangeFormatted;
                                                    } else {
                                                        echo "No data available for the year " . ($filterCurrentYearAs - 1) . " for comparison.";
                                                    }

                                                } else {

                                                    $lastyearrevinue = "SELECT
                                        YEAR(Ord_Date) AS Year,
                                        SUM(Ord_Quantity * Ord_UnitPrice) AS Revenue
                                        FROM orders
                                        WHERE YEAR(Ord_Date) = YEAR(NOW()) - 1 AND Ord_Status=5
                                        GROUP BY Year;
                                    ";

                                                    $todayyearrevinue = "SELECT
                                        YEAR(Ord_Date) AS Year,
                                        SUM(Ord_Quantity * Ord_UnitPrice) AS Revenue
                                        FROM orders
                                        WHERE YEAR(Ord_Date) = YEAR(NOW()) AND Ord_Status=5
                                        GROUP BY Year;
                                    ";

                                                    $a = DatabaseManager::query($lastyearrevinue);
                                                    $b = DatabaseManager::query($todayyearrevinue);

                                                    $LYR = 0;
                                                    $TYR = 0;

                                                    if ($a->num_rows != 0) {
                                                        $LYR = mysqli_fetch_assoc($a)["Revenue"];
                                                    }

                                                    if ($b->num_rows != 0) {
                                                        $TYR = mysqli_fetch_assoc($b)["Revenue"];
                                                    }

                                                    if ($LYR != 0 && $TYR != 0) {
                                                        $percentageChange = (($TYR - $LYR) / abs($LYR)) * 100;
                                                        $changeSign = ($percentageChange >= 0) ? '+' : '-';
                                                        $percentageChangeFormatted = $changeSign . abs($percentageChange) . '%';
                                                        echo $percentageChangeFormatted;
                                                    } else {
                                                        echo "No data available for comparison.";
                                                    }
                                                }


                                                // echo $revInPer . "%";
                                                
                                                ?>) than last year)
                                            </small>
                                        </div>
                                        <div>


                                            <?php
                                            //for 2023
                                            // $GetYearRevinue = "SELECT
                                            //                 YEAR(OrderDate) AS Year,
                                            //                 SUM(Ord_Quantity * Ord_UnitPrice) AS Revenue
                                            //             FROM orders
                                            //             WHERE YEAR(OrderDate) =2023
                                            //             GROUP BY Year;
                                            //             ";
                                            ?>


                                            <!-- select option -->
                                            <select class="form-select filter-year-rev ">
                                                <?php
                                                $GetYears = "SELECT DISTINCT
                                                                YEAR(Ord_Date) AS Y
                                                                FROM orders
                                                                ORDER BY YEAR(Ord_Date) DESC";
                                                $res = DatabaseManager::query($GetYears);
                                                $i = 0;
                                                $selectedYear = isset($_GET["filter-year"]) ? $_GET["filter-year"] : null; // Get the selected year from the URL
                                                while ($year = mysqli_fetch_assoc($res)) {
                                                    $year = $year["Y"];
                                                    $selected = ($selectedYear !== null && $selectedYear == $year) ? "selected" : ""; // Check if this year should be selected
                                                    echo "<option $selected value='$year'>$year</option>";
                                                    $i++;
                                                }
                                                ?>

                                                <script>
                                                    let a = document.getElementsByClassName("filter-year-rev");
                                                    console.log("aoihcsuia");
                                                    for (let index = 0; index < a.length; index++) {
                                                        const element = a[index];
                                                        element.addEventListener("change", (el) => {
                                                            let clickede = el.target.value;
                                                            window.location.href = "index.php?filter-year=" + clickede;
                                                            console.log(clickede);
                                                        })
                                                    }
                                                </script>


                                            </select>
                                        </div>

                                    </div>
                                    <!-- chart -->
                                    <div id="revenueChart" class="mt-6"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 mb-6">
                            <!-- card -->
                            <div class="card h-100 card-lg">
                                <!-- card body -->
                                <div class="card-body p-6">
                                    <!-- heading -->
                                    <h3 class="mb-0 fs-5">Total Sales </h3>
                                    <div id="totalSale" class="mt-6 d-flex justify-content-center"></div>
                                    <div class="mt-4">
                                        <!-- list -->
                                        <ul class="list-unstyled mb-0">
                                            <!-- 
    shipping->total amount that will be given or gaved to shipping company,
    refund->total amount which we will be given or gaved to customers who cancelled order,
    Order->total amount which we will get ,
    Income->total revinue maked in all years
-->
                                            <?php
                                            // Fetch data from the database (replace with your database query)
                                            $query = " SELECT 
                                            sum(orders.Ord_UnitPrice * orders.Ord_Quantity) AS Totalamount, 
                                            SUM((orders.Ord_UnitPrice * orders.Ord_Quantity) - (
                                                (SELECT products.P_ActualPrice FROM products WHERE products.P_Id = orders._Product_Id) * orders.Ord_Quantity
                                            )) AS TotalEarning from orders where orders.Ord_Status!=6";

                                            $TotalRevinue = (DatabaseManager::fetch_Assoc($query))["TotalEarning"];

                                            // SROI=Shippings+Refunds+Order+Revenue
                                            $SROI = [
                                                ["name" => "Shippings", "amount" => (DatabaseManager::query("SELECT * from orders where orders.Ord_Status!=6")->num_rows != 0) ? DatabaseManager::select("orders", "SUM(Ord_ShippingPrice) as sp", "Ord_Status!=6")[0]["sp"] : 0],
                                                ["name" => "Refunds", "amount" => (DatabaseManager::query("SELECT * from orders where orders.Ord_Status=6")->num_rows != 0) ? DatabaseManager::select("orders", "SUM(Ord_Quantity * Ord_UnitPrice) as ref", "Ord_Status=6")[0]["ref"] : 0],
                                                ["name" => "Order", "amount" => (DatabaseManager::query("SELECT * from orders where orders.Ord_Status!=6")->num_rows != 0) ? DatabaseManager::select("orders", "SUM(Ord_Quantity * Ord_UnitPrice) as oa", "Ord_Status!=6")[0]["oa"] : 0],
                                                ["name" => "Revenue", "amount" => $TotalRevinue]
                                            ];
                                            $totalAmount = DatabaseManager::select("orders", "sum(Ord_Quantity * Ord_UnitPrice) as ta")[0]["ta"];
                                            foreach ($SROI as $item) {
                                                $name = $item["name"];
                                                $amount = $item["amount"];

                                                // Calculate percentage (if needed)
                                                $percentage = number_format(($amount / $totalAmount) * 100, 2);

                                                // Set the color based on the condition (you can modify this as needed)
                                                $colorClass = "";
                                                if ($name === "Shippings") {
                                                    $colorClass = "text-primary";
                                                } elseif ($name === "Refunds") {
                                                    $colorClass = "text-warning";
                                                } elseif ($name === "Order") {
                                                    $colorClass = "text-danger";
                                                } elseif ($name === "Income") {
                                                    $colorClass = "text-info";
                                                }

                                                // Output the list item
                                                echo '<li class="mb-2">';
                                                echo '<svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-circle-fill ' . $colorClass . '" viewBox="0 0 16 16">';
                                                echo '<circle cx="8" cy="8" r="8" />';
                                                echo '</svg>';
                                                echo '<span class="ms-1">';
                                                echo '<span class="text-dark">' . $name . ' $' . number_format($amount, 2) . '</span>';
                                                echo ' (' . $percentage . '%)';
                                                echo '</span>';
                                                echo '</li>';
                                            }
                                            ?>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row ">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12 mb-6">
                            <!-- card -->
                            <div class="card h-100 card-lg">
                                <!-- card body -->
                                <div class="card-body p-6">
                                    <h3 class="mb-0 fs-5">Sales Overview </h3>
                                    <div class="mt-6">
                                        <!-- text -->
                                        <div class="mb-5">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="fs-6">Total Profit</h5>
                                                <span><span class="me-1 text-dark">$1,619</span> (8.6%)</span>
                                            </div>
                                            <!-- main wrapper -->
                                            <div>
                                                <!-- progressbar -->
                                                <div class="progress bg-light-primary" style="height: 6px;">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        aria-label="Example 1px high" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-5">
                                            <!-- text -->
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="fs-6">Total Income</h5>
                                                <span><span class="me-1 text-dark">$3,571</span> (86.4%)</span>
                                            </div>
                                            <div>
                                                <!-- progressbar -->
                                                <div class="progress bg-info-soft" style="height: 6px;">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        aria-label="Example 1px high" style="width: 88%;"
                                                        aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- text -->
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="fs-6">Total Expenses</h5>
                                                <span><span class="me-1 text-dark">$3,430</span> (74.5%)</span>
                                            </div>
                                            <div>
                                                <!-- progressbar -->
                                                <div class="progress bg-light-danger" style="height: 6px;">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        aria-label="Example 1px high" style="width: 45%;"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12 mb-6">
                            <div class=" position-relative h-100">
                                <!-- card -->
                                <div class="card card-lg mb-6">
                                    <!-- card body -->
                                    <div class="card-body px-6 py-8">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <!-- svg -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="currentColor" class="bi bi-bell text-warning"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                                </svg>
                                            </div>
                                            <!-- text -->
                                            <div class="ms-4">
                                                <h5 class="mb-1">Start your day with New Notification.</h5>
                                                <p class="mb-0">You have <a class="link-info" href="#!">2 new
                                                        notification</a></p>
                                            </div>

                                        </div>



                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card card-lg">
                                    <!-- card body -->
                                    <div class="card-body px-6 py-8">
                                        <div class="d-flex align-items-center">
                                            <!-- svg -->
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="currentColor" class="bi bi-lightbulb text-success"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z" />
                                                </svg>
                                            </div>
                                            <!-- text -->
                                            <div class="ms-4">
                                                <h5 class="mb-1">Monitor your Sales and Profitability</h5>
                                                <p class="mb-0"> <a class="link-info" href="#!">View Performance</a></p>
                                            </div>

                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-6">
                            <div class="card h-100 card-lg">
                                <!-- heading -->
                                <div class="p-6">
                                    <h3 class="mb-0 fs-5">Recent Order</h3>
                                </div>
                                <div class="card-body p-0">
                                    <!-- table -->
                                    <div class="table-responsive">
                                        <table class="table table-centered table-borderless text-nowrap table-hover">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th scope="col">Order Number</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Order Date</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "SELECT 
                                                    orders.Ord_Name as OrderNumber,
                                                    (SELECT products.P_Title from products WHERE products.P_Id=orders._Product_Id) as ProductName,
                                                    orders.Ord_Date as OrderDate,
                                                    (orders.Ord_Quantity*orders.Ord_UnitPrice) as price,
                                                    orders.Ord_Status as OrderStatus
                                                    from orders where   orders.Ord_Date >= DATE_SUB(NOW(), INTERVAL 30 DAY) ";

                                                $res = DatabaseManager::query($query);
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    ?>
                                                    <tr>

                                                        <td>
                                                            <?php echo $row["OrderNumber"] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row["ProductName"] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row["OrderDate"] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo "$" . $row["price"] ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            switch ($row["OrderStatus"]) {
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
                                                            ?>

                                                        </td>

                                                    </tr>

                                                <?php } ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <!-- Libs JS -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>



    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <!-- chart script start-->
    <script defr>
        $(document).ready(() => {

            const theme = {
                primary: "var(--fc-primary)",
                secondary: "var(--fc-secondary)",
                success: "var(--fc-success)",
                info: "var(--fc-info)",
                warning: "var(--fc-warning)",
                danger: "var(--fc-danger)",
                dark: "var(--fc-dark)",
                light: "var(--fc-light)",
                white: "var(--fc-white)",
                gray100: "var(--fc-gray-100)",
                gray200: "var(--fc-gray-200)",
                gray300: "var(--fc-gray-300)",
                gray400: "var(--fc-gray-400)",
                gray500: "var(--fc-gray-500)",
                gray600: "var(--fc-gray-600)",
                gray700: "var(--fc-gray-700)",
                gray800: "var(--fc-gray-800)",
                gray900: "var(--fc-gray-900)",
                black: "var(--fc-black)",
                transparent: "transparent",
            };
            (window.theme = theme),
                (function () {
                    var e;
                    $("#revenueChart").length && ((e = {
                        series: [{
                            name: "Total Income",
                            data: [<?php
                            $currentMonth = date("m");
                            $arr = [];
                            for ($i = 0; $i < $currentMonth; $i++) {
                                if (isset($_GET["filter-year"])) {
                                    $yearas = $_GET["filter-year"];
                                    $query = "SELECT 
                                                                    SUM((orders.Ord_UnitPrice * orders.Ord_Quantity) - (
                                                                        (SELECT products.P_ActualPrice FROM products WHERE products.P_Id = orders._Product_Id) * orders.Ord_Quantity
                                                                    )) AS EarningOfmonth
                                                                FROM orders
                                                                WHERE
                                                                    YEAR(orders.Ord_Date) = $yearas
                                                                    AND MONTH(orders.Ord_Date) = $i
                                                                AND orders.Ord_Status != 6";
                                } else {
                                    $query = "SELECT 
                                                                    SUM((orders.Ord_UnitPrice * orders.Ord_Quantity) - (
                                                                        (SELECT products.P_ActualPrice FROM products WHERE products.P_Id = orders._Product_Id) * orders.Ord_Quantity
                                                                    )) AS EarningOfmonth
                                                                FROM orders
                                                                WHERE
                                                                    YEAR(orders.Ord_Date) = YEAR(CURDATE())
                                                                    AND MONTH(orders.Ord_Date) = $i
                                                                AND orders.Ord_Status != 6";

                                }

                                $req = DatabaseManager::query($query);
                                if ($req->num_rows != 0) {
                                    if ($currentMonth - 1 == $i) {
                                        $data = mysqli_fetch_assoc($req)["EarningOfmonth"];
                                        echo $data;
                                    } else {
                                        echo "0,";

                                    }
                                } else {
                                    echo "0";
                                }
                            }

                            ?>]



                        },
                        {
                            name: "Total Expence",
                            data: [<?php
                            $currentMonth = date("m");
                            $arr = [];
                            for ($i = 0; $i < $currentMonth; $i++) {
                                if (isset($_GET["filter-year"])) {
                                    $yearas = $_GET["filter-year"];
                                    $query = "SELECT SUM(Ord_UnitPrice * Ord_Quantity) AS TotalExpense
                                            FROM orders
                                            WHERE YEAR(Ord_Date) = $yearas AND MONTH(Ord_Date) = $i
                                            AND Ord_Status != 6";
                                } else {

                                    $query = "SELECT SUM(Ord_UnitPrice * Ord_Quantity) AS TotalExpense
                                            FROM orders
                                            WHERE YEAR(Ord_Date) = YEAR(CURDATE()) AND MONTH(Ord_Date) = $i
                                            AND Ord_Status != 6";
                                }
                                $req = DatabaseManager::query($query);
                                if ($req->num_rows != 0) {
                                    if ($currentMonth - 1 == $i) {
                                        $data = mysqli_fetch_assoc($req)["TotalExpense"];
                                        echo $data;
                                    } else {
                                        echo "0,";

                                    }

                                } else {
                                    echo "0";
                                }
                            }
                            ?>]
                        },
                        ],
                        labels: ["Jan", "Feb", "March", "April", "May", "Jun", "Jul", "Aug", "Sep",
                            "Oct", "Nov", "Dec"
                        ],
                        chart: {
                            height: 350,
                            type: "area",
                            toolbar: {
                                show: !1
                            }
                        },
                        dataLabels: {
                            enabled: !1
                        },
                        markers: {
                            size: 5,
                            hover: {
                                size: 6,
                                sizeOffset: 3
                            }
                        },
                        colors: ["#0aad0a", "#ffc107"],
                        stroke: {
                            curve: "smooth",
                            width: 2
                        },
                        grid: {
                            borderColor: window.theme.gray300
                        },
                        xaxis: {
                            labels: {
                                show: !0,
                                align: "right",
                                minWidth: 0,
                                maxWidth: 160,
                                style: {
                                    fontSize: "12px",
                                    fontWeight: 400,
                                    colors: [window.theme.gray600],
                                    fontFamily: '"Inter", "sans-serif"'
                                }
                            },
                            axisBorder: {
                                show: !0,
                                color: window.theme.gray300,
                                height: 1,
                                width: "100%",
                                offsetX: 0,
                                offsetY: 0
                            },
                            axisTicks: {
                                show: !0,
                                borderType: "solid",
                                color: window.theme.gray300,
                                height: 6,
                                offsetX: 0,
                                offsetY: 0
                            },
                        },
                        legend: {
                            position: "top",
                            fontWeight: 600,
                            color: window.theme.gray600,
                            markers: {
                                width: 8,
                                height: 8,
                                strokeWidth: 0,
                                strokeColor: "#fff",
                                fillColors: void 0,
                                radius: 12,
                                customHTML: void 0,
                                onClick: void 0,
                                offsetX: 0,
                                offsetY: 0
                            },
                            labels: {
                                colors: window.theme.gray600,
                                useSeriesColors: !1
                            },
                        },
                        yaxis: {
                            labels: {
                                formatter: function (e) {

                                    return "$" + e;
                                },
                                show: !0,
                                align: "right",
                                minWidth: 0,
                                maxWidth: 160,
                                style: {
                                    fontSize: "12px",
                                    fontWeight: 400,
                                    colors: window.theme.gray600,
                                    fontFamily: '"Inter", "sans-serif"'
                                },
                            },
                        },
                    }),
                        new ApexCharts(document.querySelector("#revenueChart"), e).render()),
                        $("#totalSale").length &&
                        ((e = {
                            series: [<?php echo $SROI[0]["amount"] . "," . $SROI[1]["amount"] . "," . $SROI[2]["amount"] . "," . $SROI[3]["amount"] ?>],
                            labels: ["Shippings", "Refunds", "Order", "Revenue"],
                            colors: ["#0aad0a", "#ffc107", "#db3030", "#016bf8"],
                            chart: {
                                type: "donut",
                                height: 280
                            },
                            legend: {
                                show: !1
                            },
                            dataLabels: {
                                enabled: !1
                            },
                            plotOptions: {
                                pie: {
                                    donut: {
                                        size: "85%",
                                        background: "transparent",
                                        labels: {
                                            show: !0,
                                            name: {
                                                show: !0,
                                                fontSize: "22px",
                                                fontFamily: '"Inter", "sans-serif"',
                                                fontWeight: 600,
                                                colors: [window.theme.gray600],
                                                offsetY: -10,
                                                formatter: function (e) {
                                                    return e;
                                                },
                                            },
                                            value: {
                                                show: !0,
                                                fontSize: "24px",
                                                fontFamily: '"Inter", "sans-serif"',
                                                fontWeight: 800,
                                                colors: window.theme.gray800,
                                                offsetY: 8,
                                                formatter: function (e) {
                                                    return e;
                                                },
                                            },
                                            total: {
                                                show: !0,
                                                showAlways: !1,
                                                label: "Total Metrics",
                                                fontSize: "16px",
                                                fontFamily: '"Inter", "sans-serif"',
                                                fontWeight: 400,
                                                colors: window.theme.gray400,
                                                formatter: function (e) {
                                                    return "$" + e.globals.seriesTotals.reduce((e, r) => e +
                                                        r, 0);
                                                },
                                            },
                                        },
                                    },
                                },
                            },
                            stroke: {
                                width: 0
                            },
                            responsive: [{
                                breakpoint: 1400,
                                options: {
                                    chart: {
                                        type: "donut",
                                        width: 290,
                                        height: 330
                                    }
                                }
                            }],
                        }),
                            new ApexCharts(document.querySelector("#totalSale"), e).render());
                })();
        })
    </script>
    <!-- chart script end-->

</body>


<!-- Mirrored from freshcart.codescandy.com/dashboard/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:10:46 GMT -->

</html>