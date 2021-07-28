<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./css/Showmor.css">
  <title>Document</title>
</head>

<body>

  <div class="p-0 m-0 row" data-aos="fade-down">
   
      <?php
      include "connect.php";
      $get = $_GET['id_Car'];
      $Get_Car = $pdo->prepare("SELECT * FROM cars WHERE Registration_Number ='$get'");
      $Get_Car->execute();
      while ($Car_Info = $Get_Car->fetch()) {
      ?>
        <div class="col-lg-7 col-12 order-lg-2 order-1 justify-self-end ">
          <div class="bgshowmor">
          <img src="<?= $Car_Info["CarImage"] ?>" class="imgShowMore mt-5 col-12" alt="">
          </div>

        </div>
      <?php } ?>
      <div class="col-lg-5 col-12 order-lg-1 order-2 row">
      <a href="Cars.php"><button class="btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
      <a href="Giniral_Info.php?gin=<?php echo $get ; ?>" class="col-12">
        <div class="col-lg-8 row align-items-center cardstyle cardstyle1">
          <div class="col-3 carIcon"></div>
          <div class="col-9">
            <h3 class="text-center">  General Info</h3>
          </div>
        </div>
        </a>

        <a href="Insurance.php?gin=<?php echo $get ; ?>" class="col-12">
          <div class="col-lg-8  row align-items-center cardstyle cardstyle2">
            <div class="col-3 carIcon2 mb-2"></div>
            <div class="col-9">
              <h3 class="text-center"> Insurance</h3>
            </div>
          </div>
        </a>
        <a href="Giniral_Info.php?gin=<?php echo $get ; ?>" class="col-12">
          <div class="col-lg-8  row align-items-center cardstyle cardstyle3">
            <div class="col-lg-3 col-2 carIcon3 "></div>
            <div class="col-lg-8 col-9 ">
              <h3 class="text-center">Car drain</h3>
            </div>
          </div>
        </a>
        <a href="TechVisit.php?gin=<?php echo $get ; ?>" class="col-12">
          <div class="col-lg-8 row align-items-center cardstyle cardstyle4">
            <div class="col-lg-3 col-2 carIcon4 "></div>
            <div class="col-lg-8 col-9">
              <h3 class="text-center"> Tech visit</h3>
            </div>
          </div>
        </a>
      </div>

  </div>


  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="./js/bootstrap.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>

</html>