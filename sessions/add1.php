<?php 

session_start();

$_SESSION['count']++;
$_SESSION['count1']++;

echo 'estamos en la pagina del incremento';