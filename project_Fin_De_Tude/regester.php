<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/projects.css">
</head>

<body>

<a href="login.php"><button class="btn btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
    <div class="row  p-0 m-0  justify-content-center align-items-center">

        <form action="" method="post" class="col-7 row form"  enctype="multipart/form-data">
            <h2 class="col-12 text-center mb-5 "> Regestere</h2>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">First Name</label>
                <input class="form-control" aria-describedby="emailHelp" name="fname" placeholder="Enter your first name" type="text" required>
            </div>

            <div class="form-group col-6">
                <label for="">last Name</label>
                <input class="form-control" aria-describedby="emailHelp" name="lname" placeholder="Enter your last name" type="text" required>
            </div>

            <div class="form-group col-6">
                <label for="">Phone</label>
                <input class="form-control" aria-describedby="emailHelp" name="phone" placeholder="Enter your phone" type="text" required>
            </div>

            <div class="form-group col-6">
                <label for="">email</label>
                <input class="form-control" aria-describedby="emailHelp" name="email" placeholder="Enter your email" type="text" required>
            </div>
            <div class="form-group col-12">
                    <label for="">Image</label>
                    <input class="form-control" aria-describedby="emailHelp" name="Client_Image" placeholder="Enter Client Image" type="file">
                </div>

            <div class="form-group col-12">
                <label for="">Password</label>
                <input class="form-control" aria-describedby="emailHelp" name="password" placeholder="Enter your password" type="password" required>
            </div>

            <div class="form-group col-12">
                <label for="">Confirm Password</label>
                <input class="form-control" aria-describedby="emailHelp" name="confirm" placeholder="Confirm your password" type="password" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4 mt-4 ">SUBMIT</button>
        </form>
    </div>



    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.js"></script>

    <?php
include "connect.php";

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $Client_Image = $_FILES['Client_Image']['tmp_name'];
    $traget = "image/" . $_FILES['Client_Image']['name'];
    move_uploaded_file($Client_Image, $traget);
    $password = $_POST['password'];
    $hashedPass = password_hash($password, PASSWORD_DEFAULT);
    $confirm = $_POST['confirm'];
    $hashedConfirm = password_hash($confirm, PASSWORD_DEFAULT);

    $sql = "INSERT INTO  regester (fname,lname,email,Image,phone,password,confirm) VALUES (:fname ,:lname ,:email ,:image ,:phone , :password, :confirm)";

    $pdor = $pdo->prepare($sql);

    $pdoe = $pdor->execute(array(":fname" => $fname, ":lname" => $lname, ":phone" => $phone, ":email" => $email, ":image" => $traget, ":password" => $hashedPass, ":confirm" => $hashedConfirm));
    if ($pdoe) {
        header("location:login.php");
    } else {
        echo "Data not insert";
    }
}


?>

  <script src="./bootstrap/js/bootstrap.js"></script>
  <script src="./bootstrap/js/jquery-3.5.1.min.js"></script>
  <script src="./bootstrap/js/popper.min.js"></script>
</body>

</html>