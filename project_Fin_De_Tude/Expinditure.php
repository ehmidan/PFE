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
<a href="Dashboard.php"><button class="btn btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
    <table class="table table-gray table-hover mt-5" data-aos="fade-down" >
      <thead>

        <tr>
          <th>Species</th>
          <th>Company_Name</th>
          <th>Company_Phone</th>
          <th>Registration_Number</th>
          <th>Mark</th>
          <th>Image_Car</th>
          <th>Price</th>
          <th>Action</th>
         
       

        </tr>
      </thead>
      <tbody>
        <?php
        include "connect.php";
        $Get_res = $pdo->prepare("SELECT * FROM expenditure");
        $Get_res->execute();

        while ($res = $Get_res->fetch()) {

        ?>
          <tr>
            <td><?= $res["Species"] ?></td>
            <td><?= $res["Company_Name"] ?></td>
            <td><?= $res["Company_Phone"] ?></td>
            <td><?= $res["Registration_Number"] ?></td>
            <td><?= $res["Mark"] ?></td>
            <td><img src="<?= $res["Image_Car"] ?>" class="imgRes" alt=""></td>
            <td><?= $res["Price"] ?></td>
           
            <td><a href="EditeRes.php?id=<?= $res["Id_Res"] ?>"> <button class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button></a> <a onclick="return confirm('are you sure you want delete this Reservation')" href="./DeleteRes.php?id=<?= $res["Id_Res"] ?>"><button class="btn btn-outline-danger ml-2"><span class="glyphicon glyphicon-trash"></span></button></a></td>
            <td></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <div class="row">
      <div class="col-12 text-center"><a href="AddExpanditure.php"><button class="btn toggeles"><span class="glyphicon glyphicon-plus-sign"></span>Add</button></a></div>
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