<?php 
#httpOnly impide que una cookie sea leida desde javascript en caso de una explotacion de XSS (Cross-Site Scripting)
header("Set-Cookie: hidden=value; httpOnly");

#Controladores
require_once "controllers/template.controller.php";
require_once "controllers/sesion.controller.php";
require_once "controllers/enrutamiento.controller.php";
require_once "controllers/log.controller.php";

#Modelos
require_once "models/enrutamiento.model.php";
require_once "models/sesion.model.php";
require_once "models/log.model.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Mi primer App</title>

<!-- Librerias de estilos -->

<link rel="stylesheet" type="text/css" href="views/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="views/dist/css/style.css">

</head>
<body>

<?php 

	$plantilla = new ctrTemplate;
	$plantilla -> template(); 

?>


<!-- librerias Javascript -->

<script type="text/javascript" href="views/dist/js/jquery-3.5.1.min.js"></script>

<script type="text/javascript" href="views/dist/js/bootstrap.min.js"></script>



</body>
</html>