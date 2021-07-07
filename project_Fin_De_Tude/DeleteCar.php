<?php
include "connect.php";

$id = ($_GET['id']);
if ($id) {
    $stmt = "DELETE FROM cars WHERE Registration_Number=:id";
    $pdor = $pdo->prepare($stmt);
    $pdoe = $pdor->execute(array(":id" => $id));
    if ($pdor) {
        header("location:./Available_Cars.php");
    }
} else {
   echo "erour";
}
