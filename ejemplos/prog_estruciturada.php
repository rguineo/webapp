<?php 

$vehiculo1 = (object)["marca" => "Toyota", "modelo" => "Corolla"];
$vehiculo2 = (object)["marca" => "Hyundai", "modelo" => "Santa Fe"];
$vehiculo3 = (object)["marca" => "Mazda", "modelo" => "6"];


function Vehiculo($auto){

	echo "Hola, soy un auto ".$auto->marca.", de modelo ".$auto->modelo;

}


Vehiculo($vehiculo3);

?>