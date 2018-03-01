<?php 

include_once 'config.php';

$id = $_GET['id'];

$sql = 'DELETE FROM mydb.User WHERE id=:id';
$query = $pdo->prepare($sql);
$query->execute([
    'id' => $id
]);

header("Location:list.php");