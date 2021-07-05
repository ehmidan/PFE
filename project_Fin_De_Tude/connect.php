<?php
$dsn = 'mysql:host=localhost;dbname=pfe'; //Data source name
$user = 'root'; //the user the conect
$pass = ''; // password off this user

try {
    $pdo = new PDO($dsn, $user, $pass); //start anew connection with PDO Class
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'DB CONECION Faible' . $e->getMessage();
    exit();
}
?>