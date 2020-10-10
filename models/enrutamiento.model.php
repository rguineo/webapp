<?php 

Class mdlEnrutamiento{

	public function enrutamientoModel($link){

		if ( 	$link == "inicio" ||
				$link == "nosotros" || 
				$link == "servicios" || 
				$link == "productos" || 
				$link == "contacto" ||
				$link == "cerrar"){

			$module = "views/modulos/".$link.".php";

		} else if ($link == "cerrar"){
			$module = "views/modulos/cerrar.php";
		} else {
			$module = "views/modulos/error404.php";
		}

		return $module;

	}


}


 ?>