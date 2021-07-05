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
        <img src="<?= $Car_Info["CarImage"]?>" class="imgShowMore mt-5" alt="">
      </div>
<?php } ?>
      
    
    </div>
  </div>


  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="./js/bootstrap.js"></script>
</body>

</html>