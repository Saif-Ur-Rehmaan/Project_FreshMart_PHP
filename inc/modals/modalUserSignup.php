<?php 

$filename = basename($_SERVER["SCRIPT_NAME"]);
// echo $filename;
$slashOrNotForLink = ($filename == "index.php") ? "pages/" : "../";
?>
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
  <?php
  if (isset($_SESSION["UserLogin"])) { ?>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-4">
        <div class="modal-header border-0">
          <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Personal Info :)</h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>



        <div class="modal-body">
          <form>
            <!-- name -->
            <div class="mb-3">
              <div class="row">
                <p class="col-2 fw-100"  style="color: #0aad0a;" for="fullName" class="">Name : </p>
                <p class="col-10" ><?php echo $_SESSION["UserLogin"]["Full Name"]; ?></p>

              </div>
            </div>
            <!-- mail -->
            <div class="mb-3">
              <div class="row">
                <p class="col-2 fw-100"  style="color: #0aad0a;" for="fullName" class="">Email : </p>
                <p class="col-10" ><?php echo $_SESSION["UserLogin"]["Email"]; ?></p>
              </div>
            </div>
            <!-- contact no -->
            <div class="mb-3">
              <div class="row">
                <p class="col-3 fw-100" style="color: #0aad0a;"  for="fullName" class="">Contact : </p>
                <p class="col-9" ><?php echo $_SESSION["UserLogin"]["ContactNumber"]; ?></p>
              </div>
            </div>
            <!-- address -->
            <div class="mb-3">
              <div class="row">
                <p class="col-3 fw-100" style="color: #0aad0a;"  for="fullName" class="">Address : </p>
                <p class="col-9" ><?php echo $_SESSION["UserLogin"]["Address"]; ?></p>
              </div>
            </div><br>
            <a href="<?php echo $slashOrNotForLink; ?>account-settings.php" class="btn btn-primary">Edit Info</a>
          </form>
        </div>
        
      </div>
    </div>
  <?php } else { ?>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-4">
        <div class="modal-header border-0">
          <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign Up</h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>



        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="fullName" class="form-label">Name</label>
              <input type="text" class="form-control" id="fullName" placeholder="Enter Your Name" required="">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email address" required="">
            </div>

            <div class="mb-5">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter Password" required="">
              <small class="form-text">By Signup, you agree to our <a href="#!">Terms of Service</a> & <a
                  href="#!">Privacy Policy</a></small>
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
          </form>
        </div>
        <div class="modal-footer border-0 justify-content-center">

          Already have an account? <a href="pages/signin.php">Sign in</a>
        </div>
      </div>
    </div>

  <?php } ?>
</div>