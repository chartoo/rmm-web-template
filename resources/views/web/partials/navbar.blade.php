<nav class="navbar navbar-expand-lg navbar-light bg-light roboto sticky-top shadow-md">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse pr-5" id="navbarNavDropdown" style="justify-content:flex-end;">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#"><b>Today's Deals</b> </span></a>
        </li>
        <li class="nav-item dropdown pl-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <b>Property</b> 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#"><b>Hotels</b></a>
            <a class="dropdown-item" href="#"><b>Motels</b></a>
            <a class="dropdown-item" href="#"><b>Resorts</b></a>
            <a class="dropdown-item" href="#"><b>Inn</b></a>
            <a class="dropdown-item" href="#"><b>Guest House</b></a>
          </div>
        </li>
        <li class="nav-item pl-3">
          <a class="nav-link" href="#"><b>Listings</b></a>
        </li>
        <li class="nav-item pl-3">
          <a class="nav-link" href="#"><b> Contact Us</b></a>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item pl-3">
          <a class="nav-link" href="#"  data-toggle="modal" data-target="#popupLoginModal"><b><u>Login</u></b></a>
        </li>
        <li class="nav-item pl-3">
          <button class="btn btn-sm btn-success" href="#"  data-toggle="modal" data-target="#popupCreateModal"><b> Create Account </b></button>
        </li>
      </ul>
  </nav>
<!-- Login Modal -->
  <div class="modal fade" id="popupLoginModal" tabindex="-1" role="dialog" aria-labelledby="popupLoginModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="popupLoginModal">Login your account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="border rounded p-3">
          <div class="form-group">
            <input type="text" name="email" id="email" class="text-highlight form-control" placeholder="Enter email">
          </div>
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
          </div>
          <a href="#"> <small><i> Forget password? </i></small> </a>
          <div class="text-center">
          <button type="button" class="btn btn-primary px-3"><b>Login</b> </button>
          </div>
         
      </div>
      <div class="pt-2">
      <h6 class="text-center">Login with social acoount</h6>
      <div class="text-center">
        <i class="fab fa-facebook-square fa-3x mx-3 text-primary"></i>
        <i class="fab fa-google-plus-square fa-3x mx-3 text-danger"></i>
        <i class="fab fa-linkedin fa-3x mx-3 text-primary"></i>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- End Login Modal -->
<!-- Register Modal -->
  <div class="modal fade" id="popupCreateModal" tabindex="-1" role="dialog" aria-labelledby="popupCreateModal" aria-hidden="true">
  <div class="modal-dialog register-modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="popupCreateModal">Create your accout | FREE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class=" p-3">
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="name">Name <span class="text-danger">*</span></label>
              <input type="text" name="name" id="name" class="text-highlight form-control form-control-sm" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="phone">Phone <span class="text-danger">*</span></label>
              <input type="text" name="phone" id="phone" class="text-highlight form-control form-control-sm" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
              <label for="city">City <span class="text-danger">* </span></label>
              <select class="select2" name="city" id="city" required style="width: 100%;">
                <option value="">Select</option>
              </select>
            </div>
            <div class="form-group">
              <label for="township">Township </label>
              <select class="select2" name="township" id="township" required style="width: 100%;">
                <option value="">Select</option>
              </select>
            </div>
          </div>
          <div class="col-6 border rounded shadow-sm py-2">
            <h4 class="roboto">Make sure email and password.</h4>
            <div class="form-group">
              <label for="email">Email <span class="text-danger">*</span></label>
              <input type="text" name="email" id="email" class="text-highlight form-control form-control-sm" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="password">Password <span class="text-danger">*</span></label>
              <input type="password" name="password" id="password" class="text-highlight form-control form-control-sm" placeholder="Enter password">
            </div>
            <div class="form-group">
              <label for="confirm-password">Confirm Password <span class="text-danger">*</span></label>
              <input type="confirm-password" class="text-highlight form-control form-control-sm" placeholder="Enter confirm password">
            </div>
            <div id="password-strong"></div>
        </div>
        </div>
          <div class="text-center pt-3">
          <button type="button" class="btn btn-primary px-3"><b>Create Now</b> </button>
          </div>
          <hr>
         
      </div>
      <div class="pt-2">
      <h6 class="text-center">Login with social acoount</h6>
      <div class="text-center">
        <i class="fab fa-facebook-square fa-3x mx-3 text-primary"></i>
        <i class="fab fa-google-plus-square fa-3x mx-3 text-danger"></i>
        <i class="fab fa-linkedin fa-3x mx-3 text-primary"></i>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- End Register Modal -->