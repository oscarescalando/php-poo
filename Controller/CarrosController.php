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

        $this->autobus = [
            1 => new Autobus("Volvo","9800 2017","gris","oscar","TopDev"),
            2 => new Autobus("Volvo2","9800 2020","gris","luis","K2"),
            3 => new Autobus("Volvo3","9800 2022","gris","juan","Solana"),
        ];
        
    }


    public function index(){

        //Asigno los coches a una variable que estará esperando la vista
        $rowset = $this->carros;
        $rowBus = $this->autobus;

        //Le paso los datos a la vista
        require("View/index.php");

    }



    public function ver($id){

        if (array_key_exists($id,$this->carros)){

            //Si el elemento está en el array, lo muestro
            $row = $this->carros[$id];
            require("View/ver.php");
        }
        else{

            //Llamo al método por defecto del controlador
            $this->index();
        }

    }

}
