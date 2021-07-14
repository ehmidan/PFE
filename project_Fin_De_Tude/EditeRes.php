<?php
include "connect.php";

$get = $_GET['id'];
$reqCat = $pdo->prepare("SELECT * FROM reservation WHERE Id_Res='$get'");
$reqCat->execute();
$Res = $reqCat->fetch();

if (isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $CIN = $_POST["CIN"];
    $Mark = $_POST["Mark"];
    $DStart = $_POST["DStart"];
    $DEnd = $_POST["DEnd"];
    $Car_Image = $_POST['Car_Image'] . ".png";
    $Ptotal = $_POST["Ptotal"];
    $registration_number = explode(";", $_POST["registration_number"])[1];

    $stmt= "UPDATE reservation SET First_Name=:fname , Last_Name=:lname , Phone=:phone , CIN=:CIN , Mark=:Mark , Date_Start=:DStart , Date_End=:DEnd , Car_Image=:Car_Image , Price_Total=:Ptotal , Rigestration_Number=:Rnumber WHERE Id_Res=$get"; 
    $pdor = $pdo->prepare($stmt);
    $pdoe = $pdor->execute(array(":fname" => $fname, ":lname" => $lname, ":phone" => $phone, ":CIN" => $CIN, ":Mark" => $Mark, ":DStart" => $DStart, ":DEnd" => $DEnd, ":Car_Image" => $Car_Image, ":Ptotal" => $Ptotal, ":Rnumber" => $registration_number));
    if($pdoe){
        header("location:reservation.php");
        echo '<script> alert ("Data Updated")</script>'; 
    }else{
        {echo '<script> alert ("Data Not Updated")</script>';} 
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

        <a href="reservation.php"><button class="btn btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
        <div class="row  justify-content-center align-items-center">

            <form action="" method="post" class="col-7 row form" enctype="multipart/form-data">
                <h4 class="col-12 text-center mb-3 mt-1 textcolor">Client Information</h4>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">First Name</label>
                    <input class="form-control" aria-describedby="emailHelp" name="fname" value=<?= $Res["First_Name"] ?> placeholder="Enter your first name" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">last Name</label>
                    <input class="form-control" aria-describedby="emailHelp" name="lname" value=<?= $Res["Last_Name"] ?> placeholder="Enter your last name" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">Phone</label>
                    <input class="form-control" aria-describedby="emailHelp" name="phone" value=<?= $Res["Phone"] ?> placeholder="Enter your phone" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">CIN</label>
                    <input class="form-control" aria-describedby="emailHelp" name="CIN" value=<?= $Res["CIN"] ?> placeholder="Enter your CIN" type="text">
                </div>
                <hr>
                <h4 class="col-12 text-center mb-2 mt-2 textcolor">Car Information</h4>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">registration number</label>
                    <select class="form-control" name="registration_number" onchange="getSelectedValue()">
                        <?php
                        $Get_Car = $pdo->prepare("SELECT * FROM cars WHERE Registration_Number NOT IN (SELECT Rigestration_Number FROM reservation WHERE CURRENT_TIMESTAMP BETWEEN Date_Start AND Date_End)");
                        $Get_Car->execute();
                        while ($Car_Info = $Get_Car->fetch()) {
                        ?>
                            <option value=<?= $Car_Info["Mark"] . "." . $Car_Info["CarImage"] . ";" . $Car_Info["Registration_Number"] ?>><?= $Car_Info["Registration_Number"] ?>
                            </option>
                        <?php } ?>

                    </select>
                </div>


                <div class="form-group col-6">
                    <label for="">Mark</label>
                    <input class="form-control" aria-describedby="emailHelp" id="markk" name="Mark" value=<?= $Res["Mark"] ?> placeholder="Enter the Mark" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">Date Start </label>
                    <input class="form-control" aria-describedby="emailHelp" name="DStart" value=<?= $Res["Date_Start"] ?> placeholder="Enter Date Start" type="datetime-local">
                </div>

                <div class="form-group col-6">
                    <label for="">Date End</label>
                    <input class="form-control" aria-describedby="emailHelp" name="DEnd"  value=<?= $Res["Date_End"] ?> placeholder="Enter Date End" type="datetime-local">
                </div>
                <div class="form-group col-12" hidden>
                    <label for="">Car Image</label>
                    <input class="form-control" aria-describedby="emailHelp" id="regestration" name="Car_Image"  value=<?= $Res["Car_Image"] ?> placeholder="Enter Car Image" type="text">
                </div>

                <div class="form-group col-12">
                    <label for="">Price Total</label>
                    <input class="form-control" aria-describedby="emailHelp" name="Ptotal"  value=<?= $Res["Price_Total"] ?> placeholder="Enter Price Total" type="text">
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