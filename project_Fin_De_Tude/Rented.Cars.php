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
<div class="container-fluid">
 
<a href="Dashboard.php"><button class="btn baack ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>

        <div class="row justufy-content-center">
        <?php
            include "connect.php";
            $Get_Cars = $pdo->prepare("SELECT * FROM cars JOIN reservation on cars.Registration_Number=reservation.Rigestration_Number WHERE CURRENT_TIMESTAMP BETWEEN reservation.Date_Start AND reservation.Date_End");
            $Get_Cars->execute();

            while ($Car = $Get_Cars->fetch()) {

            ?>

                <div class="card col-lg-3 col-12  mt-3 p-0 cardscars " data-aos="fade-up" >
                    <img class="card-img-top" src="<?= $Car["CarImage"] ?>" alt="Card image cap" style="height: 15rem;">
                    <div class="card-body card_body_Cars p-3">
                        <h5 class="card-title text-white"><?= $Car["Mark"] ?></h5>

                        <a href="CarShowMore.php?id_Car=<?php echo $Car["Registration_Number"]; ?>" class="btn btn_car_showmore">Show More</a>
                        <a onclick="return confirm('are you sure you want delete this Car')" href="DeleteCar.php?id=<?php echo $Car["Registration_Number"]; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </div>
            <?php } ?>
        </div>


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
