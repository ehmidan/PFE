<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./css/main.css">
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
        <li>
          <a href="reservation.php">Reservation</a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cars
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Cars.php">All Cars</a>
            <a class="dropdown-item" href="AddCar.php">Ajouter Car</a>

          </div>
        </li>
        <li>
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
        <h3 class="admin_text">Admin</h3>
      </nav>

      <div class="row justufy-content-center">
        <?php
        include "connect.php";
        $Get_Cars = $pdo->prepare("SELECT * FROM cars WHERE Registration_Number NOT IN (SELECT Rigestration_Number FROM reservation WHERE CURRENT_TIMESTAMP BETWEEN Date_Start AND Date_End)");
        $Get_Cars->execute();

        while ($Car = $Get_Cars->fetch()) {

        ?>

          <div class="card col-lg-3 col-12  mt-3 p-0 cardscars " data-aos="fade-up">
            <img class="card-img-top" src="<?= $Car["CarImage"] ?>" alt="Card image cap" style="height: 15rem;">
            <div class="card-body card_body_Cars p-3">
              <h5 class="card-title text-white"><?= $Car["Mark"] ?></h5>

              <a href="CarShowMore.php?id_Car=<?php echo $Car["Registration_Number"]; ?>" class="btn btn_car_showmore">Show More</a>
              <a href="addResForCar.php?id_Car=<?php echo $Car["Registration_Number"]; ?>" class="btn btn-success">Reservation</a>
              <a onclick="return confirm('are you sure you want delete this Car')" href="DeleteCar.php?id=<?php echo $Car["Registration_Number"]; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="col-12 text-center mt-5"><a href="AddCar.php"><button class="btn toggeles"><span class="glyphicon glyphicon-plus-sign"></span>Add Car </button></a></div>
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