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
if(isset($_POST["RefreshSidebarCart"])){
    if (!isset($_SESSION["Cart"])) {
        $_SESSION["Cart"] = [];
    }

    $totalCartPrice = 0;
    $html = "";
    for ($i = 0; $i < count($_SESSION["Cart"]); $i++) {
        $Pid = $_SESSION["Cart"][$i];
        $Data = DatabaseManager::select("products", "
        P_Images as PImg,
        P_Title as Pname,
        P_Weight as Pw,
        P_SalePrice as SelP,
        P_RegularPrice as RegPrice
    ", "P_Id=$Pid");

        foreach ($Data as $key => $value) {
            $price = $value["SelP"]; // Use the sale price as the price
            $quantity = 1; // Default quantity

            if (isset($_SESSION["Cart"][$Pid])) {
                $quantity = $_SESSION["Cart"][$Pid];
            }

            $totalProductPrice = $price * $quantity;
            $totalCartPrice += $totalProductPrice;
            ob_start();
            ?>
            <li class="list-group-item py-3 ps-0 border-top">
                <!-- row -->
                <div class="row align-items-center">
                    <div class="col-3 col-md-2">
                        <!-- img --> <img src="assets/images/<?= $value["PImg"] ?>" alt="<?= $value["Pname"] ?>" class="img-fluid">
                    </div>
                    <div class="col-4 col-md-6 col-lg-5">
                        <!-- title -->
                        <a href="pages/shop-single.php" class="text-inherit">
                            <h6 class="mb-0">
                                <?= $value["Pname"] ?>
                            </h6>
                        </a>
                        <span><small class="text-muted"><span class="_price">
                                    <?= $value["RegPrice"] ?>
                                </span>/
                                <?= $value["Pw"] ?>
                            </small></span>
                        <!-- text -->
                        <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
                                    class="me-1 align-text-bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-trash-2 text-success">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg></span><span class="text-muted">Remove</span></a></div>
                    </div>
                    <!-- input group -->
                    <div class="col-3 col-md-3 col-lg-3">
                        <!-- input -->
                        <!-- input -->
                        <div class="input-group input-spinner  ">
                            <input type="button" value="-" class="button-minus _removeQuantity btn btn-sm" data-field="quantity">
                            <input type="number" readonly step="1" minlength="1" max="10" value="1" name="quantity"
                                class="quantity-field   form-control-sm form-input">
                            <input type="button" value="+" class="button-plus btn btn-sm _addQuantity" data-field="quantity">
                        </div>
                    </div>
                    <!-- price -->
                    <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                        <span class="fw-bold _Tbox">
                            <?= number_format($totalProductPrice, 2) ?>
                        </span>
                    </div>
                </div>
            </li>

            <?php
            $html .= ob_get_clean();
        }
    }
    echo json_encode($html);
}
// addTocart end

?>