<?php
/**
 * Controlador que carga los elementos a los Vehiculos
 */

namespace Controller;

use Models\Vehiculo;
use Models\Autobus;
use Models\Camioneta;

class CarrosController {

    public $carros = [];
    public $autobus = [];
    public $camionetas = [];

    function __construct()
    {

        $this->carros = [
            1 => new Vehiculo("Wolkswagen","Polo","negro","Tatiana"),
            2 => new Vehiculo("Toyota","Corolla","verde","Oscar"),
            3 => new Vehiculo("Skoda","Octavia","gris","Noemi"),
            4 => new Vehiculo("Kia","Niro","azul","Valeria")
        ];
        
    }


    public function index(){

        //Asigno los coches a una variable que estará esperando la vista
        $rowset = $this->carros;


        //Le paso los datos a la vista
        require("view/index.php");

    }



    public function ver($id){

        if (array_key_exists($id,$this->carros)){

            //Si el elemento está en el array, lo muestro
            $row = $this->carros[$id];
            require("view/ver.php");
        }
        else{

            //Llamo al método por defecto del controlador
            $this->index();
        }

    }

}
