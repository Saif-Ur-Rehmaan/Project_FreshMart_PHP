<?php include "../inc/config.php";
if (isset($_GET['ProductSearch'])) {
    $searchquery = $_GET['ProductSearch'];
    $filter_status = $_GET['filter_status'];
    $data = DatabaseManager::select("products", "*", "P_Title like '%$searchquery%' and P_Status like '%$filter_status%'");
    echo json_encode($data, 1);
}


if (isset($_GET['CategorySearch'])) {
    $searchquery = $_GET['CategorySearch'];
    $filter_status = $_GET['filter_status'];
    $data = DatabaseManager::select("SearchCatView", "*", "C_name like '%$searchquery%' and C_Status like '%$filter_status%'");
    echo json_encode($data, 1);
}
if (isset($_GET['OrderSearch'])) {
    $searchquery = $_GET['OrderSearch'];
    $filter_status = $_GET['filter_status'];
    $data = DatabaseManager::select("SearchOrderView", "*", "(Ord_Name like '%$searchquery%' OR Use_PaymentMethod like'%$searchquery%' OR Cli_DisplayName like '%$searchquery%')  AND Ord_Status like '%$filter_status%'");
    echo json_encode($data, 1);
}

if (isset($_GET['SellerSearch'])) {
    $searchquery = $_GET['SellerSearch'];

    $data = DatabaseManager::select("sellers"
    ,    
    "
    sellers._Client_Id as _Client_Id,
    (select SUM(searchorderview.Totalamount) from searchorderview WHERE searchorderview._Client_Id=_Client_Id AND searchorderview.Ord_Status=5) as TotalStoreSell,
    (SELECT clients.Cli_Mail from clients WHERE clients.Cli_Id=_Client_Id) as Mail,
    (SELECT sellers.Sel_StoreName from sellers WHERE sellers._Client_Id=_Client_Id) as StoreName,
    (SELECT sellers.Sel_Id from sellers WHERE sellers._Client_Id=_Client_Id) as SellerId
    "
    ,    
    "(SELECT clients.Cli_Mail from clients WHERE clients.Cli_Id=_Client_Id) like '%$searchquery%' 
    OR
    (SELECT sellers.Sel_Id from sellers WHERE sellers._Client_Id=_Client_Id) like'%$searchquery%' 
    OR
    (SELECT sellers.Sel_StoreName from sellers WHERE sellers._Client_Id=_Client_Id) like '%$searchquery%'");
    echo json_encode($data, 1);
}

if (isset($_GET['CustomerSearch'])) {
    $searchquery = $_GET['CustomerSearch'];
    $data = DatabaseManager::select("customersview", "*", "
    CustomerName like '%$searchquery%' OR Mail like '%$searchquery%' OR ContactNo like '%$searchquery%'
    ");
    echo json_encode($data, 1);
}
if (isset($_GET['ReviewSearch'])) {
    $searchquery = $_GET['ReviewSearch'];
    
    $filter_status = $_GET['filter_status'];
    $data = DatabaseManager::select("ReviewsOfCustomersView", "*", "
    (CustomerName like '%$searchquery%' OR ProductName like '%$searchquery%') AND RatingStar like '%$filter_status%'");
    echo json_encode($data, 1);
}

?>