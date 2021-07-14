<?php
include "connect.php";
if (isset($_POST['submit'])) {
    $registration_number = $_POST["registration_number"];
    $mark = $_POST["mark"];
    $date_of_purchase = $_POST["date_of_purchase"];
    $color = $_POST["color"];
    $Gearbox_Type = $_POST["Gearbox_Type"];
    $Fual_Type = $_POST["Fual_Type"];
    $Pmin = $_POST["Pmin"];
    $Pmax = $_POST["Pmax"];
    $End_of_circulation = $_POST["End_of_circulation"];
    $mileage = $_POST["mileage"];
    $buying_price = $_POST["buying_price"];
    $Car_Image = $_FILES['Car_Image']['tmp_name'];
    $traget = "image/" . $_FILES['Car_Image']['name'];
    move_uploaded_file($Car_Image, $traget);

    $sql = "INSERT INTO  cars (Registration_Number,mark,Date_Of_Purchase,Car_Color,Gearbox_Type,Fual_Type,Price_Min,Price_Max,End_Of_Circulation,Mileage,Buying_Price,CarImage) VALUES (:registration_number, :mark, :date_of_purchase , :color, :Gearbox_Type, :Fual_Type, :Pmin, :Pmax, :End_of_circulation, :mileage, :buying_price, :traget)";

    $pdor = $pdo->prepare($sql);

    $pdoe = $pdor->execute(array(":registration_number" => $registration_number, ":mark" => $mark, ":date_of_purchase" => $date_of_purchase, ":color" => $color, ":Gearbox_Type" => $Gearbox_Type, ":Fual_Type" => $Fual_Type, ":Pmin" => $Pmin, ":Pmax" => $Pmax, ":End_of_circulation" => $End_of_circulation, ":mileage" => $mileage, ":buying_price" => $buying_price, ":traget" => $traget));
    if ($pdoe) {
        header("location:Cars.php");
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

        <a href="Cars.php"><button class="btn btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
        <div class="row  justify-content-center align-items-center">

            <form action="" method="post" class="col-7 row form" enctype="multipart/form-data">
                <h4 class="col-12 text-center mb-3 mt-1 textcolor">Add Car</h4>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">registration number</label>
                    <input class="form-control" aria-describedby="emailHelp" name="registration_number" placeholder="Enter registration number" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">Mark</label>
                    <input class="form-control" aria-describedby="emailHelp" name="mark" placeholder="Enter Mark" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">date of purchase </label>
                    <input class="form-control" aria-describedby="emailHelp" name="date_of_purchase" placeholder="Enter date of purchase" type="date">
                </div>

                <div class="form-group col-6">
                    <label for="">Color</label>
                    <input class="form-control" aria-describedby="emailHelp" name="color" placeholder="Enter Color" type="text">
                </div>
                <div class="form-group col-6">
                    <label for="">Gearbox Type</label>
                    <select class="form-control" name="Gearbox_Type">
                            <option >automatic</option>
                            <option >manual lever </option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="">Fual Type</label>
                    <select class="form-control" name="Fual_Type">
                            <option >Gasoline</option>
                            <option >diesel </option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Price Min </label>
                    <input class="form-control" aria-describedby="emailHelp" name="Pmin" placeholder="Enter Price Min " type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">Price Max</label>
                    <input class="form-control" aria-describedby="emailHelp" name="Pmax" placeholder="Enter Price Max" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">End of circulation </label>
                    <input class="form-control" aria-describedby="emailHelp" name="End_of_circulation" placeholder="Enter End of circulation " type="date">
                </div>

                <div class="form-group col-6">
                    <label for="">mileage</label>
                    <input class="form-control" aria-describedby="emailHelp" name="mileage" placeholder="Enter mileage" type="text">
                </div>
                <div class="form-group col-12">
                    <label for="">Buying price </label>
                    <input class="form-control" aria-describedby="emailHelp" name="buying_price" placeholder="Enter Buying price " type="text">
                </div>
                <div class="form-group col-12">
                    <label for="">Car Image</label>
                    <input class="form-control" aria-describedby="emailHelp" name="Car_Image" placeholder="Enter Car Image" type="file">
                </div>


                <div class="col-12">
                    <button type="submit" name="submit" class="btn col-12 button_add_res mb-3 mt-2">Add</button>
                </div>
        </div>
        </form>
    </div>

    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>