<?php 

$titulo = "Mi primera pagina en PHP";

$titulo_principal = " Mi primera pagina desarrollada en PHP ";
$texto = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

function multiplicar ($a, $b){
	$resultado = $a * $b;
	return $resultado;
}

$multi = multiplicar(5, 8);

?>

<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $titulo; ?> </title>
</head>
<body>
	<h1> <?php echo $titulo_principal; ?></h1>
	<br>
	<p> <?php echo $texto; ?> </p>
	<br>
	<h2>Resultado es: <?php echo $multi; ?></h2>
</body>
</html>












