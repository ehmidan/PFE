<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./css/main.css">
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>blblala</h3>
      </div>
      <ul class="lisst-unstyled components">
        <li class="active">
          <a href="#">Dashboard</a>
        </li>
        <li>
          <a href="reservation.php">Reservation</a>
        </li>
        <li>
          <a href="Cars.php">Cars</a>
        </li>
        <li>
          <a href="#">Client</a>
        </li>
      </ul>
    </nav>


    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" data-toggle="collapse" class="btn toggeles">
            <span class="glyphicon glyphicon-arrow-left"></span>
            <span>toggle</span>
          </button>
        </div>
        <h3 class="admin_text">Admin</h3>
      </nav>

      <br><br>

      <div class="row justify-content-center ml-5">
       <a href="Available_Cars.php" class="col-lg-6 col-12">
        <div class="col-lg-9  row align-items-center cardstyle cardstyle1 mr-4 ">
          <div class="col-3 carIcon"></div>
          <div class="col-9">
            <h3 class="text-white"> Available Vehicles</h3>
          </div>
        </div>
        </a>
        <a href="Rented.Cars.php" class="col-lg-6 col-12 ">
          <div class="col-lg-9 row align-items-center cardstyle cardstyle2  mr-4">
            <div class="col-3 carIcon2 mb-2"></div>
            <div class="col-9">
              <h3 class="text-white">Rented vehicles</h3>
            </div>
          </div>
        </a>

      <a href="reservation.php" class="col-lg-6 col-12 ">
          <div class="col-lg-9  row align-items-center cardstyle cardstyle3  mr-4">
            <div class="col-lg-3 col-2 carIcon3 "></div>
            <div class="col-lg-8 col-9 ">
              <h3 class="text-white text-center">Reservation</h3>
            </div>
          </div>
      </a>
 
        <a href="" class="col-lg-6 col-12 ">
          <div class="col-lg-9 row align-items-center cardstyle cardstyle4 mr-4">
            <div class="col-lg-3 col-2 carIcon4 "></div>
            <div class="col-lg-8 col-9">
              <h3 class="text-white text-center"> Expenditure</h3>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <script src="./bootstrap/js/popper.min.js"></script>
  <script src="./bootstrap/js/jquery-3.5.1.min.js"></script>
  <script src="./bootstrap/js/bootstrap.js"></script>
  <script src="./app.js"></script>


</body>

</html>