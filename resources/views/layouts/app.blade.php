<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Unilicungo Beira </title>
    <!-- plugins:css -->
    //<link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">


    

    <link rel="stylesheet"  href="{{ asset('assets/vendors/css/vendor.bundle.base.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css ') }}">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css ') }}">
    <link rel="stylesheet"  href="{{ asset('assets/vendors/flag-icon-css/css/flag-icons.min.css ') }}">
    <link rel="stylesheet"  href="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css ') }}">
    <link rel="stylesheet"  href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet"     href="{{ asset('assets/css/style.css ') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon"  href="{{ asset('assets/images/favicon.png ') }}" />
</head>
<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
          <div class="ps-lg-3">
            <div class="d-flex align-items-center justify-content-between">
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/corona-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html">
          <img src="{{ asset('unilicungo/up.svg') }}" alt="logo" style="height: 60px; width: auto;">
      </a>
      <a class="sidebar-brand brand-logo-mini" href="index.html">
        <img src="{{ asset('unilicungo/up.svg') }}" alt="logo" style="height: 40px; width: auto;">
    </a>
    </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">chirico</h5>
                <span>Gold Member</span>
              </div>
            </div>
            <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-cog text-primary"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-onepassword  text-info"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-calendar-today text-success"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="index.html">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-ginancio" aria-expanded="false" aria-controls="ui-basic-ginancio">
                <span class="menu-icon">
                  <i class="mdi mdi-dumbbell"></i>
                </span>
                <span class="menu-title">Ginancio/Campos </span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic-ginancio">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href=" {{ route('ginasio.index') }}">Ginancio</a></li>

                
                  <li class="nav-item"> <a class="nav-link" href=" {{ route('campos.index') }}">Campos</a></li>
                </ul>
              </div>
            </li>
        
            <li class="nav-item menu-items">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-residencias" aria-expanded="false" aria-controls="ui-basic-residencias">
                <span class="menu-icon">
                  <i class="mdi mdi-home"></i>
                </span>
                <span class="menu-title">Residências</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic-residencias">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item"> <a class="nav-link" href="{{ route('residencia.entradas.list') }}">Entradas </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('residencia.saida.index') }}">Saidas</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('residencia.relatorio.filtradas') }}">Relatorios</a></li>
                 
                </ul>
              </div>
            </li>
            
            <li class="nav-item menu-items">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-usuario" aria-expanded="false" aria-controls="ui-basic-usuario">
                <span class="menu-icon">
                  <i class="mdi mdi-account"></i>
                </span>
                <span class="menu-title">Usuario</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic-usuario">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                 
                </ul>
              </div>
            </li>
        
            <li class="nav-item menu-items">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-receitas" aria-expanded="false" aria-controls="ui-basic-receitas">
                <span class="menu-icon">
                  <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Receitas  </span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic-receitas">
                <ul class="nav flex-column sub-menu">
                 
                  <li class="nav-item"> <a class="nav-link" href="{{ route('receita.index') }}">Receitas</a></li>
                </ul>
              </div>
            </li>
        
            <li class="nav-item menu-items">
              <a class="nav-link" href="docs/documentation.html">
                <span class="menu-icon">
                  <i class="mdi mdi-file-document"></i>
                </span>
                <span class="menu-title">Documentation</span>
              </a>
            </li>
          </ul>
      
      
      
        </nav>
        
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src=" {{ asset( ' ../../../assets/images/logo-mini.svg ') }}" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search ">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
               
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{ asset('../../../assets/images/faces/face15.jpg ') }}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">chirico</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-cog text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>


   
 {{-- content section --}}
 @yield('content')



      </div>


      <!-- page-body-wrapper ends -->
    </div>



       




    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js ')}} "></script>
   
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/chart.umd.js ')}}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js ')}}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js ')}}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js ')}}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js ')}}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js ')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js ')}}"></script>
    <script src="{{ asset('assets/js/misc.js ')}}"></script>
    <script src="{{ asset('assets/js/settings.js ')}}"></script>
    <script src="{{ asset('assets/js/todolist.js ')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/proBanner.js ')}}"></script>
    <script src="{{ asset('assets/js/dashboard.js ')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>