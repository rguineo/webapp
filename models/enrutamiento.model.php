<?php 

Class mdlEnrutamiento{

	public function enrutamientoModel($link){

		if ( 	$link == "nosotros" || 
				$link == "servicios" || 
				$link == "productos" || 
				$link == "contacto"){

			$module = "views/modulos/".$link.".php";

		} else if ($link == "inicio"){
			$module = "views/modulos/inicio.php";
		}

		return $module;

	}


}


 ?>