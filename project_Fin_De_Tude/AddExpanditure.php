<?php

include "connect.php";

if (isset($_POST['submit'])) {
    $Specie = $_POST["specie"];
    $Company_Name = $_POST["Company_Name"];
    $Company_phone = $_POST["Company_Phone"];
    $Mark = $_POST["Mark"];
    $Car_Image = $_POST['Car_Image'] . ".png";
    $Ptotal = $_POST["Ptotal"];
    $registration_number = explode(";", $_POST["registration_number"])[1];


    $sql = "INSERT INTO expenditure (Species,Company_Name,Company_Phone,Mark,Image_Car,Price,Registration_Number) VALUES (:specie, :Company_Name, :phone , :Mark, :Car_Image, :Ptotal, :regestration_number)";

    $pdor = $pdo->prepare($sql);

    $pdoe = $pdor->execute(array(":specie" => $Specie, ":Company_Name" => $Company_Name, ":phone" => $Company_phone, ":Mark" => $Mark, ":Car_Image" => $Car_Image, ":Ptotal" => $Ptotal, ":regestration_number" => $registration_number));
    if ($pdoe) {
        header("location:Expinditure.php");
    } else {
        echo "Data not insert";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/AddRes.css">
    
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">

        <a href="Expinditure.php"><button class="btn btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
        <div class="row  justify-content-center align-items-center">

            <form action="" method="post" class="col-7 row form" enctype="multipart/form-data">
                <h4 class="col-12 text-center mb-3 mt-1 textcolor">Client Information</h4>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Specie</label>
                    <input class="form-control" aria-describedby="emailHelp" name="specie" placeholder="Enter your first name" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">Company Name</label>
                    <input class="form-control" aria-describedby="emailHelp" name="Company_Name" placeholder="Enter your last name" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">Company Phone</label>
                    <input class="form-control" aria-describedby="emailHelp" name="Company_Phone" placeholder="Enter your phone" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">registration number</label>
                    <select class="form-control" name="registration_number" onchange="getSelectedValue()">
                        <?php
                        $Get_Car = $pdo->prepare("SELECT * FROM cars");
                        $Get_Car->execute();
                        while ($Car_Info = $Get_Car->fetch()) {
                        ?>
                            <option value=<?= $Car_Info["Mark"] . "." . $Car_Info["CarImage"] . ";" . $Car_Info["Registration_Number"] ?>><?= $Car_Info["Registration_Number"] ?>
                            </option>
                        <?php } ?>

                    </select>
                </div>


                <div class="form-group col-12">
                    <label for="">Mark</label>
                    <input class="form-control" aria-describedby="emailHelp" id="markk" name="Mark" placeholder="Enter the Mark" type="text">
                </div>

                <div class="form-group col-12">
                    <label for="">Car Image</label>
                    <input class="form-control" aria-describedby="emailHelp" id="regestration" name="Car_Image" placeholder="Enter Car Image" type="text">
                </div>

                <div class="form-group col-12">
                    <label for="">Price Total</label>
                    <input class="form-control" aria-describedby="emailHelp" name="Ptotal" placeholder="Enter Price Total" type="text">
                </div>
                <div class="col-12">
                    <button type="submit" name="submit" class="btn col-12 button_add_res mb-3 mt-2">Add</button>
                </div>
        </div>
        </form>
    </div>
    <script src="app.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>