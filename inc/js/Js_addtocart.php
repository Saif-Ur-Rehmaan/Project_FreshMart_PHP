<?php 

$filename = basename($_SERVER["SCRIPT_NAME"]);
$slashOrNot = ($filename == "index.php") ? "" : "../";
?>
 <script>
        //add and remove product from cart
        $(document).ready(() => {
            let AddtocartBtns = document.getElementsByClassName("_AddToCartBtn");
            let AddtocartPlusIcon = document.getElementsByClassName("_addIcon");
            let AddtocartText = document.getElementsByClassName("_addtext");
            let cartProductCounter=document.getElementsByClassName("_CountCartItem");
            for (let i = 0; i < AddtocartBtns.length; i++) {
                const ADBTN = AddtocartBtns[i];


                ADBTN.addEventListener("click", (e) => {
                    let clickedbtn=AddtocartBtns[i];
                    let productId = clickedbtn.getAttribute("data-Product_id");
                    let IsAdded = clickedbtn.getAttribute("data-custom-attr"); 
                    if (IsAdded=="Add") {
                        $.ajax({
                            url: '<?= $slashOrNot?>inc/worker.php',
                            method: 'POST',
                            data: {
                                AddToCartProduct: productId
                            },
                            success: (responce) => {
                                let res = JSON.parse(responce) 
                                clickedbtn.setAttribute("data-custom-attr","Added") 
                                AddtocartText[i].innerText = "Added";
                                
                                AddtocartPlusIcon[i].innerHTML='<polyline points="20 6 9 17 4 12"></polyline>';//ok icon
                                for (let ac = 0; ac < cartProductCounter.length; ac++) {
                                    const a = cartProductCounter[ac];
                                    a.innerHTML=res.TotalCartItems;
                                }
                            },
                            error: (error) => {
                                console.error(error);
                            }
                        });
                  
                        
                    }else{
                        $.ajax({
                            url: '<?= $slashOrNot?>inc/worker.php',
                            method: 'POST',
                            data: {
                                RemoveFromCartProduct: productId
                            },
                            success: (responce) => {
                                let res = JSON.parse(responce) ;
                                AddtocartText[i].innerText = "Add";
                                clickedbtn.setAttribute("data-custom-attr","Add")
                                AddtocartPlusIcon[i].innerHTML=' <line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line>';//ok icon
                                for (let ac = 0; ac < cartProductCounter.length; ac++) {
                                    const a = cartProductCounter[ac];
                                    a.innerHTML=res.TotalCartItems;
                                }
                            
                            },
                            error: (error) => {
                                console.error(error);
                            }
                        }) 
                    }
                    $.ajax({
                            url: '<?= $slashOrNot?>inc/worker.php',
                            method: 'POST',
                            data: {
                                RefreshSidebarCart:true
                            },
                            success: (responce) => { 
                                let res = JSON.parse(responce) 
                                document.getElementById("_SidebarCart").innerHTML=res; 
                                
                            },
                            error: (error) => {
                                console.error(error);
                            }
                        });

                })
            }
        })
    </script>