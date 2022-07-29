<?php
/**
 * Clase manejo de Autobus
 */

namespace Models;

use Models\Vehiculo;

class Camioneta extends Vehiculo
{
    function puedeAparcar($miPlanta){

        //True si está en el array y no es subterraneo2
        return (array_search($miPlanta,$this->plantas) !== false && array_search($miPlanta,$this->plantas) < 2);
    }
}