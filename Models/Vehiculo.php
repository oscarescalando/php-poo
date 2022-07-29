<?php
/**
 * Clase base para el manejo de Vehiculos
 */

namespace Models;

class Vehiculo {

    public $marca;
    public $modelo;
    public $color;
    public $propietario;
    public $planta;  //para hacer referencia a la planta (piso) en la que estaciona el vehículo (aunque no aparezca en el constructor al no saber en qué planta estará el coche).
    public $plantas = array("superficie","subterraneo1","subterraneo2");

    protected $pasajeros; //pasajeros del vehiculo minimos


    function __construct($miMarca,$miModelo,$miColor,$miPropietario){
        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->color = $miColor;
        $this->propietario = $miPropietario;

    }

    //Funciones o métodos
    function setMarca($miMarca){

        $this->marca = $miMarca;

    }

    function getMarca(){
        return $this->marca;
    }

    function setModelo($miModelo){
        $this->modelo = $miModelo;
    }

    function getModelo(){
        return $this->modelo;
    }

    function setColor($miColor){
        $this->color = $miColor;
    }

    function getColor(){
        return $this->color;
    }

    function setPropietario($miPropietario){
        $this->propietario = $miPropietario;
    }

    function getPropietario(){
        return $this->propietario;
    }

    function setPlanta($miPlanta){
        $this->planta = $miPlanta;
    }

    function getPlanta(){
        return $this->planta;
    }

    public function setPasajeros($pasajeros) {
        
        if ($pasajeros == 4) {
            $this->pasajeros = $pasajeros;
        }
        else {
            echo "Necesitas asignar 4 pasajeros";
        }
    
    }
}
