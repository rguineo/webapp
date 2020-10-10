

<section>
	
	<?php 

		session_start(); //para iniciar una nueva sesion
		//$_SESSION['autenticar'] = "ok";

		if (isset($_SESSION["autenticar"]) &&  $_SESSION["autenticar"] == "ok") {
			include "modulos/nav_bar.php";
			echo "<hr>";
			$contenido = new ctrErutamiento;
			$contenido -> EnrutamientoController();		
		} else {
			include "views/modulos/login.php";
		}


	 ?>


</section>

