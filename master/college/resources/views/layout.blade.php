<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.css') }}" rel="stylesheet">
      
    <title>Document</title>
    <style>
      
    table, td, th {
    border: 1px solid;
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th 
  {
    background-color: #a2c1a2 !important; 
    
font-family:  Georgia, serif !important;

    
   
  }
    </style> 
        </head>
        <body>
    <br>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-primary">
  <div class="container-fluid">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{url('/colleges')}}"><b>College</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{url('/students')}}"><b>Students</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{url('/buses')}}"><b>Buses</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{url('/drivers')}}"><b>Drivers</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{url('/roads')}}"><b>Route</b></a>
        </li>
  
</nav>
            <div class="col-md-12">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>



    </div>
    <script src="asset/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
    
</body>
</html>