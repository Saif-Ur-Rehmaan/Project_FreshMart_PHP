<?php
include "config.php";
// wishlish start
if (isset($_POST["RemoveFromWishlist"])) {
    $Pid = $_POST["RemoveFromWishlist"];

    // Find the index of the item to remove
    $index = array_search($Pid, $_SESSION["Wishlist"]);

    $responseToSend = [];
    if ($index !== false) {
        // Remove the item using array_splice
        array_splice($_SESSION["Wishlist"], $index, 1); 
    } else {
        $responseToSend += ["errorWhileRemoving" => "Item not found in the wishlist"];
    }
    $responseToSend += [
        "ProductId" => $Pid,
        "TotalItems" => count($_SESSION["Wishlist"]),
        "session array" => $_SESSION["Wishlist"]
    ];

    echo json_encode($responseToSend);
}

if (isset($_POST["AddToWishlist"])) {

    $productId = $_POST["AddToWishlist"];
    if (!isset($_SESSION["Wishlist"])) {
        $_SESSION["Wishlist"] = [];
        array_push($_SESSION["Wishlist"], $productId);
    } else {
        array_push($_SESSION["Wishlist"], $productId);

    }
    $responcetosend = [
        "ProductId" => $productId,
        "TotalItems" => count($_SESSION["Wishlist"]),
        "session array" => $_SESSION["Wishlist"]
    ];
    echo json_encode($responcetosend);
}
// wishlish end
// addTocart start
if(isset($_POST["AddToCartProduct"])){
    $ProductId=$_POST["AddToCartProduct"];
    if(!isset($_SESSION["Cart"])){
        $_SESSION["Cart"]=[];
        array_push( $_SESSION["Cart"], $ProductId); 
    }else{
        array_push( $_SESSION["Cart"], $ProductId); 
    }

    $ResponceToSent=[
        "Product_Id"=> $ProductId,
        "TotalCartItems"=> count($_SESSION["Cart"]),
        "Cart"=> $_SESSION["Cart"]
    ];
    echo json_encode($ResponceToSent);
}
if(isset($_POST["RemoveFromCartProduct"])){
    $ProductId=$_POST["RemoveFromCartProduct"];
     $index=array_search($ProductId,$_SESSION["Cart"]);
     if($index!==false){
        array_splice($_SESSION["Cart"],$index,1);
     }else{
        $ResponceToSent+=["error"=>"index not present"];
     }

    $ResponceToSent=[
        "Product_Id"=> $ProductId,
        "TotalCartItems"=> count($_SESSION["Cart"]),
        "Cart"=> $_SESSION["Cart"]
    ];
    echo json_encode($ResponceToSent);
}
// addTocart end

?>