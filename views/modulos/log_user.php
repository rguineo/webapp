<?php 
	date_default_timezone_set("America/Santiago");

	$time = date('Y-m-d H:i:s');
	$user = $_SESSION['correo'];
	$url = $_SERVER['REQUEST_URI'];

	$respuesta = ctrLogUser::logUserController($user, $time, $url);
	
 ?>