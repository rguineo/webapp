<?php 

Class Vehiculo{
	#propiedades 
	public $marca;
	public $modelo;

	#metodos 
	public function mostrar(){
		echo "Hola, soy un auto ".$this->marca.", de modelo ".$this->modelo;
	}
}

$a = new Vehiculo;
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();

echo "<br>";

$b = new Vehiculo;
$b -> marca = "Hyundai";
$b -> modelo = "Santa Fe";
$b -> mostrar();

echo "<br>";

$b = new Vehiculo;
$b -> marca = "Mazda";
$b -> modelo = "mazda 6";
$b -> mostrar();









?>