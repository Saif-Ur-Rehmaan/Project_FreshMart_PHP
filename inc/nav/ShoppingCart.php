<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header border-bottom">
    <div class="text-start">
      <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
      <small>Location in 382480</small>
    </div>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

    <div class="">
      <!-- alert -->
      <!-- <div class="alert alert-danger p-2" role="alert">
          You’ve got FREE delivery. Start <a href="#!" class="alert-link">checkout now!</a>
        </div> -->
      <ul class="list-group list-group-flush" id="_SidebarCart">
        <!-- list group -->
        <?php
        if (!isset($_SESSION["Cart"])) {
          $_SESSION["Cart"] = [];
        }

        $totalCartPrice = 0;

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
            ?>
            <li class="list-group-item py-3 ps-0 border-top">
              <!-- row -->
              <div class="row align-items-center">
                <div class="col-3 col-md-2">
                  <!-- img --> <img src="assets/images/<?= $value["PImg"] ?>" alt="<?= $value["Pname"] ?>"
                    class="img-fluid">
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
          <?php }
        }

        // Display the total cart price
        ?>
        <li class="list-group-item py-3 ps-0 border-top">
          <div class="row">
            <div class="col-12 text-lg-end text-start text-md-end">
              <span class="fw-bold">Total Price:
                <?= number_format($totalCartPrice, 2) ?>
              </span>
            </div>
          </div>
        </li>
        <?php
        ?>
      </ul>
      <script defer>
    let addbtn = document.getElementsByClassName("_addQuantity");
    let rembtn = document.getElementsByClassName("_removeQuantity");
    let quantityFields = document.getElementsByClassName("quantity-field");
    let totalBoxes = document.getElementsByClassName("_Tbox");
    let priceForCart = document.getElementsByClassName("_price");

    for (let i = 0; i < addbtn.length; i++) {
        const addb = addbtn[i];
        const remb = rembtn[i];
        const quantityField = quantityFields[i];

        addb.addEventListener("click", (e) => {
            let price = parseFloat(priceForCart[i].textContent);
            let quantity = parseInt(quantityField.value);
            quantityField.value = quantity + 1;
            totalBoxes[i].textContent = (price * (quantity + 1)).toFixed(2);
        });

        remb.addEventListener("click", (e) => {
            let price = parseFloat(priceForCart[i].textContent);
            let quantity = parseInt(quantityField.value);
            if (quantity > 1) {
                quantityField.value = quantity - 1;
                totalBoxes[i].textContent = (price * (quantity - 1)).toFixed(2);
            }
        });
    }
</script>


      <!-- list group -->


      </ul>
      <!-- btn -->
      <div class="d-flex justify-content-between mt-4">
        <a href="#!" class="btn btn-primary">Continue Shopping</a>
        <a href="#!" class="btn btn-dark">Update Cart</a>
      </div>

    </div>
  </div>
</div>