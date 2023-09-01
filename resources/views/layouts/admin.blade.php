<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Logistic</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- overlayScrollbars -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @vite(['/public/plugins/fontawesome-free/css/all.min.css'])
  @vite(['/public/dist/css/adminlte.min.css'])
  @vite(['/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'])
  <script src="{{ asset('js/app.js') }}" defer></script>
 
  <!-- Latest compiled and minified CSS & JS -->
  <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('759284ae3647def6e45d', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('popup-channel');
    channel.bind('user-register', function(data) {
      toastr.success(data.name  + 'has joined our website !');
    });
  </script>
  <style>
      .return-home {
        border: 1px solid transparent;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        display: flex !important;
        margin-left: 1px !important;
       }
       .return-home:hover{
           background-color:rgba(255,255,255,.1);
       }
       .return-home p{
           margin-left: 5px;
           line-height: 1;
           margin-bottom: 0px;
       }
       .return-home .fa-circle.nav-icon{
           margin-top:8px !important;
       }
       .tab-content{
           width:auto;
           height:auto !important;
       }
       .tab-content .tab-empty{
           width:auto;
           height:auto !important;
       }
       .nav-item.d-none.d-sm-inline-block .nav-home{
        color:silver !important;
        text-decoration: none !important;
        padding-top:20px;
        line-height:3.5;
        margin-left: 5px;
       }
       .os-host-overflow {
        overflow: visible !important;
       }
       .fa-angle-left{
        top:1em !important;
       }
       .main-footer{
        position:fixed;
        bottom: 0px;
        text-align: center;
       }
       #iconic{
         width:17px;
         height:17px;
       }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <legend class="text-center">Welcome back Admin</legend>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="/" class="brand-link">
      <img src="" alt="hotel logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Logistic</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <!-- <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div> -->
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
		    <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="" id="iconic" alt="">
              <p>
                Logistic System
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="return-home">
                  <!-- <i class="fa fa-angle-left right"></i> -->
                  <p>View Shipping order</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="" class="return-home">
                <img src="" id="iconic" alt="">
                  <p>Giving Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="return-home">
                <img src="" id="iconic" alt="">
                  <p>Giving Permission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="return-home">
                <img src="" id="iconic" alt="">
                  <p>View Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="return-home">
                <img src="" id="iconic" alt="">
                  <p>Add Permission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="return-home">
                <img src="" id="iconic" alt="">
                  <p>View Permission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="return-home">
                <img src="" id="iconic" alt="">
                  <p>RM Role From PS</p>
                </a>
              </li> -->
            </ul>
          </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
    <div class="nav navbar navbar-expand-lg navbar-white navbar-light border-bottom p-0">
      <a class="nav-link bg-danger" href="#" data-widget="iframe-close">Close</a>
      <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
      <ul class="navbar-nav" role="tablist"></ul>
      <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
      <a class="nav-link bg-light" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
    </div>
    <div class="tab-content">
      <div class="tab-empty">
        <div class="container">
            @yield('admin')
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="tab-loading">
        <div>
          <h2 class="display-4">Tab is loading <i class="fa fa-sync fa-spin"></i></h2>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <div class="clearfix"></div>
  <div class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- jQuery UI 1.11.4 -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<!-- overlayScrollbars -->
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@vite(['js/paginate.js'])
@vite(['/public/dist/js/demo.js'])
@vite(['/public/dist/js/adminlte.js'])
@vite(['/public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'])
@vite(['/public/plugins/bootstrap/js/bootstrap.bundle.min.js'])
@vite(['/public/plugins/jquery-ui/jquery-ui.min.js'])
@vite(['/public/plugins/jquery/jquery.min.js'])
@vite([''])
    @yield('script');
</body>
</html>
