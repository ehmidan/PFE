<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./css/maiin.css">
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header">
        <div class="logo"></div>
      </div>
      <ul class="lisst-unstyled components">
        <li>
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reservation
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="reservation.php">All Reservation</a>
            <a class="dropdown-item" href="addRes.php">Add Reservation </a>

          </div>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cars
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Cars.php">All Cars</a>
            <a class="dropdown-item" href="AddCar.php">Add Car</a>

          </div>
        </li>
        <li class="active">
          <a href="#">Client</a>
        </li>
      </ul>
    </nav>


    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" data-toggle="collapse" class="btn toggeles">
            <span class="glyphicon glyphicon-arrow-left"></span>
            <span>toggle</span>
          </button>
        </div>
      
      </nav>

      <div class="row justufy-content-center">
        <?php
        include "connect.php";
        $Get_Cars = $pdo->prepare("SELECT DISTINCT First_Name,Last_Name,CIN,Image_Client,Phone FROM reservation");
        $Get_Cars->execute();

        while ($Car = $Get_Cars->fetch()) {

        ?>

          <div class="card col-lg-3 col-12  mt-3 p-0 cardscars " data-aos="fade-up">
            <img class="card-img-top" src="<?= $Car["Image_Client"] ?>" alt="Card image cap" style="height: 15rem;">
            <div class="card-body card_body_Cars p-3">
              <h5 class="card-title text-white"><?= $Car["First_Name"] ?> <?= $Car["Last_Name"] ?></h5>
              <h7 class="card-title text-white mt-4 "><img src="./image/credit-card 1.png" class="iconsCar" alt=""><?= $Car["CIN"] ?></h7><br>
              <h7 class="card-title text-white  mt-4"><img src="./image/smartphone 1.png" class="iconsCar " alt=""><?= $Car["Phone"] ?></h7>
              <a onclick="return confirm('are you sure you want delete this Car')" href="DeleteCar.php?id=<?php echo $Car["Registration_Number"]; ?>" class="btn btn-danger mt-4 ml-5"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>


  <script src="./bootstrap/js/popper.min.js"></script>
  <script src="./bootstrap/js/jquery-3.5.1.min.js"></script>
  <script src="./bootstrap/js/bootstrap.js"></script>
  <script src="./app.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>