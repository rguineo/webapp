<?php 

$num1 = 10;
$num2 = 3;

echo "numero 1: ".$num1."<br>";
echo "numero 2: ".$num2."<br><br>";

$suma = $num1+$num2;
$resta = $num1-$num2;

$multi = $num1*$num2;
$division = $num1/$num2;
$resto = $num1%$num2;

echo "La suma de numero1 y numero2 = ".$suma."<br>";
echo "La resta de numero1 y numero2 = ".$resta."<br>";

echo "La multiplicacion de num1 * num2 = ".$multi."<br>";

echo "La division de num1 / num2 = ".round($division, 2)."<br>";

echo "El resto de la division de num1 num2 es: ".$resto;

?>