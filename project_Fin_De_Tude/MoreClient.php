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
 
   
<a href="client.php"><button class="btn baack ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
      
    
          <table class="table table-gray table-hover mt-5" data-aos="fade-down">
            <thead>
         
              <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Mark</th>
                <th>registration number</th>
                <th>Date Start</th>
                <th>Date End</th>
                <th>Price Total</th>
                <th>Image</th>
              
         
         
              </tr>
            </thead>
            <tbody>
              <?php
              include "connect.php";
              $get = $_GET['cin'];
         
              $Get_clientinfo = $pdo->prepare("SELECT * FROM reservation WHERE CIN='$get'");
              $Get_clientinfo->execute();
         
              while ($info = $Get_clientinfo->fetch()) {
         
              ?>
                <tr>
                  <td><?= $info["First_Name"] ?> <?= $info["Last_Name"] ?></td>
                  <td><?= $info["Phone"] ?></td>
                  <td><?= $info["Mark"] ?></td>
                  <td><?= $info["Rigestration_Number"] ?></td>
                  <td><?= $info["Date_Start"] ?></td>
                  <td><?= $info["Date_End"] ?></td>
                  <td><?= $info["Price_Total"] ?></td>
                  <td><img src="<?= $info["Car_Image"] ?>" class="imgRes" alt=""></td>
                  <!-- <td><a href="EditeRes.php?id=<?= $info["Id_Res"] ?>"> <button class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button></a> </td>
                  <td><a onclick="return confirm('are you sure you want delete this Reservation')" href="./DeleteRes.php?id=<?= $info["Id_Res"] ?>"><button class="btn btn-outline-danger ml-2"><span class="glyphicon glyphicon-trash"></span></button></a></td> -->
                </tr>
              <?php } ?>
            </tbody>
          </table>
   


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