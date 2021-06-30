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
    <link rel="stylesheet" href="./main.css">
    <title>Document</title>
</head>
<body>
<div class="row justify-content-center align-items-center">
        
        <form action="" method="post" class="col-7 row mt-5 form">
        <h2 class="col-12 text-center">Add Product</h2>
        <div class="form-group col-12">
                <label for="exampleInputEmail1">Name Product </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter the product">
            </div>
            <div class="form-group col-12">
                <label for="exampleInputEmail1">Name Category </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="category" placeholder="Enter the Category">
            </div>
            <div class="form-group col-12">
                <label for="exampleInputPassword1">Quantity</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="quantity" placeholder="Enter the quantity">
            </div>
            <div class="form-group col-12">
                <label for="exampleInputPassword1">price</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="price" placeholder="Enter the price">
            </div>
            <div class="form-group col-12">
                <label for="exampleInputPassword1">Link The img</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="link"  placeholder="Enter the link">
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block mb-3 ">Add</button>
            </div>
            </div>
        </form>
    </div> 
    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/bootstrap.js"></script> 
</body>
</html>