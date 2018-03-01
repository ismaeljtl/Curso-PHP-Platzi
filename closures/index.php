<?php 

/*$var1 = 1;

$var = function () use($var1){
    echo 'hola mundo';
    echo 'el valor es '.$var1;
};

$var();*/

$numeros = [1, 2, 3, 4, 5];
$val = 2;
$resultado = array_map(function ($n) use ($val){
    $val = 5;
    return $n * $val;
}, $numeros);

var_dump($resultado);