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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/AddRes.css">
  <title>Document</title>
</head>

<body>
<div class="container-fluid">
<a href="CarShowMoreAvailableCars.php?id_Car=<?=$Car_Info ["Registration_Number"]?>"><button class="btn btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
<h3 class="col-12 text-center mb-5 textcolor">Car Drain</h3>
    <table class="table table-gray table-hover mt-5" data-aos="fade-down" >
      <thead>

        <tr>
          <th>Registration_Number</th>
          <th>Company_Name</th>
          <th>Company_Phone</th>
          <th>Date of operation</th>
          <th>Species</th>
          <th>Price total</th>
          <th>Action</th>
         
       

        </tr>
      </thead>
      <tbody>
        <?php
        
        $Get_res = $pdo->prepare("SELECT * FROM car_drain WHERE Registration_Number = '$get'");
        $Get_res->execute();

        while ($res = $Get_res->fetch()) {

        ?>
          <tr>
            <td><?= $res["Registration_Number"] ?></td>
            <td><?= $res["Company_Name"] ?></td>
            <td><?= $res["Company_Phone"] ?></td>
            <td><?= $res["Date_Of_Operation"] ?></td>
            <td><?= $res["Species"] ?></td>
            <td><?= $res["Price_Total"] ?></td>
   
            <td><a href="EditeRes.php?id=<?= $res["Id_Res"] ?>"> <button class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button></a> <a onclick="return confirm('are you sure you want delete this Reservation')" href="./DeleteRes.php?id=<?= $res["Id_Res"] ?>"><button class="btn btn-outline-danger ml-2"><span class="glyphicon glyphicon-trash"></span></button></a></td>
            <td></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <div class="row">
      <div class="col-12 text-center"><a href="AddCarDrain.php?id=<?= $get ?>"><button class="btn toggeles"><span class="glyphicon glyphicon-plus-sign"></span>Add</button></a></div>
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