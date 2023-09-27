<!-- add product work start -->
<?php
$connection = mysqli_connect('localhost', 'root', '', 'freshcart');
if (isset($_POST["Add_Product"])) {
    $P_Title = $_POST["P_Title"];
    $_Catagori = $_POST["_Catagori"];
    $P_Weight = $_POST["P_Weight"];
    $P_Units = $_POST["P_Units"];
    $P_Description = $_POST["P_Description"];

    if (isset($_POST["P_InStock"])) {
        $P_InStock = 1;
    } else {
        $P_InStock = 0;
    }


    $P_Code = $_POST["P_Code"];
    $P_SKU = $_POST["P_SKU"];
    $P_Status = $_POST["P_Status"];
    $P_RegularPrice = $_POST["P_RegularPrice"];
    $P_SalePrice = $_POST["P_SalePrice"];
    $P_MetaTitle = $_POST["P_MetaTitle"];
    $P_MetaDescription = $_POST["P_MetaDescription"];

    $images = $_FILES["file"]; //array

    $P_Images = $_FILES['file']['name'][0];
    $from = $_FILES['file']['tmp_name'][0];
    

 
            
    $query = "INSERT INTO `products` (`P_Title`,`_Catagori`, `P_Weight`, `P_Units`, `P_Images`, `P_Description`, `P_InStock`, `P_Code`, `P_SKU`, `P_Status`, `P_RegularPrice`, `P_SalePrice`, `P_MetaTitle`, `P_MetaDescription`)
   VALUES ('$P_Title','$_Catagori', '$P_Weight', '$P_Units', '$P_Images', '$P_Description', '$P_InStock', '$P_Code', '$P_SKU', '$P_Status', '$P_RegularPrice', '$P_SalePrice', '$P_MetaTitle', '$P_MetaDescription')";

    $connection = mysqli_connect('localhost', 'root', '', 'freshcart');
    if (mysqli_query($connection, $query)) {
        if (move_uploaded_file($form, $to)) {
        } else {
            echo "not done";
        };
        header('location: ../products.php');
        die();
    };
}
?>
<!-- add product work end -->


<!-- Delete Product start -->
<?php

if (isset($_GET["DeleteProductOfId"])) {
    $ID = $_GET["DeleteProductOfId"];

    if (mysqli_query($connection, "DELETE FROM `products` WHERE `P_Id` = $ID")) {
        header('location: ../products.php');
    }
}

?>



<!-- Delete Product end -->

<!-- edit Product start -->
<?php
if (isset($_POST["Edit_Product"])) {
    $Edit_Product_id = $_POST["Edit_Product_id"];
    echo $Edit_Product_id;
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    echo "</pre>";


    $P_Title = $_POST["P_Title"];
    $_Catagori = $_POST["_Catagori"];
    $P_Weight = $_POST["P_Weight"];
    $P_Units = $_POST["P_Units"];
    $P_Description = $_POST["P_Description"];

    if (isset($_POST["P_InStock"])) {
        $P_InStock = 1;
    } else {
        $P_InStock = 0;
    }


    $P_Code = $_POST["P_Code"];
    $P_SKU = $_POST["P_SKU"];
    $P_Status = $_POST["P_Status"];
    $P_RegularPrice = $_POST["P_RegularPrice"];
    $P_SalePrice = $_POST["P_SalePrice"];
    $P_MetaTitle = $_POST["P_MetaTitle"];
    $P_MetaDescription = $_POST["P_MetaDescription"];

    $images = $_FILES["file"]; //array

    $P_Images = $_FILES['file']['name'][0];
    $from = $_FILES['file']['tmp_name'][0];
    $to = '../assets/images/products/' . $name;
     




  if($P_Images!=null){
    $editQuery = "UPDATE `products` SET `P_Title` = '$P_Title', `P_Weight` = '$P_Weight', `P_Units` = '$P_Units', `P_Images` = '$P_Images', `P_Description` = '$P_Description',`P_Status`='$P_Status',`P_InStock`='$P_InStock',`Date`=CURRENT_TIMESTAMP() , `P_Code` = '$P_Code', `P_SKU` = '$P_SKU', `P_RegularPrice` = '$P_RegularPrice', `P_SalePrice` = '$P_SalePrice', `P_MetaTitle` = '$P_MetaTitle', `P_MetaDescription` = '$P_MetaDescription' WHERE `products`.`P_Id` = $Edit_Product_id
    ";
    // echo $editQuery;
}else{
    $editQuery = "UPDATE `products` SET `P_Title` = '$P_Title', `P_Weight` = '$P_Weight', `P_Units` = '$P_Units', `P_Description` = '$P_Description',`P_Status`='$P_Status',`P_InStock`='$P_InStock',`Date`=CURRENT_TIMESTAMP() , `P_Code` = '$P_Code', `P_SKU` = '$P_SKU', `P_RegularPrice` = '$P_RegularPrice', `P_SalePrice` = '$P_SalePrice', `P_MetaTitle` = '$P_MetaTitle', `P_MetaDescription` = '$P_MetaDescription' WHERE `products`.`P_Id` = $Edit_Product_id
    ";
    // echo $editQuery;

  }
    if (mysqli_query($connection, $editQuery)) {
        header("location: ../products.php");
        die();
    } else {
        echo "<scrript>alert('product not added')</scrript>";
    };
}


?>

<!-- edit Product end -->