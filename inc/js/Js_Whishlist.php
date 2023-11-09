<?php 

$filename = basename($_SERVER["SCRIPT_NAME"]);
$slashOrNot = ($filename == "index.php") ? "" : "../";
?>
   <script>
        // wishlist add and remove
        let wishBtns = document.getElementsByClassName("_WishlishBtn");
        let wishicons = document.getElementsByClassName("_WishlishHeartIcon");
        let CountWishlist = document.getElementById("CountWishlist");
        for (let i = 0; i < wishBtns.length; i++) {
            const Wbtn = wishBtns[i];
            Wbtn.addEventListener("click", (e) => {
                let clickedbtn = wishBtns[i];
                let icon = wishicons[i];
                let product = clickedbtn.getAttribute("data-custom-product-id")
                let AddedOrNot = clickedbtn.getAttribute("data-bs-original-title");

                if (AddedOrNot == 'Wishlist') {

                    $.ajax({
                        url: '<?=$slashOrNot?>inc/worker.php',
                        method: 'POST',
                        data: {
                            AddToWishlist: product
                        },
                        success: (responce) => {
                            let res = JSON.parse(responce);
                            //changing icon
                            icon.classList = "bi bi-heart-fill _WishlishHeartIcon";
                            icon.style.color = "green";
                            //changing class and tooltip

                            clickedbtn.setAttribute("data-bs-original-title", "Added");

                            CountWishlist.innerText = res.TotalItems


                        },
                        error: (error) => {
                            console.error(error);
                        }
                    })
                } else if (AddedOrNot == "Added") {
                    $.ajax({
                        url: '<?=$slashOrNot?>inc/worker.php',
                        method: 'POST',
                        data: {
                            RemoveFromWishlist: product
                        },
                        success: (responce) => {
                            let res = JSON.parse(responce);
                            //changing icon
                            icon.classList = "bi bi-heart _WishlishHeartIcon";
                            icon.style.color = " ";
                            //changing class and tooltip

                            clickedbtn.setAttribute("data-bs-original-title", "Wishlist");

                            CountWishlist.innerText = res.TotalItems

                        },
                        error: (error) => {
                            console.error(error);
                        }
                    })

                } else {
                    console.log("added or not attr is : " + AddedOrNot);
                }

            })
        }
    </script>