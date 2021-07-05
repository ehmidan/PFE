<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./css/ShowMoreCar.css">
  <title>Document</title>
</head>

<body>
  <div class="container-fluid">
    <a href="Cars.php"><button class="btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
    <div class="row">
      <?php
      include "connect.php";
      $get = $_GET['id_Car'];
      $Get_Car = $pdo->prepare("SELECT * FROM cars WHERE Registration_Number ='$get'");
      $Get_Car->execute();
      while ($Car_Info = $Get_Car->fetch()) {
      ?>
        <div class="col-lg-7 order-lg-2 order-1 justify-self-end">
          <img src="<?= $Car_Info["CarImage"] ?>" class="imgShowMore mt-5" alt="">
        </div>
      <?php } ?>
      <div class="col-lg-5 col-12 order-lg-1 order-2 row justify-content-center">

        <div class="col-lg-8 row align-items-center cardstyle cardstyle1">
          <div class="col-3 carIcon"></div>
          <div class="col-9">

            <h3 class="text-white text-center"> <a href="Giniral_Info.php?Giniral=<?php echo $Car_info["Registration_Number"]; ?>" class="col-12"> General Info</a></h3>

          </div>
        </div>


        <a href="Giniral_Info.php?Giniral=<?php echo $Car_info["Registration_Number"]; ?>" class="col-12">
          <div class="col-lg-8  row align-items-center cardstyle cardstyle2">
            <div class="col-3 carIcon2 mb-2"></div>
            <div class="col-9">
              <h3 class="text-white text-center"> Insurance</h3>
            </div>
          </div>
        </a>
        <a href="Giniral_Info.php?Giniral=<?php echo $Car_info["Registration_Number"]; ?>" class="col-12">
          <div class="col-lg-8  row align-items-center cardstyle cardstyle3">
            <div class="col-lg-3 col-2 carIcon3 "></div>
            <div class="col-lg-8 col-9 ">
              <h3 class="text-white text-center">Car drain</h3>
            </div>
          </div>
        </a>
        <a href="Giniral_Info.php?Giniral=<?php echo $Car_info["Registration_Number"]; ?>" class="col-12">
          <div class="col-lg-8 row align-items-center cardstyle cardstyle4">
            <div class="col-lg-3 col-2 carIcon4 "></div>
            <div class="col-lg-8 col-9">
              <h3 class="text-white text-center"> Tech visit</h3>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>


  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="./js/bootstrap.js"></script>
</body>

</html>