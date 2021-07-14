
<?php
  include "connect.php";
  $get = $_GET['gin'];
  $Get_Car = $pdo->prepare("SELECT * FROM cars WHERE Registration_Number ='$get'");
  $Get_Car->execute();
  $Car_Info = $Get_Car->fetch();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./css/showmor.css">
  <title>Document</title>
</head>

<body>

<div class="p-0 m-0 row" data-aos="fade-down">
  
     <div class="col-lg-7 col-12 order-lg-2 order-1 justify-self-end ">
       <div class="bgshowmor">
       <img src="<?= $Car_Info["CarImage"] ?>" class="imgShowMore mt-5 col-12" alt="">
       </div>

     </div>
 
   <div class="col-lg-5 col-12 order-lg-1 order-2 row">
   <div class="col-lg-5 col-12 order-lg-1 order-2 row">
     <div class="col-12">
     <a href="CarShowMore.php?id_Car=<?= $Car_Info["Registration_Number"]?>"><button class="btn back mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
<p><span class="span1">Registration Number</span>: <?= $Car_Info["Registration_Number"] ?></p>
  
  <p><span class="span1">Mark</span>: <?= $Car_Info["Mark"] ?></p>

  <p><span class="span1">Car Color</span>: <?= $Car_Info["Car_Color"] ?></p>
 
  <p><span class="span1">Date Of Purchase</span>: <?= $Car_Info["Date_Of_Purchase"] ?></p>

  <p><span class="span1">Buying Price</span>: <?= $Car_Info["Buying_Price"] ?></p>
 
  <p><span class="span1">End Of Circulation</span>: <?= $Car_Info["End_Of_Circulation"] ?></p>

  <p><span class="span1">Price Max</span>: <?= $Car_Info["Price_Max"] ?></p>

  <p><span class="span1">Price Min</span>: <?= $Car_Info["Price_Min"] ?></p>
  </div>
   </div>
   </div>

</div>



  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="./js/bootstrap.js"></script>
</body>

</html>




