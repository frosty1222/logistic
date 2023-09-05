
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logistic</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  <body>
    <legend class="text-center">Welcome back <?=strtolower($role)?></h1>
    <hr>
        <ul class="nav">
          @if($role == 'ADMIN' || $role == 'CUSTOMER SERVICE')
          <li class="nav-item">
            <a href="/admin/shipping-view" class="return-home">
              <!-- <i class="fa fa-angle-left right"></i> -->
              <p>View Shipping order</p>
            </a>
          </li>
          @endif
          @if($role == 'LOGISTIC STAFF')
          <li class="nav-item">
            <a href="/staff/shipping-list" class="return-home">
              <!-- <i class="fa fa-angle-left right"></i> -->
              <p>View Shipping List</p>
            </a>
          </li>
          @endif
          @if($role == 'WARE-HOUSE STAFF')
          <li class="nav-item">
            <a href="/staff/processing-list" class="return-home">
              <!-- <i class="fa fa-angle-left right"></i> -->
              <p>View Processing List</p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="/logout" class="return-home">
              <p>Logout</p>
            </a>
          </li>
        </ul>
        <div class="layout">
            <div class="container-fluid">
              @yield('admin')
            </div>
        </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>