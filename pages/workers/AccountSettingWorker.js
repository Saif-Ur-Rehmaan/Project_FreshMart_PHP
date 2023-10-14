self.addEventListener("message",(e)=>{
    let content="";
    let NeedResponceOf=e.data;

if (NeedResponceOf=="Orders") {
    content =`   <div class="py-6 p-md-6 p-lg-10">
    <!-- heading -->
    <h2 class="mb-6">Your Orders</h2>

    <div class="table-responsive-xxl border-0">
      <!-- Table -->
      <table class="table mb-0 text-nowrap table-centered ">
        <!-- Table Head -->
        <thead class="bg-light">
          <tr>
            <th>&nbsp;</th>
            <th>Product</th>
            <th>Order</th>
            <th>Date</th>
            <th>Items</th>
            <th>Status</th>
            <th>Amount</th>

            <th></th>
          </tr>
        </thead>
        <tbody>
          <!-- Table body -->
          <tr>
            <td class="align-middle border-top-0 w-0">
              <a href="#"> <img src="../assets/images/product-img-1.jpg" alt="Ecommerce"
                  class="icon-shape icon-xl"></a>

            </td>
            <td class="align-middle border-top-0">

              <a href="#" class="fw-semi-bold text-inherit">
                <h6 class="mb-0">Haldiram's Nagpur Aloo Bhujia</h6>
              </a>
              <span><small class="text-muted">400g</small></span>

            </td>
            <td class="align-middle border-top-0">
              <a href="#" class="text-inherit">#14899</a>

            </td>
            <td class="align-middle border-top-0">
              March 5, 2023

            </td>
            <td class="align-middle border-top-0">
              1

            </td>
            <td class="align-middle border-top-0">
              <span class="badge bg-warning">Processing</span>
            </td>
            <td class="align-middle border-top-0">
              $15.00
            </td>
            <td class="text-muted align-middle border-top-0">
              <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
            </td>
          </tr>
          <tr>
            <td class="align-middle border-top-0 w-0">
              <a href="#"> <img src="../assets/images/product-img-2.jpg" alt="Ecommerce"
                  class="icon-shape icon-xl"></a>

            </td>
            <td class="align-middle border-top-0">
              <a href="#" class="fw-semi-bold text-inherit">
                <h6 class="mb-0">Nutri Choise Biscuit</h6>
              </a>
              <span><small class="text-muted">2 Pkt</small></span>

            </td>
            <td class="align-middle border-top-0">
              <a href="#" class="text-inherit">#14658
              </a>
            </td>
            <td class="align-middle border-top-0">
              July 9, 2023
            </td>
            <td class="align-middle border-top-0">
              2
            </td>
            <td class="align-middle border-top-0">
              <span class="badge bg-success">Completed</span>
            </td>
            <td class="align-middle border-top-0">
              $45.00
            </td>
            <td class="text-muted align-middle border-top-0">
               <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
            </td>
          </tr>
          <tr>
            <td class="align-middle border-top-0 w-0">
            <a href="#"> <img src="../assets/images/product-img-3.jpg" alt="Ecommerce"
                  class="icon-shape icon-xl"></a>
            </td>
            <td class="align-middle border-top-0">
              <a href="#" class="text-inherit">
                <h6 class="mb-0">Cadbury Dairy Milk 5 Star Bites </h6>
                <span><small class="text-muted">202 g</small></span>
              </a>

            </td>
            <td class="align-middle border-top-0">
              <a href="#" class="text-inherit">#13778
              </a>
            </td>
            <td class="align-middle border-top-0">
              Oct 03, 2023
            </td>
            <td class="align-middle border-top-0">
              4

            </td>
            <td class="align-middle border-top-0">
              <span class="badge bg-success">Completed</span>
            </td>
            <td class="align-middle border-top-0">
              $99.00
            </td>
            <td class="text-muted align-middle border-top-0">
               <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
            </td>
          </tr>
          <tr>
            <td class="align-middle border-top-0 w-0">
              <a href="#"> <img src="../assets/images/product-img-4.jpg" alt="Ecommerce"
                  class="icon-shape icon-xl"></a>

            </td>
            <td class="align-middle border-top-0">
              <a href="#" class="fw-semi-bold text-inherit">
                <h6 class="mb-0">Onion Flavour Potato </h6>
              </a>
              <span><small class="text-muted">100 g</small></span>
            </td>
            <td class="align-middle border-top-0">
              <a href="#" class="text-inherit">#13746
              </a>
            </td>
            <td class="align-middle border-top-0">
              March 5, 2023
            </td>
            <td class="align-middle border-top-0">
              1
            </td>
            <td class="align-middle border-top-0">
              <span class="badge bg-success">Completed</span>
            </td>
            <td class="align-middle border-top-0">
              $12.00
            </td>
            <td class="text-muted align-middle border-top-0">
               <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
            </td>
          </tr>
          <tr>
            <td class="align-middle border-top-0 w-0">
              <a href="#"> <img src="../assets/images/product-img-5.jpg" alt="Ecommerce"
                  class="icon-shape icon-xl"></a>
            </td>
            <td class="align-middle border-top-0">
              <a href="#" class="fw-semi-bold text-inherit">
                <h6 class="mb-0">Salted Instant Popcorn </h6>
              </a>
              <span><small class="text-muted">500 g</small></span>
            </td>
            <td class="align-middle border-top-0">
              <a href="#" class="text-inherit">#13566
              </a>
            </td>
            <td class="align-middle border-top-0">
              July 9, 2023
            </td>
            <td class="align-middle border-top-0">
              2
            </td>
            <td class="align-middle border-top-0">
              <span class="badge bg-danger">Cancel</span>
            </td>
            <td class="align-middle border-top-0">
              $6.00
            </td>
            <td class="text-muted align-middle border-top-0">
               <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
            </td>
          </tr>
          <tr>
            <td class="align-middle border-top-0 w-0">
              <a href="#"> <img src="../assets/images/product-img-6.jpg" alt="Ecommerce"
                  class="icon-shape icon-xl"></a>
            </td>
            <td class="align-middle border-top-0">
              <a href="#" class="fw-semi-bold text-inherit">
                <h6 class="mb-0">Blueberry Greek Yogurt </h6>
              </a>
              <span><small class="text-muted">500 g</small></span>
            </td>
            <td class="align-middle border-top-0">
              <a href="#" class="text-inherit">#12094
              </a>
            </td>
            <td class="align-middle border-top-0">
              Oct 03, 2023
            </td>
            <td class="align-middle border-top-0">
              4
            </td>
            <td class="align-middle border-top-0">
              <span class="badge bg-success">Completed</span>
            </td>
            <td class="align-middle border-top-0">
              $18.00
            </td>
            <td class="text-muted align-middle border-top-0">
               <a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View"><i class="feather-icon icon-eye"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>`;
}else if(NeedResponceOf=="Settings"){
    content =`    <div class=" py-6 p-md-6 p-lg-10">
    <div class="mb-6">
      <!-- heading -->
      <h2 class="mb-0">Account Setting</h2>
    </div>
    <div>
      <!-- heading -->
      <h5 class="mb-4">Account details</h5>
      <div class="row">
        <div class="col-lg-5">
          <!-- form -->
          <form>
            <!-- input -->
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" placeholder="jitu chauhan">
            </div>
            <!-- input -->
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" placeholder="example@gmail.com">
            </div>
            <!-- input -->
            <div class="mb-5">
              <label class="form-label">Phone</label>
              <input type="text" class="form-control" placeholder="Phone number">
            </div>
            <!-- button -->
            <div class="mb-3">
              <button class="btn btn-primary">Save Details</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <hr class="my-10">
    <div class="pe-lg-14">
      <!-- heading -->
      <h5 class="mb-4">Password</h5>
      <form class=" row row-cols-1 row-cols-lg-2">
        <!-- input -->
        <div class="mb-3 col">
          <label class="form-label">New Password</label>
          <input type="password" class="form-control" placeholder="**********">
        </div>
        <!-- input -->
        <div class="mb-3 col">
          <label class="form-label">Current Password</label>
          <input type="password" class="form-control" placeholder="**********">
        </div>
        <!-- input -->
        <div class="col-12">
          <p class="mb-4">Can’t remember your current password?<a href="#"> Reset your password.</a></p>
          <a href="#" class="btn btn-primary">Save Password</a>
        </div>
      </form>
    </div>
    <hr class="my-10">
    <div>
      <!-- heading -->
      <h5 class="mb-4">Delete Account</h5>
      <p class="mb-2">Would you like to delete your account?</p>
      <p class="mb-5">This account contain 12 orders, Deleting your account will remove all the order
        details
        associated with it.</p>
      <!-- btn -->
      <a href="#" class="btn btn-outline-danger">I want to delete my account</a>
    </div>
  `;
    
}else if(NeedResponceOf=="Address"){
    content =`
    <div class="py-6 p-md-6 p-lg-10">
            <div class="d-flex justify-content-between mb-6">
              <!-- heading -->
              <h2 class="mb-0">Address</h2>
              <!-- button -->
              <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addAddressModal">Add a
                new address </a>
            </div>
            <div class="row">
              <!-- col -->
              <div class="col-lg-5 col-xxl-4 col-12 mb-4">
                <!-- form -->
                <div class="card">
                  <div class="card-body p-6">
                  <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="homeRadio" checked>
                    <label class="form-check-label text-dark fw-semi-bold" for="homeRadio">
                      Home
                    </label>
                  </div>
                  <!-- address -->
                  <p class="mb-6">Jitu Chauhan<br>

                    4450 North Avenue Oakland, <br>

                    Nebraska, United States,<br>

                    402-776-1106</p>
                    <!-- btn -->
                  <a href="#" class="btn btn-info btn-sm">Default address</a>
                  <div class="mt-4">
                    <a href="#" class="text-inherit">Edit </a>
                    <a href="#" class="text-danger ms-3" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete
                    </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-xxl-4 col-12 mb-4">
                <!-- input -->
                <div class="card">
                  <div class="card-body p-6">
                  <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="officeRadio">
                    <label class="form-check-label text-dark fw-semi-bold" for="officeRadio">
                      Office
                    </label>
                  </div>
                  <!-- nav item -->
                  <p class="mb-6">Nitu Chauhan<br>

                    3853 Coal Road <br>

                    Tannersville, Pennsylvania, 18372, United States <br>

                    402-776-1106</p>
                    <!-- link -->
                  <a href="#" class="link-primary">Set as Default</a>
                  <div class="mt-4">
                    <a href="#" class="text-inherit">Edit </a>
                    <!-- btn -->
                    <a href="#" class="text-danger ms-3" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete
                    </a>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    `;
    
}else if(NeedResponceOf=="Payment"){
    content =`<div class="py-6 p-md-6 p-lg-10">
    <!-- heading -->
  <div class="d-flex justify-content-between mb-6 align-items-center">
    <h2 class="mb-0">Payment Methods</h2>
    <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">Add
      Payment </a>

  </div>
  <ul class="list-group list-group-flush">
    <!-- List group item -->
    <li class="list-group-item py-5 px-0">
      <div class="d-flex justify-content-between">
        <div class="d-flex">
            <!-- img -->
          <img src="../assets/images/visa.svg" alt="">
            <!-- text -->
          <div class="ms-4">
            <h5 class="mb-0 h6 h6">**** 1234</h5>
            <p class="mb-0 small">Expires in 10/2023
            </p>
          </div>
        </div>
        <div>
            <!-- button -->
          <a href="#" class="btn btn-outline-gray-400 disabled btn-sm">Remove</a>
        </div>
      </div>
    </li>
    <!-- List group item -->
    <li class="list-group-item px-0 py-5">
      <div class="d-flex justify-content-between">
        <div class="d-flex">
            <!-- img -->
          <img src="../assets/images/mastercard.svg" alt="" class="me-3">
          <div>
            <h5 class="mb-0 h6">Mastercard ending in 1234</h5>
            <p class="mb-0 small">Expires in 03/2026</p>
          </div>
        </div>
        <div>
            <!-- button-->
          <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
        </div>
      </div>
    </li>
    <!-- List group item -->
    <li class="list-group-item px-0 py-5">
      <div class="d-flex justify-content-between">
        <div class="d-flex">
            <!-- img -->
          <img src="../assets/images/discover.svg" alt="" class="me-3">
          <div>
              <!-- text -->
            <h5 class="mb-0 h6">Discover ending in 1234</h5>
            <p class="mb-0 small">Expires in 07/2020 <span class="badge bg-warning text-dark"> This card is
                expired.</span></p>
          </div>
        </div>
        <div>
            <!-- btn -->
          <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
        </div>
      </div>
    </li>
    <!-- List group item -->
    <li class="list-group-item px-0 py-5">
      <div class="d-flex justify-content-between">
        <div class="d-flex">
            <!-- img -->
          <img src="../assets/images/americanexpress.svg" alt="" class="me-3">
            <!-- text -->
          <div>
            <h5 class="mb-0 h6">American Express ending in 1234</h5>
            <p class="mb-0 small">Expires in 12/2021</p>
          </div>
        </div>
        <div>
            <!-- btn -->
          <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
        </div>
      </div>
    </li>
    <!-- List group item -->
    <li class="list-group-item px-0 py-5 border-bottom">
      <div class="d-flex justify-content-between">
        <div class="d-flex">
            <!-- img -->
          <img src="../assets/images/paypal.svg" alt="" class="me-3">
          <div>
              <!-- text -->
            <h5 class="mb-0 h6">Paypal Express ending in 1234</h5>
            <p class="mb-0 small">Expires in 10/2021</p>
          </div>
        </div>
        <div>
            <!-- btn -->
          <a href="#" class="btn btn-outline-gray-400 text-muted btn-sm">Remove</a>
        </div>
      </div>
    </li>
  </ul>
</div>`;
    
}else if(NeedResponceOf=="Notification"){
    content =`  <div class="py-6 p-md-6 p-lg-10">
    <div class="mb-6">
      <!-- heading -->
      <h2 class="mb-0">Notification settings</h2>

    </div>

    <div class="mb-10">
      <!-- text -->
      <div class="border-bottom pb-3 mb-5">
        <h5 class="mb-0">Email Notifications</h5>
      </div>
      <!-- text -->
      <div class="d-flex justify-content-between align-items-center mb-6">
        <div>
          <h6 class="mb-1">Weekly Notification</h6>
          <p class="mb-0 ">Various versions have evolved over the years, sometimes by accident, sometimes on
            purpose .</p>
        </div>
        <!-- checkbox -->
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
        </div>
      </div>
      <div class="d-flex justify-content-between align-items-center">
        <!-- text -->
        <div>
          <h6 class="mb-1">Account Summary</h6>
          <p class="mb-0 pe-12 ">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
            turpis eguris eu sollicitudin massa. Nulla
            ipsum odio, aliquam in odio et, fermentum blandit nulla.
          </p>
        </div>
        <!-- form checkbox -->
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label" for="flexSwitchCheckChecked"></label>
        </div>
      </div>
    </div>
    <div class="mb-10">
      <!-- heading -->
      <div class="border-bottom pb-3 mb-5">
        <h5 class="mb-0">Order updates</h5>
      </div>
      <div class="d-flex justify-content-between align-items-center mb-6">
        <div>
          <!-- heading -->
          <h6 class="mb-0">Text messages</h6>

        </div>
        <!-- form checkbox -->
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault2">
          <label class="form-check-label" for="flexSwitchCheckDefault2"></label>
        </div>
      </div>
      <!-- text -->
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h6 class="mb-1">Call before checkout</h6>
          <p class="mb-0 ">We'll only call if there are pending changes
          </p>
        </div>
        <!-- form checkbox -->
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked2" checked>
          <label class="form-check-label" for="flexSwitchCheckChecked2"></label>
        </div>
      </div>
    </div>
    <div class="mb-6">
      <!-- text -->
      <div class="border-bottom pb-3 mb-5">
        <h5 class="mb-0">Website Notification</h5>
      </div>
      <div>
        <!-- form checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckFollower" checked>
          <label class="form-check-label" for="flexCheckFollower">
            New Follower
          </label>
        </div>
        <!-- form checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckPost">
          <label class="form-check-label" for="flexCheckPost">
            Post Like
          </label>
        </div>
        <!-- form checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckPosted">
          <label class="form-check-label" for="flexCheckPosted">
            Someone you followed posted
          </label>
        </div>
        <!-- form checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckCollection">
          <label class="form-check-label" for="flexCheckCollection">
            Post added to collection
          </label>
        </div>
        <!-- form checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckOrder">
          <label class="form-check-label" for="flexCheckOrder">
            Order Delivery
          </label>
        </div>
      </div>
    </div>
  </div>`;
    
}else{
    content ="Error ....... ";

}

    self.postMessage(content);

})