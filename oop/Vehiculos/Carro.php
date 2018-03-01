<?php 

namespace Vehiculo;

require_once 'Vehiculos/VehiculoBase.php';
require_once 'Vehiculos/GPSTrait.php';

class Carro extends VehiculoBase implements \Serializable{
    // Elimino esta funcion para que se haga uso del metodo de la clase VehiculoBase y se vea 
    // el uso de la clase y metodo abstracto.
    /*public function mover(){
        echo 'El carro esta moviendose <br/>';
    }*/

    use GPSTrait;

    public function iniciarMotor(){
        echo 'El motor del carro se ha iniciado.<br>';
    }

    public function serialize(){
        return $this->dueño;
    }
    
    public function unserialize($serializado){
        return $this->dueño = $serializado;
    }
}