<!-- <?php
        include "connect.php";
        $get = $_GET['id'];
     

        ?> -->
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
 
<a href="Dashboard.php?id=<?php echo $get ?>"><button class="btn baack ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>

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
                        <h7 class="card-title text-white "><img src="./image/boite-de-vitesses (1) 1.png" class="iconsCar" alt=""><?= $Car["Gearbox_Type"] ?></h7>
              <h7 class="card-title text-white ml-4 "><img src="./image/carburant (1) 1.png" class="iconsCar" alt=""> <?= $Car["Fual_Type"] ?></h7>

                        <a href="CarShowMoreAvailableCars.php?id_Car=<?php echo $Car["Registration_Number"]; ?>" class="btn btn_car_showmore mt-3 ml-3">Show More</a>
                        <a onclick="return confirm('are you sure you want delete this Reservation')" href="DeleteRes.php?id=<?php echo $Car["Id_Res"]; ?>" class="btn btn-danger mt-3"><span class="glyphicon glyphicon-trash"></span></a>
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
