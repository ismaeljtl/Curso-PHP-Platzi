<?php 

if (true){
    echo "hola <br/>";
}

$color = 'red';

switch($color) {
    case 'blue':
        echo 'Color is blue';
        break;
    case 'red':
        echo 'Color is red';
        break;
    default: //si no elige ninguna de las anteriores
        echo 'Color is not defined';
        break;
}

if ($color == 'white'){
    echo 'el color es blanco';
}else if ($color == 'blue'){
    echo 'el color es azul';
}else{
    echo ' el color es rojo';
}