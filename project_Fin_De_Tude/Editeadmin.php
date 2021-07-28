<?php
include "connect.php";

$get = $_GET['id'];
$reqCat = $pdo->prepare("SELECT * FROM regester WHERE email='$get'");
$reqCat->execute();
$Res = $reqCat->fetch();

if (isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $Administration = $_POST["Administration"];

    $stmt= "UPDATE regester SET fname=:fname , lname=:lname , email=:email , GroupId=:Administration WHERE email='$get'"; 
    $pdor = $pdo->prepare($stmt);
    $pdoe = $pdor->execute(array(":fname" => $fname, ":lname" => $lname, ":email" => $email, ":Administration" => $Administration));
    if($pdoe){
        header("location:users.php");
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

        <a href="users.php"><button class="btn btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
        <div class="row  justify-content-center align-items-center">

            <form action="" method="post" class="col-7 row form" enctype="multipart/form-data">
                <h4 class="col-12 text-center mb-3 mt-1 textcolor">Administration</h4>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">First Name</label>
                    <input class="form-control" aria-describedby="emailHelp" name="fname" value="<?= $Res["fname"] ?>"  type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">last Name</label>
                    <input class="form-control" aria-describedby="emailHelp" name="lname" value="<?= $Res["lname"] ?>"  type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">Email</label>
                    <input class="form-control" aria-describedby="emailHelp" name="email" value="<?= $Res["email"] ?>"  type="text">
                </div>

                
                  <div class="col-6">
                        <label for="exampleInputEmail1">Administration</label>
                        <select class="form-control" name="Administration">
                          
                                <option>admin</option>
                                <option>not admin</option>
                         
                      
                        </select>
                  </div>
                   
                <div class="col-12">
                    <button type="submit" name="submit" class="btn col-12 button_add_res mt-3 mt-2">Add</button>
                </div>
               
                </form>
                </div>


               
        </div>
     
    </div>
    <script src="app.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>