
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logistic</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  <body>
    <legend class="text-center">Welcome back <?=strtolower($role)?></h1>
    <hr>
        <ul class="mynav">
          @if($role == 'ADMIN' || $role == 'CUSTOMER SERVICE')
          <li class="mynav-item">
            <a href="/admin/shipping-view" class="return-home">
              <!-- <i class="fa fa-angle-left right"></i> -->
              <p>View Shipping order</p>
            </a>
          </li>
          @endif
          @if($role == 'ADMIN')
          <li class="mynav-item">
            <a href="/admin/assign-role" class="return-home">
              <!-- <i class="fa fa-angle-left right"></i> -->
              <p>Assign role</p>
            </a>
          </li>
          @endif
          @if($role == 'ADMIN')
          <li class="mynav-item">
            <a href="/admin/add-role" class="return-home">
              <!-- <i class="fa fa-angle-left right"></i> -->
              <p>Add role</p>
            </a>
          </li>
          @endif
          @if($role == 'LOGISTIC STAFF')
          <li class="mynav-item">
            <a href="/staff/shipping-list" class="return-home">
              <!-- <i class="fa fa-angle-left right"></i> -->
              <p>View Shipping List</p>
            </a>
          </li>
          @endif
          @if($role == 'WARE-HOUSE STAFF')
          <li class="mynav-item">
            <a href="/staff/processing-list" class="return-home">
              <!-- <i class="fa fa-angle-left right"></i> -->
              <p>View Processing List</p>
            </a>
          </li>
          @endif
          <li class="mynav-item">
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>