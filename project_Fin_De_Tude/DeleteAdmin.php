<?php
include "connect.php";

$id = ($_GET['id']);
if ($id) {
    $stmt = "DELETE FROM regester WHERE email=:id";
    $pdor = $pdo->prepare($stmt);
    $pdoe = $pdor->execute(array(":id" => $id));
    if ($pdor) {
        header("location:./users.php");
    }
} else {
   echo "erour";
}
