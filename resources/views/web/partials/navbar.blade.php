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
    <ul id="web-user-login-status" class="navbar-nav">
      @guest
          
      <li class="nav-item pl-3 guest-user">
          <a class="nav-link" href="#"  data-toggle="modal" data-target="#popupLoginModal"><b><u>Login</u></b></a>
        </li>
        <li class="nav-item pl-3 guest-user">
          <button class="btn btn-sm btn-success" href="#"  data-toggle="modal" data-target="#popupCreateModal"><b> Create Account </b></button>
        </li>
      @endguest
      @auth
      <li class="nav-item pl-3 dropdown current-user">
        <span class="nav-link user-dropdown-toggle" id="user-dropdown-toggle" role="button">
          <span class="rounded-circle border p-2"><i class="fa fa-user"></i></span>  &nbsp;
          <b>Current User</b>&nbsp;
          <i class="fa fa-sort-down"></i>
        </span>
        <ul class="user-dropdown-content">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
              <form method="POST" action="{{ route('logout') }}" class="text-center">
              @csrf
              <button type="submit" class="btn border-secondary px-4 py-1 "><small id="web-current-name" class="roboto"> Logout</small></button>
            </form>
          </li>
        </ul>
      </li>
      @endauth
      </ul>
  </nav>
