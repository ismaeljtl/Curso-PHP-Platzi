<?php 

$dbHost = "localhost";
$dbName = "mydb";
$dbUser = "root";
$dbPass = "";

try{
    $pdo = new PDO("mysql:host = $dbHost; dbname = $dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Para que notifique los errores
}catch(Exception $e){
    echo $e->getMessage();
}
