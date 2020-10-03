<?php 

#Funciones

#funcion sin parametros
function saludo(){

	echo "Hola mundo <br>";

}

saludo();


#funcion con parametros
function despedida($t){

	echo $t."<br>";

}

$msj="Chao Mundo";
despedida($msj);


#ejemplo funcion con parametros
function suma ($a, $b){
	$resultado = $a + $b;
	echo "El resultado de a + b = ".$resultado."<br>";
}

$num1=23423;
$num2=32423;

suma($num1, $num2);


#funcion con retorno

function retornar($msj){
	return $msj;
}

echo retornar("Hola a todos");

#ejemplo funcion con retorno
function multiplicar ($a, $b){
	$resultado = $a * $b;
	return $resultado;
}

echo "<br> el resultado de la multiplicacion es: ".multiplicar(5, 8);




?>