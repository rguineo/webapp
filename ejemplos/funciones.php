<?php 

#Funciones

#funcion sin parametros
function saludo(){
	echo "Hola Mundo";
	echo "<br>";
}

saludo();


#Funcion con parametros
function despedida($mensaje){

	echo $mensaje;
	echo "<br>";
}

$msj = "Chao Mundo 2";
despedida($msj);

#Funcion con retorno
function retorno($retornar){
	return $retornar;
}

echo retorno("hola y chao mundo");

?>