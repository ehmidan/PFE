<!-- <?php
        include "connect.php";
        if (isset($_POST['submit'])) {
            $NAME = $_POST["name"];
            $CATEGORY = $_POST["category"];
            $PRICE = $_POST["price"];
            $QUANTITY = $_POST["quantity"];
            $LINK = $_POST["link"];

            $sql = "INSERT INTO  catigorys (name,quantity,Price,Category,ImgCategory) VALUES (:NAME, :QUANTITY, :PRICE , :CATEGORY, :LINK)";

            $pdor = $pdo->prepare($sql);

            $pdoe = $pdor->execute(array(":NAME" => $NAME, ":CATEGORY" => $CATEGORY, ":QUANTITY" => $QUANTITY, ":PRICE" => $PRICE, ":LINK" => $LINK));
            if ($pdoe) {
                header("location:category.php");
            } else {
                echo "Data not insert";
            }
        }

        ?> -->

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

            <form action="" method="post" class="col-7 row form">
                <h4 class="col-12 text-center mb-3 mt-1 textcolor">Add Car</h4>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">registration number</label>
                    <input class="form-control" aria-describedby="emailHelp" name="fname" placeholder="Enter registration number" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">Mark</label>
                    <input class="form-control" aria-describedby="emailHelp" name="lname" placeholder="Enter Mark" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">date of purchase </label>
                    <input class="form-control" aria-describedby="emailHelp" name="phone" placeholder="Enter date of purchase" type="date">
                </div>

                <div class="form-group col-6">
                    <label for="">Color</label>
                    <input class="form-control" aria-describedby="emailHelp" name="email" placeholder="Enter Color" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Price Min </label>
                    <input class="form-control" aria-describedby="emailHelp" name="fname" placeholder="Enter Price Min " type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">Price Max</label>
                    <input class="form-control" aria-describedby="emailHelp" name="lname" placeholder="Enter Price Max" type="text">
                </div>

                <div class="form-group col-6">
                    <label for="">End of circulation </label>
                    <input class="form-control" aria-describedby="emailHelp" name="phone" placeholder="Enter End of circulation " type="date">
                </div>

                <div class="form-group col-6">
                    <label for="">mileage</label>
                    <input class="form-control" aria-describedby="emailHelp" name="email" placeholder="Enter mileage" type="text">
                </div>
                <div class="form-group col-12">
                    <label for="">Buying price </label>
                    <input class="form-control" aria-describedby="emailHelp" name="password" placeholder="Enter Buying price " type="text">
                </div>
                <div class="form-group col-12">
                    <label for="">Car Image</label>
                    <input class="form-control" aria-describedby="emailHelp" name="password" placeholder="Enter Car Image" type="file">
                </div>


                <div class="col-12">
                    <a href=""><button type="submit" name="submit" class="btn col-12 button_add_res mb-3 mt-2">Add</button></a>
                </div>
        </div>
        </form>
    </div>

    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>