
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
          <form action="{{route('web.user.login')}}" id="web-user-login" method="post">
            @csrf
            <div class="form-group">
              <input type="text" name="email" id="email" class="text-highlight form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
              <small id="error-alert" class="text-danger" hidden>Incorrent username or password! Please try again.</small>
            </div>
            <a href="#"> <small><i> Forget password? </i></small> </a>
            <div class="text-center">
            <button type="submit" class="btn btn-primary px-3"><b>Login</b> </button>
            </div>
          </form>
        </div>
        <div class="pt-2">
        <h6 class="text-center">Login with social acoount</h6>
        <div class="text-center">
         <a href="/login/github"><i class="fab fa-facebook-square fa-3x mx-3 text-primary"></i></a> 
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

 @push('scripts')
<script src="/js/user-accounts/web.users.login.js"></script>
 @endpush
