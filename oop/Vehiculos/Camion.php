<?php 

namespace Vehiculo;

require_once 'Vehiculos/VehiculoBase.php';

class Camion extends VehiculoBase{

    private $tipo;
    private static $count;

    public function __construct($name, $tipo, $marca){
        parent::__construct($name);
        $this->tipo = $tipo;
        $this->marca = $marca;
        self::$count++;
    }

    // Elimino esta funcion para que se haga uso del metodo de la clase VehiculoBase y se vea 
    // el uso de la clase y metodo abstracto.
    /*public function mover(){
        echo 'El carro de tipo ' . $this->tipo . ' y marca ' . $this->marca . ' esta moviendose <br/>';
    }*/

    public static function getTotal(){
        return self::$count;
    }

    public function iniciarMotor(){
        echo 'El motor del camion se ha iniciado.<br>';
    }
}