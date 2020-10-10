<?php 

require_once "conexion.php";

Class ModeloSesion{


	public function mdlIniciarSesion($tabla, $usuario){

		$sql = (new Conexion)->Conectar()->prepare("
			SELECT * FROM $tabla WHERE usuario = '$usuario'	");

		$sql -> execute(); //se ejecuta la consulta a la base de datos

		return $sql->fetch(); //devuelve el resultado

	}
}


 ?>