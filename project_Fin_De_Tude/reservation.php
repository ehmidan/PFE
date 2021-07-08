<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header">
        <div class="logo"></div>
      </div>
  </div>
  <ul class="lisst-unstyled components">
    <li>
      <a href="Dashboard.php">Dashboard</a>
    </li>
    <li class="active">
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
          <span class="toggele">toggle</span>

        </button>
      </div>
      <h3 class="admin_text">Admin</h3>
    </nav>
    <table class="table table-gray table-hover">
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
          <th>Edit</th>
          <th>Delet</th>

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
            <td><a href="EdieRes.php?id=<?= $res["Id_Res"] ?>"> <button class="btn btn-success">Edit</button></a></td>
            <td><a onclick="return confirm('are you sure you want delete this Reservation')" href="./DeleteRes.php?id=<?= $res["Id_Res"] ?>"><button class="btn btn-outline-danger ml-2">Delete</button></a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <div class="row">
      <div class="col-12 text-center"><a href="AddRes.php"><button class="btn toggeles"><span class="glyphicon glyphicon-plus-sign"></span>Add Reservation </button></a></div>
    </div>



















    <script src="./bootstrap/js/popper.min.js"></script>
    <script src="./bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.js"></script>
    <script src="./app.js"></script>
</body>

</html>