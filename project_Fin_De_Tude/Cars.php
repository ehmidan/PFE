<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>blblala</h3>
            </div>
            <ul class="lisst-unstyled components">
                <li>
                    <a href="Dashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="reservation.php">Reservation</a>
                </li>
                <li class="active">
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
                        <span>toggle</span>
                    </button>
                </div>
                <h3 class="admin_text">Admin</h3>
            </nav>

            <div class="row justufy-content-center">
            <?php
            include "connect.php";
            $Get_Cars = $pdo->prepare("SELECT * FROM cars");
            $Get_Cars->execute();

            while ($Car = $Get_Cars->fetch()) {

            ?>

                <div class="card col-lg-3 col-12  mt-3 p-0" style="width:20rem;">
                    <img class="card-img-top" src="<?= $Car["CarImage"] ?>" alt="Card image cap" style="height: 20rem;">
                    <div class="card-body card_body_Cars">
                        <h5 class="card-title text-white"><?= $Car["Mark"] ?></h5>
                        
                        <a href="CarShowMore.php?id_Car=<?php echo $Car["Registration_Number"]; ?>" class="btn btn_car_showmore">Show More</a>
                        <a href="AddRes.php?id_Car=<?php echo $Car["Registration_Number"]; ?>" class="btn btn-success">Reservation</a>
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


</body>

</html>