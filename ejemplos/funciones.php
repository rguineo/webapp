<?php 

#Funciones

#funcion sin parametros
function saludo(){

	echo "Hola mundo desde una funcion sin parametros <br>";

}

saludo();






#funcion con parametros
function despedida($texto){

	echo $texto."<br>";

}

$msj="Chao Mundo - funcion con parametros";
despedida($msj);


#ejemplo funcion con parametros
function suma($a, $b){
	$resultado = $a + $b;
	echo "El resultado de a + b = ".$resultado."<br>";
}

$num1=1000;
$num2=2500;

suma($num1, $num2);


#funcion con retorno
function retornar($msj){
	return $msj;
}

echo retornar("Hola a todos - con retorno");


#ejemplo funcion con retorno
function multiplicar ($a, $b){
	$resultado = $a * $b;
	return $resultado;
}

echo "<br> el resultado de la multiplicacion es: ".multiplicar(10, 8);




?>