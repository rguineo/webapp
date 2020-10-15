

<section>
	
	<?php 
		error_reporting(0);
		session_start(); //para iniciar una nueva sesion

		if (isset($_SESSION["autenticar"]) &&  $_SESSION["autenticar"] == "ok") {
			include_once "views/modulos/nav_bar.php";
			echo "<hr>";
			$contenido = (new ctrErutamiento);
			$respuesta = $contenido -> EnrutamientoController();		
		} else {
			include_once "views/modulos/login.php";
		}
	 ?>

</section>

