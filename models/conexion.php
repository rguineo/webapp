<?php 

Class Conexion {

	public function Conectar() {
		$dbname="technoso_webapp"; //Colocar nombre de la base de datos
		$dbuser="technoso_usrwapp"; //Colocar nombre de usuario 
		$dbpass="usuario123"; //Colocar password de usuario

		$link = new PDO("mysql:host=localhost;dbname=$dbname",
			"$dbuser",
			"$dbpass",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
		return $link;
	}
}


 ?>