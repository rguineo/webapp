<header>
	<img class="logotipo" src="views/dist/img/Vans-Logo.png">

</header>

	<?php include "modulos/nav_bar.php"; ?>

<section>
	<hr>
	
	<?php 

		$contenido = new ctrErutamiento;
		$contenido -> EnrutamientoController();
	 ?>


</section>

