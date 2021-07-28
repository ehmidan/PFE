<?php
include "connect.php";

$get = $_GET['id'];
$reqCat = $pdo->prepare("SELECT * FROM cars WHERE Registration_Number='$get'");
$reqCat->execute();
$Res = $reqCat->fetch();

if (isset($_POST["submit"])){
    $registration_number = $_POST["registration_number"];
    $CarColor = $_POST["CarColor"];
    $DateOfPurchase = $_POST["DateOfPurchase"];
    $Mark = $_POST["Mark"];
    $BuyingPrice = $_POST["BuyingPrice"];
    $EndOfCirculation = $_POST["EndOfCirculation"];
    $PriceMin = $_POST['PriceMin'];
    $PriceMax = $_POST["PriceMax"];
    
    $stmt= "UPDATE cars SET Registration_Number=:registration_number , Car_Color=:CarColor , Date_Of_Purchase=:DateOfPurchase , Mark=:Mark , Buying_Price=:BuyingPrice , End_Of_Circulation=:EndOfCirculation , Price_Min=:PriceMin , Price_Max=:PriceMax WHERE Registration_Number='$get'"; 
    $pdor = $pdo->prepare($stmt);
    $pdoe = $pdor->execute(array(":registration_number" => $registration_number, ":CarColor" => $CarColor, ":DateOfPurchase" => $DateOfPurchase, ":Mark" => $Mark, ":BuyingPrice" => $BuyingPrice, ":EndOfCirculation" => $EndOfCirculation, ":PriceMin" => $PriceMin, ":PriceMax" => $PriceMax));
    if($pdoe){
        header("location:Giniral_Info.php?gin=$get");
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

        <a href="Giniral_Info.php?gin=<?= $get ?>"><button class="btn btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
        <div class="row  justify-content-center align-items-center">

            <form action="" method="post" class="col-7 row form" enctype="multipart/form-data">
                <h4 class="col-12 text-center mb-3 mt-1 textcolor">Edite Giniral Info</h4>
               
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">registration number</label>
                    <select class="form-control" name="registration_number"> 
                    <option><?= $Res["Registration_Number"] ?></option>
                    </select>
                </div>
                
                <div class="form-group col-6">
                    <label for="">Mark</label>
                    <input class="form-control" aria-describedby="emailHelp"  name="Mark" value=<?= $Res["Mark"] ?> placeholder="Enter the Mark" type="text">
                </div>
                <div class="form-group col-6">
                    <label for="">Car Color</label>
                    <input class="form-control" aria-describedby="emailHelp" name="CarColor" value="<?= $Res["Car_Color"] ?>"  type="text">
                </div>
              

                <div class="form-group col-6">
                    <label for="">Date Of Purchase</label>
                    <input class="form-control" aria-describedby="emailHelp" name="DateOfPurchase" value="<?= $Res["Date_Of_Purchase"] ?>"  type="date">
                </div>
                <div class="form-group col-12">
                    <label for="">Buying Price</label>
                    <input class="form-control" aria-describedby="emailHelp"  name="BuyingPrice"  value=<?= $Res["Buying_Price"] ?> placeholder="Enter Car Image" type="text">
                </div>

                <div class="form-group col-12">
                    <label for=""> End Of Circulation</label>
                    <input class="form-control" aria-describedby="emailHelp" name="EndOfCirculation"  value=<?= $Res["End_Of_Circulation"] ?> placeholder="Enter Price Total" type="date">
                </div>
        
                <div class="form-group col-6">
                    <label for="">Price Min </label>
                    <input class="form-control" aria-describedby="emailHelp" name="PriceMin" value=<?= $Res["Price_Max"] ?> placeholder="Enter Date Start" type="text">
                </div>

       
                <div class="form-group col-6">
                    <label for="">Price Max</label>
                    <input class="form-control" aria-describedby="emailHelp" name="PriceMax"  value=<?= $Res["Price_Min"] ?> placeholder="Enter Date End" type="text">
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