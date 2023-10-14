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