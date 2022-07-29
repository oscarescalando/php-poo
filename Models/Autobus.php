<?php
/**
 * Clase manejo de Autobus
 */

namespace Models;

use Models\Vehiculo;

class Autobus extends Vehiculo {

    private $empresa;

    function __construct($miMarca,$miModelo,$miColor,$miPropietario,$miEmpresa){

        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->color = $miColor;
        $this->propietario = $miPropietario;
        $this->empresa = $miEmpresa;

    }

    //Funciones o métodos
    function setEmpresa($miEmpresa){
        $this->empresa = $miEmpresa;
    }

    function getEmpresa(){
        return $this->empresa;
    }

    function puedeAparcar($miPlanta){
        //True si está en el array y es superficie
        return (array_search($miPlanta,$this->plantas) !== false && array_search($miPlanta,$this->plantas) == 0);
    }


    /**
     * Aplicando polimorfismo. Para aplicar polimorfismo, 
     * podemos sobreescribir dicho método dentro de nuestra clase
     * VehiculoController para que pueda aceptar mas pasajeros
     *
     * @param [type] $pasajeros
     * @return void
     */
    public function setPasajeros($pasajeros) {
        if ($pasajeros == 10) {
            $this->pasajeros = $pasajeros;
        }
        else {
            echo "Necesitas asignar 10 pasajeros";
        }
    
    }


}