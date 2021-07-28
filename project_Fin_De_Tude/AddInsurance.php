<?php

include "connect.php";
$get = $_GET['id'];
$Get_Car = $pdo->prepare("SELECT * FROM cars WHERE Registration_Number ='$get'");
$Get_Car->execute();
$Car_Info = $Get_Car->fetch();


if (isset($_POST['submit'])) {
    $registration_number = $_POST["registration_number"];
    $Company_Name = $_POST["Company_Name"];
    $Company_phone = $_POST["Company_Phone"];
    $Date_Of_Operation = $_POST["Date_of_operation"];
    $Specie = $_POST["specie"];
    $Date_Start = $_POST['Date_Start'];
    $Date_End = $_POST['Date_End'];
    $Ptotal = $_POST["Ptotal"];



    $sql = "INSERT INTO insurance (Species,Company_Name,Company_Phone,Date_Of_Operation,Date_Start,Date_End,Price_Total,Registration_Number) VALUES (:specie, :Company_Name, :phone, :Date_Of_Operations, :Date_Start, :Date_End, :Ptotal, :regestration_number)";

    $pdor = $pdo->prepare($sql);

    $pdoe = $pdor->execute(array(":specie" => $Specie, ":Company_Name" => $Company_Name, ":phone" => $Company_phone, ":Date_Of_Operations" => $Date_Of_Operation, ":Date_Start" => $Date_Start, ":Date_End" => $Date_End, ":Ptotal" => $Ptotal, ":regestration_number" => $registration_number));
    if ($pdoe) {
        header("location:Insurance.php?gin=$get ");
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

        <a href="Insurance.php?gin=<?= $get?>"><button class="btn btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
        <div class="row  justify-content-center align-items-center">
           <h3 class="col-12 text-center mb-5 textcolor">Add Insurance</h3>
            <form action="" method="post" class="col-7 row form" enctype="multipart/form-data">

            <div class="form-group col-6">
                    <label for="exampleInputEmail1">registration number</label>
                    <select class="form-control" name="registration_number">
                     
                            <option><?= $Car_Info["Registration_Number"] ?>
                            </option>
                    
                    </select>
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
                    <label for="">Date of operation</label>
                    <input class="form-control" aria-describedby="emailHelp" name="Date_of_operation" placeholder="Enter Date Of Operation" type="date">
                </div>
                <div class="form-group col-12">
                    <label for="exampleInputEmail1">Specie</label>
                    <input class="form-control" aria-describedby="emailHelp" name="specie" placeholder="Enter your first name" type="text">
                </div>

               

               

             


                <div class="form-group col-6">
                    <label for="">Date start</label>
                    <input class="form-control" aria-describedby="emailHelp" name="Date_Start" placeholder="Enter date start" type="date">
                </div>

                <div class="form-group col-6">
                    <label for="">Date end</label>
                    <input class="form-control" aria-describedby="emailHelp" name="Date_End" placeholder="Enter date end" type="date">
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