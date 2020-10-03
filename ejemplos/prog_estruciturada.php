<?php 

$vehiculo1 = (object)["marca" => "Toyota", "modelo" => "Corolla"];
$vehiculo2 = (object)["marca" => "Hyundai", "modelo" => "Santa Fe"];

function mostrar($vehiculo){
	echo "Hola, soy un ".$vehiculo->marca.", modelo ".$vehiculo->modelo;
}

mostrar($vehiculo2);

?>