<?php 

require 'Vehiculos/Carro.php';
require 'Vehiculos/Camion.php';
require 'Vehiculos/Juguete.php';

/**use Vehiculo\Carro; En php5
 * use Vehiculo\Camion;
 */

use Vehiculo\{Carro, Camion, Juguete}; //A partir de php7

echo '<h1>Carro</h1><br>';
$carro = new Carro('Jesus');
$carro->mover();
$carro->getDueño();
$carro->setDueño('Ismael');
$carro->getDueño();
$carro->miPosicion();

echo '<h1>Camion</h1><br>';
$camion1 = new Camion('Ismael', 'pickup', 'ford');
$camion1->mover();

$camion2 = new Camion('Jesus', 'pickup', 'chevrolet');
$camion2->mover();

echo '<br>La cantidad total de camiones es: ' . Camion::getTotal() . '<br>';

$ser = serialize($carro->getDueño());
$newSer = unserialize($ser);
echo $newSer;

try{
    echo '<h1>Carro de juguete</h1><br>';
    $juguete = new Juguete('Ismael');
    $juguete->mover();
}catch(Exception $e){
    echo 'El juguete no tiene motor<br>';
    //log...
}finally{
    echo 'Finally<br>';
}