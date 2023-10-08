<?php

use function PHPSTORM_META\type;

 include "inc/config.php"; ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/dashboard/add-product.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:27 GMT -->
<?php include "inc/head/head1.php"; ?>

<body>
    <!-- main wrapper -->

    <?php include 'inc/nav/nav.php' ?>
    <div class="main-wrapper">
        <!-- navbar vertical -->

        <?php include 'inc/nav/nav2.php' ?>


        <!-- main -->
        <main class="main-content-wrapper">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row mb-8">
                    <div class="col-md-12">
                        <div class="d-md-flex justify-content-between align-items-center">
                            <!-- page header -->
                            <div>
                                <h2>Add New Product</h2>
                                <!-- breacrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="text-inherit">Products</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                                    </ol>
                                </nav>
                            </div>
                            <!-- button -->
                            <div>
                                <a href="products.php" class="btn btn-light">Back to Product</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- row -->
                <form action="phpworkshop/productmanage.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <?php
                        if (isset($_GET['EditProductOfId'])) {
                            $EditId = $_GET['EditProductOfId'];
                            
                            if (!is_numeric($EditId)) {
                                    echo "<script>window.location.href='../pages/404error.php'</script>";
                                die();
                            }

                            $query = "SELECT * FROM `products` WHERE `P_Id`=$EditId";
                            if ( mysqli_query($connection, $query)->num_rows == 0) {
                                    echo "<script>window.location.href='../pages/404error.php'</script>";
                                die();
                            }
                                $row = mysqli_fetch_assoc(mysqli_query($connection, $query));

                            // echo "<pre>";
                            // print_r($row);
                            // echo "</pre>";
                            ?>
                            <div class="col-lg-8 col-12">
                                <!-- card -->
                                <div class="card mb-6 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6 ">
                                        <h4 class="mb-4 h5">Product Information</h4>
                                        <div class="row">
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $row["P_Title"]; ?>" name="P_Title"
                                                    placeholder="Product Name" required>
                                            </div>
                                            <!-- input catagori -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Product Category</label>
                                                <select name="_Catagory_id" class="form-select">
                                                    <option>Product Category</option>
                                                    <!-- value my Catagori id aai gi jo forien key h  -->
                                                    <?php $cname = DatabaseManager::select("categories", 'C_name,C_id');
                                                    $catid = $row["_Category_id"];
                                                    foreach ($cname as $key => $value) {
                                                        $a = $value["C_name"];
                                                        $b = $value["C_id"];
                                                        $c = ($catId == $row['_Catagory_id']) ? 'checked' : "";
                                                        echo "<option $c  value='$b'>$a</option>";
                                                    } ?>
                                                    <!-- <option value="2" <?php //$catId=0;if ($catId==$row['_Catagory_id']) { echo 'checked';} 
                                                        ?>>DryFruit & Bakery</option> -->

                                                    <!-- php loop chly ga or categori ki table sy catagories aain gi -->
                                                </select>
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label for="P_Weight" class="form-label">Weight</label>
                                                <input type="text" id="P_Weight" value="<?php echo $row["P_Weight"] ?>"
                                                    name="P_Weight" class="form-control" placeholder="Weight" required>
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label for="P_Units" class="form-label">Units</label>
                                                <select name="P_Units" class="form-select">
                                                    <option>Select Units</option>
                                                    <option <?php echo ($row["P_Units"] == "10") ? "selected" : ""; ?>
                                                        value="10">10</option>
                                                    <option <?php echo ($row["P_Units"] == "20") ? "selected" : ""; ?>
                                                        value="20">20</option>
                                                    <option <?php echo ($row["P_Units"] == "30") ? "selected" : ""; ?>
                                                        value="30">30</option>
                                                </select>
                                            </div>
                                            <div>
                                                <div class="mb-3 col-lg-12 mt-5">
                                                    <!-- heading -->
                                                    <h4 class="mb-3 h5">Product Images</h4>

                                                    <!-- input -->
                                                    <div action="#" style="min-height: 20vh; cursor: pointer;" id="dropbox"
                                                        class="d-flex justify-content-center border-dashed rounded-2 ">

                                                        <div class="fallback d-flex align-items-center">

                                                            <input name="file" type="file" id="choosefile" multiple>
                                                            <style>

                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-12 mt-5">
                                                <h4 class="mb-3 h5">Product Descriptions</h4>
                                                <textarea class="py-8" style="width: inherit;" name="P_Description"
                                                    id=""><?php echo $row["P_Description"]; ?></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-12">
                                <!-- card -->
                                <div class="card mb-6 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <!-- input -->
                                        <div class="form-check form-switch mb-4">
                                            <input <?php echo ($row["P_InStock"] == 1) ? "checked" : ""; ?> name="P_InStock"
                                                class="form-check-input" type="checkbox" role="switch" id="flexSwitchStock">
                                            <label class="form-check-label" for="flexSwitchStock">In Stock</label>
                                        </div>
                                        <!-- input -->
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label" for="P_Code">Product Code</label>
                                                <input type="text" value="<?php echo $row["P_Code"] ?>" name="P_Code"
                                                    class="form-control" placeholder="Enter Product Title">
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">Product SKU</label>
                                                <input type="text" value="<?php echo $row["P_SKU"] ?>" name="P_SKU"
                                                    class="form-control" placeholder="Enter Product Title">
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">Status</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php echo ($row["P_Status"] == 1) ? "checked" : ""; ?> name="P_Status"
                                                        id="inlineRadio1" value="1">
                                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                                </div>
                                                <!-- input -->
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" <?php echo ($row["P_Status"] == 0) ? "checked" : ""; ?> name="P_Status"
                                                        id="inlineRadio2" value="0">
                                                    <label class="form-check-label" for="inlineRadio2">Disabled</label>
                                                </div>
                                                <!-- input -->

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card mb-6 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <h4 class="mb-4 h5">Product Price</h4>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Regular Price</label>
                                            <input type="text" value="<?php echo $row["P_RegularPrice"] ?>"
                                                name="P_RegularPrice" class="form-control" placeholder="$0.00">
                                        </div>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Sale Price</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo $row["P_SalePrice"] ?>" name="P_SalePrice"
                                                placeholder="$0.00">
                                        </div>

                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card mb-6 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <h4 class="mb-4 h5">Meta Data</h4>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Meta Title</label>
                                            <input type="text" value="<?php echo $row["P_MetaTitle"] ?>" name="P_MetaTitle"
                                                class="form-control" placeholder="Title">
                                        </div>

                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Meta Description</label>
                                            <textarea name="P_MetaDescription" class="form-control" rows="3"
                                                placeholder="Meta Description"><?php echo $row["P_MetaDescription"] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- button -->
                                <div class="d-grid">

                                    <input type="submit" class="btn btn-primary" value="EDIT Product" name="Edit_Product">
                                    <input style="visibility: hidden;" class="btn btn-primary"
                                        value="<?php echo $row["P_Id"] ?>" name="Edit_Product_id">

                                </div>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="col-lg-8 col-12">
                                <!-- card -->
                                <div class="card mb-6 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6 ">
                                        <h4 class="mb-4 h5">Product Information</h4>
                                        <div class="row">
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control" name="P_Title" id="productTitle"
                                                    placeholder="Product Name" required>
                                            </div>
                                            <!-- input catagori -->
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Product Category</label>
                                                <select name="_Catagory_id" class="form-select">
                                                    <option selected>Product Category</option>
                                                    <?php $cname = DatabaseManager::select("categories", 'C_name,C_id');
                                                    
                                                    foreach ($cname as $key => $value) {
                                                        $a = $value["C_name"];
                                                        $b = $value["C_id"];
                                                        echo "<option  value='$b'>$a</option>";
                                                    } 
                                                    ?>
                                                    <!-- value my Catagori id aai gi jo forien key h  -->
                                                    <!-- <option value="2">DryFruit & Bakery</option> -->

                                                    <!-- php loop chly ga or categori ki table sy catagories aain gi -->
                                                </select>
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label for="P_Weight" class="form-label">Weight</label>
                                                <input type="text" id="P_Weight" name="P_Weight" class="form-control"
                                                    placeholder="Weight" required>
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-6">
                                                <label for="P_Units" class="form-label">Units</label>
                                                <select name="P_Units" class="form-select">
                                                    <option selected>Select Units</option>
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                </select>
                                            </div>
                                            <div>
                                                <div class="mb-3 col-lg-12 mt-5">
                                                    <!-- heading -->
                                                    <h4 class="mb-3 h5">Product Images</h4>

                                                    <!-- input -->
                                                    <div action="#" style="min-height: 20vh; cursor: pointer;" id="dropbox"
                                                        class="d-flex justify-content-center border-dashed rounded-2 ">

                                                        <div class="fallback d-flex align-items-center">
                                                            <input name="file" type="file" id="choosefile" multiple>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3 col-lg-12 mt-5">
                                                <h4 class="mb-3 h5">Product Descriptions</h4>
                                                <textarea class="py-8" style="width: inherit;" name="P_Description"
                                                    id="editor"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4 col-12">
                                <!-- card -->
                                <div class="card mb-6 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <!-- input -->
                                        <div class="form-check form-switch mb-4">
                                            <input name="P_InStock" class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchStock" checked>
                                            <label class="form-check-label" for="flexSwitchStock">In Stock</label>
                                        </div>
                                        <!-- input -->
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label" for="P_Code">Product Code</label>
                                                <input type="text" name="P_Code" id="productCode" class="form-control"
                                                    placeholder="Enter Product Title">
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">Product SKU</label>
                                                <input type="text" name="P_SKU" id="productSKU" class="form-control"
                                                    placeholder="Enter Product Title">
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">Status</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="P_Status"
                                                        id="inlineRadio1" value="1" checked>
                                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                                </div>
                                                <!-- input -->
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="P_Status"
                                                        id="inlineRadio2" value="0">
                                                    <label class="form-check-label" for="inlineRadio2">Disabled</label>
                                                </div>
                                                <!-- input -->

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card mb-6 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <h4 class="mb-4 h5">Product Price</h4>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Regular Price</label>
                                            <input type="text" name="P_RegularPrice" class="form-control"
                                                placeholder="$0.00">
                                        </div>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Sale Price</label>
                                            <input type="text" class="form-control" name="P_SalePrice" placeholder="$0.00">
                                        </div>

                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card mb-6 card-lg">
                                    <!-- card body -->
                                    <div class="card-body p-6">
                                        <h4 class="mb-4 h5">Meta Data</h4>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Meta Title</label>
                                            <input type="text" name="P_MetaTitle" id="metaTitle" class="form-control"
                                                placeholder="Title">
                                        </div>

                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Meta Description</label>
                                            <textarea name="P_MetaDescription" class="form-control" rows="3"
                                                placeholder="Meta Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- button -->
                                <div class="d-grid">

                                    <input type="submit" class="btn btn-primary" value="Create Product" name="Add_Product">

                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </form>

                <div>
        </main>

    </div>


    <!-- Libs JS -->
     <?php include "../inc/LibsJs.php"?>
    
    

    <!-- Theme JS -->
     <script src="../assets/js/theme.min.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script src="../assets/js/vendors/editor.js"></script>
    <script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script>
        $(document).ready(() => {
            // Reference to the input fields
            const productTitleInput = $('#productTitle');
            const metaTitleInput = $('#metaTitle');
            const productSKUInput = $('#productSKU');
            const productCodeInput = $('#productCode');

            function mixstrandnum(str) {
                var string = "hi";

                // Convert the string to an array of characters
                var characters = string.split('');

                // Shuffle the array randomly
                for (var i = characters.length - 1; i > 0; i--) {
                    var j = Math.floor(Math.random() * (i + 1));
                    var temp = characters[i];
                    characters[i] = characters[j];
                    characters[j] = temp;
                }

                // Join the shuffled characters back into a string
                var output = characters.join('');

                console.log(output);

            }
            // Listen for user input in the product title field
            productTitleInput.on('keyup', () => {




                console.log("hihihi");
                // Get the value entered by the user
                const titleValue = productTitleInput.val();

                // Generate a meta title (you can customize this logic)
                const metaTitle = `Meta Title for ${titleValue}`;

                // Generate a product SKU (you can customize this logic)

                let productSKU = `SKU-${titleValue.replace(/\s/g, '-')}`;
                productSKU += Math.floor(Math.random() * Math.random() * 1000)

                // Generate a product code (you can customize this logic)
                let productCode = `CODE-${titleValue.replace(/\s/g, '-')}`;
                productCode += Math.floor(Math.random() * Math.random() * 1000)

                // Update the corresponding input fields
                metaTitleInput.val(metaTitle);
                productSKUInput.val(productSKU);
                productCodeInput.val(productCode);

            });



        });

    </script>
</body>


<!-- Mirrored from freshcart.codescandy.com/dashboard/add-product.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:27 GMT -->

</html>