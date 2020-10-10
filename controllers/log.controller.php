<?php 

Class ctrLogUser{


	public function logUserController($user, $time, $url){
		$tabla = "log_usuario";

		$respuesta = mdlLogUser::logUserModel($tabla, $user, $time, $url);
		return $respuesta;
	}
}


 ?>