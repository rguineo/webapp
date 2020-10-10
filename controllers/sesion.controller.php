<?php 

Class ControllerSesion{


	public function ctrIniciarSesion(){

		if (isset($_POST['user'])) {
			$tabla = "usuarios";
			$usuario = $_POST['user'];

			$respuesta = ModeloSesion::mdlIniciarSesion($tabla, $usuario);

			if ($respuesta['usuario'] == $_POST['user'] && $respuesta['password'] == md5($_POST['pass'])){

				$_SESSION['autenticar'] = "ok";
				$_SESSION['nombres'] = $respuesta['nombres'];
				$_SESSION['apellido'] = $respuesta['apellidos'];
				$_SESSION['rol'] = $respuesta['rol'];
				$_SESSION['correo'] = $respuesta['usuario'];

				echo '<script> window.location = "inicio" </script>';

			} else {
				echo '<div class="alert alert-danger"> Datos incorrectos. Intentelo nuevamente. </div>';
			}
		}

	}


}


 ?>