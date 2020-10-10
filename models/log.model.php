<?php 

require_once "conexion.php";

Class mdlLogUser{


	public function logUserModel($tabla, $user, $time, $url){

		$sql= (new Conexion)->Conectar()->prepare("
			INSERT INTO $tabla VALUES('$user', '$time', '$url')
			");

		if ($sql->execute()){
			return "ok";
		} else {
			return "error";
		}


	}
}


 ?>