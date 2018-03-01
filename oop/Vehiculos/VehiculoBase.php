<?php 

namespace Vehiculo;

abstract class VehiculoBase{
    protected $dueño;
    protected $marca;

    public function __construct($name){
        $this->dueño = $name;
    }

    /*public function __destruct(){
        echo 'Se destruyó el objeto! <br/>';
    }*/

    public function mover(){
        $this->iniciarMotor();
        echo 'El vehiculo esta moviendose <br/>';
    }

    public function getDueño(){
        //echo 'el dueño del vehiculo es ' . $this->dueño . '<br/>';
        return $this->dueño;
    }

    public function setDueño($nombre){
        $this->dueño = $nombre;
    }

    public abstract function iniciarMotor();
}