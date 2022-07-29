<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

error_reporting(0);

use Controller\CarrosController;



//Autoload de todas las clases
spl_autoload_register(function($clase) {
    require_once str_replace('\\','/',$clase).'.php';
});

//Instancio el controlador
$controller = new CarrosController;

//Ruta de la home
$dir = realpath(dirname(__FILE__));
$home = $dir."/index.php/";

echo $home;

//Quito la home de la ruta de la barra de direcciones
$ruta = str_replace($home, "", $_SERVER["REQUEST_URI"]);

//Creo el array de ruta (filtrando los vacíos)
$array_ruta = array_filter(explode("/", $ruta));

//print_r($array_ruta );

//Decido la ruta en función de los elementos del array
if ($array_ruta[3] == "carros" && is_numeric($array_ruta[4])){

    //Llamo al método ver pasándole la clave que me están pidiendo
    $controller->ver($array_ruta[4]);
}
else{

    //Llamo al método por defecto del controlador
    $controller->index();
}
