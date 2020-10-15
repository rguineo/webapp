<div class="container login-container">
	
	<div class="login-form">
	    <form method="post">
	        <h2 class="text-center">Log in</h2>  

	        <div class="form-group">
	            <input type="text" class="form-control" placeholder="Usuario" required="required" name="user">
	        </div>

	        <div class="form-group">
	            <input type="password" class="form-control" placeholder="Password" required="required" name="pass">
	        </div>


	        <div class="form-group">
	            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
	        </div>
	        <div class="clearfix">
	            <label class="float-left form-check-label"><input type="checkbox"> Recordarme</label>
	            <a href="#" class="float-right">Olvidaste tu Password?</a>
	        </div>

	        <?php 

	        	$enlace = (new ControllerSesion);
	        	$respuesta = $enlace->ctrIniciarSesion();

	         ?>



	    </form>
	</div>
	
</div>