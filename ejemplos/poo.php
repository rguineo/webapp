<?php 

#Clases
#
Class Automovil{
	#propiedades

	public $marca;
	public $modelo;

	#metodos
	public function mostrar(){
		echo "Hola, soy un ".$this->marca.", modelo ".$this->modelo."<br>"; 
	}
}

$a = new Automovil;
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();

$b = new Automovil;
$b -> marca = "Hyundai";
$b -> modelo = "Santa Fe";
$b -> mostrar();

 ?>