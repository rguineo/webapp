<?php 

Class ctrErutamiento{

	public function EnrutamientoController(){

		if (isset($_GET['action'])){
			$route = $_GET['action'];
		} else {
			$route = "inicio";
		}

		//$respuesta = mdlEnrutamiento::enrutamientoModel($route); 

		// $a = new mdlEnrutamiento;
		// $respuesta = $a->enrutamientoModel($route);

		// $a = ( new mdlEnrutamiento );
		// $respuesta = $a->enrutamientoModel($route);

		$respuesta = mdlEnrutamiento::enrutamientoModel($route);


		include $respuesta; 

	}
}

 ?>