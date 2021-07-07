<?php
include "connect.php";

$id = ($_GET['id']);
if ($id) {
    $stmt = "DELETE FROM reservation WHERE Id_Res=:id";
    $pdor = $pdo->prepare($stmt);
    $pdoe = $pdor->execute(array(":id" => $id));
    if ($pdor) {
        header("location:./reservation.php");
    }
} else {
   echo "erour";
}
