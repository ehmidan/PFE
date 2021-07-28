<?php
include "connect.php";
       
if (isset($_POST['submit'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $CIN = $_POST["CIN"];
    $Client_Image = $_FILES['Client_Image']['tmp_name'];
    $traget = "image/" . $_FILES['Client_Image']['name'];
    move_uploaded_file($Client_Image, $traget);
    $registration_number = $_POST["registration_number"];
    $Mark = $_POST["mark"];
    $DStart = $_POST["DStart"];
    $DEnd = $_POST["DEnd"];
    $Car_Image = $_POST['Car_Image'];
    $Ptotal = $_POST["Ptotal"];
  

    $sql = "INSERT INTO reservation (First_Name,Last_Name,Phone,CIN,Image_Client,Rigestration_Number,Mark,Date_Start,Date_End,Car_Image,Price_Total) VALUES (:fname, :lname, :phone , :CIN, :Client_Image, :registration_number, :Mark, :DStart, :DEnd, :Car_Image, :Ptotal)";

    $pdor = $pdo->prepare($sql);

    $pdoe = $pdor->execute(array(":fname" => $fname, ":lname" => $lname, ":phone" => $phone, ":CIN" => $CIN, ":Client_Image" => $traget, ":registration_number" => $registration_number, ":Mark" => $Mark, ":DStart" => $DStart, ":DEnd" => $DEnd, ":Car_Image" => $Car_Image, ":Ptotal" => $Ptotal));
    if ($pdoe) {
        header("location:reservation.php");
    } else {
        echo "Data not insert";
    }
}
if ($get = $_GET['id_Car']) {
    $Get_Car = $pdo->prepare("SELECT * FROM cars WHERE Registration_Number = '$get'");
    $Get_Car->execute();
    $Car_Info = $Get_Car->fetch();
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

        <a href="Available_Cars.php"><button class="btn btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
        <div class="row  justify-content-center align-items-center">

            <form action="" method="post" class="col-7 row form" enctype="multipart/form-data">
                <h4 class="col-12 text-center mb-3 mt-1 textcolor">Client Information</h4>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">First Name</label>
                    <input class="form-control" aria-describedby="emailHelp" name="fname" placeholder="Enter your first name" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">last Name</label>
                    <input class="form-control" aria-describedby="emailHelp" name="lname" placeholder="Enter your last name" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">Phone</label>
                    <input class="form-control" aria-describedby="emailHelp" name="phone" placeholder="Enter your phone" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">CIN</label>
                    <input class="form-control" aria-describedby="emailHelp" name="CIN" placeholder="Enter your CIN" type="text">
                </div>
                <div class="form-group col-12">
                    <label for="">Client Image</label>
                    <input class="form-control" aria-describedby="emailHelp" name="Client_Image" placeholder="Enter Client Image" type="file">
                </div>
                <hr>
                <h4 class="col-12 text-center mb-2 mt-2 textcolor">Car Information</h4>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">registration number</label>
                    <select class="form-control" name="registration_number">
                        <option><?= $Car_Info["Registration_Number"] ?></option>
                    </select>
                </div>


                <div class="form-group col-6">
                    <label for="">Mark</label>
                    <input class="form-control" aria-describedby="emailHelp" name="mark" value="<?= $Car_Info["Mark"] ?>" placeholder="Enter the Mark" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">Date Start </label>
                    <input class="form-control" aria-describedby="emailHelp" name="DStart" placeholder="Enter Date Start" type="datetime-local">
                </div>

                <div class="form-group col-6">
                    <label for="">Date End</label>
                    <input class="form-control" aria-describedby="emailHelp" name="DEnd" placeholder="Enter Date End" type="datetime-local">
                </div>
                <div class="form-group col-12" hidden>
                    <label for="">Car Image</label>
                    <input class="form-control" aria-describedby="emailHelp" name="Car_Image" value="<?= $Car_Info["CarImage"] ?>" placeholder="Enter Car Image" type="text">
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