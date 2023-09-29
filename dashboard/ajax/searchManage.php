<?php include "../inc/config.php"; 
if(isset($_GET['ProductSearch'])){
    $searchquery=$_GET['ProductSearch'];
    $filter_status=$_GET['filter_status'];
    $data=DatabaseManager::select("products","*","P_Title like '%$searchquery%' and P_Status like '%$filter_status%'");
    echo json_encode($data,1);
}


if(isset($_GET['CategorySearch'])){
    $searchquery=$_GET['CategorySearch'];
    $filter_status=$_GET['filter_status'];
    $data=DatabaseManager::select("SearchCatView","*","C_name like '%$searchquery%' and C_Status like '%$filter_status%'");
    echo json_encode($data,1);
}
if(isset($_GET['OrderSearch'])){
    $searchquery=$_GET['OrderSearch'];
    $filter_status=$_GET['filter_status'];
    $data=DatabaseManager::select("orders","*","C_name like '%$searchquery%' and C_Status like '%$filter_status%'");
    echo json_encode($data,1);
}
 


?>