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
          <a href="Dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item dropdown active">
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
            <a class="dropdown-item" href="AddCar.php">Ajouter Car</a>

          </div>
        </li>
        <li>
          <a href="#">Client</a>
        </li>
      </ul>
    </nav>


    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" data-toggle="collapse" class="btn toggeles">
            <span class="glyphicon glyphicon-arrow-left"></span>
            <span>toggle</span>
          </button>
        </div>
      </nav>
      <table class="table table-gray table-hover" data-aos="fade-down">
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
            <th>Actions</th>


          </tr>
        </thead>
        <tbody>
          <?php
          include "connect.php";
          $Get_res = $pdo->prepare("SELECT * FROM reservation");
          $Get_res->execute();

          while ($res = $Get_res->fetch()) {

          ?>
            <tr>
              <td><?= $res["First_Name"] ?> <?= $res["Last_Name"] ?></td>
              <td><?= $res["Phone"] ?></td>
              <td><?= $res["Mark"] ?></td>
              <td><?= $res["Rigestration_Number"] ?></td>
              <td><?= $res["Date_Start"] ?></td>
              <td><?= $res["Date_End"] ?></td>
              <td><?= $res["Price_Total"] ?></td>
              <td><img src="<?= $res["Car_Image"] ?>" class="imgRes" alt=""></td>
              <td><a href="EditeRes.php?id=<?= $res["Id_Res"] ?>"> <button class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button></a> <a onclick="return confirm('are you sure you want delete this Reservation')" href="./DeleteRes.php?id=<?= $res["Id_Res"] ?>"><button class="btn btn-outline-danger ml-2"><span class="glyphicon glyphicon-trash"></span></button></a></td>
              <td></td>
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