<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/projects.css">
</head>

<body>

<a href="index.php"><button class="btn btn back ml-5 mt-3 "><span class="glyphicon glyphicon-arrow-left"></span></button></a>
    <div class="row justify-content-center align-items-center body p-0 m-0">
        
        <form action="" class=" row form" method="POST">
        <h2 class="col-12 text-center mb-5 " > Login</h2>
            <div class="form-group col-12">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="user" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group col-12">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary mt-5 btn-block ">SUBMIT</button>
            <a href="regester.php" class="btn btn-outline-success mb-3 btn-block">REGESTERE</a>
            <?php
            include "connect.php";
            session_start();
          
            //Check If User Exist In Database 

if (isset($_POST['submit'])) {
    $EMAIL = $_POST["user"];
    $PASSWORD = $_POST["pass"];
    $stmt = $pdo->prepare("SELECT * FROM regester WHERE email = ? AND GroupId = 'admin'");
    $stmt->execute(array($EMAIL));
    $count = $stmt->rowCount();
    if ($count > 0) {
         $Category = $stmt->fetch();
            if(password_verify($PASSWORD,$Category["password"])){
                $_SESSION["email"]=$EMAIL;

                header("location:Dashboard.php");
            }else {
            echo '<script> alert ("you are a not Admine")</script>';
            }  
        
    }else {
        echo '<script> alert ("you are a not Admine")</script>';
        } 
      
    }
    ?>
        </form>
        
    </div>
    <script src="./bootstrap/js/popper.min.js"></script>
  <script src="./bootstrap/js/jquery-3.5.1.min.js"></script>
  <script src="./bootstrap/js/bootstrap.js"></script>
</body>

</html>