<?php 

// Aqui va un comentario
# Asi tambien se puede comentar

// Variables

#Variable Numerica


$num = 25;
echo "Esto es una variable numerica: ".$num." <br>";
// var_dump($num);
echo "<br>";

#variable Texto
$text = "Hola Mundo";
echo "Esto es una variable texto: ".$text."<br>";
//var_dump($text);
echo "<br>";

#variable Bolean
$boleana = false;
echo "Esto es una variable boleana: ".$boleana."<br>";
//var_dump($boleana);
echo "<br>";

#variable Arreglo
$colores = array(	"azul", 
					"amarillo", 
					"rojo", 
					"blanco" );

echo "Esto es una variable arreglo: ".$colores[0]."<br>";
echo "Esto es una variable arreglo: ".$colores[1]."<br>";
echo "Esto es una variable arreglo: ".$colores[2]."<br>";
echo "Esto es una variable arreglo: ".$colores[3]."<br>";
//var_dump($colores);
echo "<br> <br>";

#variable Arreglo con propiedades
$verduras = array(	"verdura1" => "lechuga", 
					"verdura2" => "cebolla", 
					"verdura3" => "apio");

echo "Esto es una variable arreglo con propiedades: ".$verduras['verdura1']."<br>";
echo "Esto es una variable arreglo con propiedades: ".$verduras['verdura2']."<br>";
echo "Esto es una variable arreglo con propiedades: ".$verduras['verdura3']."<br>";
//var_dump($verduras);
echo "<br>";


#variable Arreglo objeto
$frutas = (object)[	"fruta1" => "pera", 
					"fruta2" => "manzana", 
					"fruta3" => "sandia"];

echo "Esto es una variable tipo objeto: ".$frutas->fruta1."<br>";
echo "Esto es una variable tipo objeto: ".$frutas->fruta2."<br>";
echo "Esto es una variable tipo objeto: ".$frutas->fruta3."<br>";

//var_dump($frutas);
echo "<br>";













?>