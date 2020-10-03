<?php 

$num1 = 200;
$num2 = 100;
$num3 = 300;

// division no puede el divisor ser 0
echo "Funcion IF <br>";
if ( $num2 == 0 ){

	$resultado = "Error: No se puede dividir por 0";

} else {

	$resultado = $num1 / $num2;

}

echo "El resultado de la division es: ".$resultado."<br>";

//// Encontrar el mayor de 3 numeros
echo "<br><br>";
echo "Funcion IF (anidados) <br>";

if ( $num1 > $num2 ){
	if ( $num1 > $num3 ){
		echo "El numero mayor es: ".$num1;
	} else { 
		echo "El numero mayor es: ".$num3;
	}

	} else {
	if ( $num2 > $num3 ){
		echo "El numero mayor es: ".$num2;
	} else {
		echo "El numero mayor es: ".$num3;
	}
}



// echo "<br><br>";
// echo "Funcion While <br>";

// $n = 0;

// solo imprima los numeros pares
// residuo 

// while ( $n <= 100) {

// 	if ( $n%2 == 0 ){
// 		echo "El valor de n es: ".$n." Es PAR <br>";
// 	} else {
// 		echo "El valor de n es: ".$n." Es IMPAR <br>";
// 	}
// 	$n++;
// }

$m = 10;

while ( $m < 0 ){ // Mientras
	echo "<br> Hola Mundo";
	$m++;
}

do { // Hacer mientras
	echo "<br> Hola Mundo";
	$m++;
} while ( $m < 0);


echo "<br>";
for ($i=0; $i < 10; $i++) { 
	echo $i.".- Hola Mundo con ciclo FOR <br>";
}

$j=1;

switch ($j) {
	case '0':
		echo "la variable j es 0";
		break;

	case '1':
		echo "la variable j es 1";
		break;

	default:

		break;
}













 ?>