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
<a href="Dashboard.php"><button class="btn baack ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
<div class="row justufy-content-center">
            <?php
            include "connect.php";
            $Get_Cars = $pdo->prepare("SELECT * FROM cars JOIN reservation on cars.Registration_Number=reservation.Rigestration_Number WHERE CURRENT_TIMESTAMP BETWEEN reservation.Date_Start AND reservation.Date_End");
            $Get_Cars->execute();

            while ($Car = $Get_Cars->fetch()) {

            ?>

                <div class="card col-lg-3 col-12  mt-3 p-0" style="width:20rem;">
                    <img class="card-img-top" src="<?= $Car["CarImage"] ?>" alt="Card image cap" style="height: 20rem;">
                    <div class="card-body card_body_Cars">
                        <h5 class="card-title text-white"><?= $Car["Mark"] ?></h5>
                        
                        <a href="CarShowMore.php?id_Car=<?php echo $Car["Registration_Number"]; ?>" class="btn btn_car_showmore">Show More</a>
                        <a href="AddRes.php?id_Car=<?php echo $Car["Registration_Number"]; ?>" class="btn btn-success">Reservation</a>
                        <a href="DeleteCar.php?id=<?php echo $Car["Registration_Number"]; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            <?php } ?>
            </div>

    <script src="./bootstrap/js/popper.min.js"></script>
    <script src="./bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.js"></script>
    <script src="./app.js"></script>


</body>

</html>