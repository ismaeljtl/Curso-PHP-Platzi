<?php 

namespace Vehiculo;

require_once 'Vehiculos/VehiculoBase.php';


class Juguete extends VehiculoBase {
    // Elimino esta funcion para que se haga uso del metodo de la clase VehiculoBase y se vea 
    // el uso de la clase y metodo abstracto.
    /*public function mover(){
        echo 'El carro esta moviendose <br/>';
    }*/

    public function iniciarMotor(){
        throw new \Exception('El motor no ha podido ser encontrado');
    }
}