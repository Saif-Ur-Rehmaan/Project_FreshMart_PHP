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

?>