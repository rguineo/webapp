<?php 

Class Vehiculo{
	#propiedades 
	public $marca;
	public $modelo;
	public $nombre;

	#metodos 
	public function mostrar(){
		echo "Hola, soy un auto ".$this->marca.", de modelo ".$this->modelo." desde una clase <br>";
	}

	public function saludar(){
		echo "Hola ".$this->nombre;
	}

}


$a = new Vehiculo;
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();
$a -> nombre = "Roberto";
$a -> saludar();
echo "<br>";


$b = new Vehiculo;
$b -> marca = "Hyundai";
$b -> modelo = "Santa Fe";
$b -> mostrar();
$b -> nombre = "Andres";
$b -> saludar();
echo "<br>";







?>