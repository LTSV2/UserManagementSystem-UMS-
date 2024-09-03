<body class="g-sidenav-show  bg-gray-200">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" data-scroll="true">
      <div class="container-fluid py-1 px-3">
          
          <div class="collapse navbar-collapse justify-content-end" id="navbar">
            <h6 class="font-weight-bolder mb-0" style="color: aliceblue;margin-right: 1227px;">Dashboard</h6>
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  @if (Auth::check())
                      <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 69px;color: blanchedalmond;">
                          Welcome, {{ Auth::user()->name }}
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end border-0 shadow" aria-labelledby="accountDropdown">
                          <li><a class="dropdown-item" href="{{ route('account.logout') }}">Logout</a></li>
                      </ul>
                  @else
                      <a class="nav-link" href="{{ route('admin.logout') }}" style="margin-right: 69px;color: blanchedalmond;">
                          Admin
                      </a>
                  @endif
                 </li>   
              </ul>
          </div>
      </div>
  </nav>
  
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="http://127.0.0.1:8000/dashboard" target="_blank">
          <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold text-white">AstroTalk</span>
          
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary" href="http://127.0.0.1:8000/dashboard">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('account.accountuser') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">User Management</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('account.chatuser') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">receipt_long</i>
              </div>
              <span class="nav-link-text ms-1">Chat User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('otp.generate') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">view_in_ar</i>
              </div>
              <span class="nav-link-text ms-1">OTP Mobile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/rtl.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
              </div>
              <span class="nav-link-text ms-1">RTL</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/notifications.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
              </div>
              <span class="nav-link-text ms-1">Notifications</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/profile.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('account.logout') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">login</i>
              </div>
              <span class="nav-link-text ms-1">Sign In</span>
             
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('account.logout') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">assignment</i>
              </div>
              <span class="nav-link-text ms-1">Sign Up</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    @yield('content')
    <div id="content">
    </div>

</main>
    
  
    
