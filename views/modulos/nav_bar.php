<header>
	<img class="logotipo" src="views/dist/img/Vans-Logo.png">
	<?php echo "<div class='usuario'><span class='correo_usuario'>".$_SESSION['correo']."</span>"; 
			echo "<br>";
			echo "<span class='nombre_usuario'>".$_SESSION['nombres']."</span></div>";

	?>
</header>

<nav>
	<ul class="nav justify-content-center">
		<li class="nav-item">
			<a class="nav-link" href="index.php?action=inicio">Inicio</a>
		</li>
		
		<li class="nav-item">
			<a class="nav-link" href="index.php?action=nosotros">Nosotros</a>
		</li>
		
		<li class="nav-item">
			<a class="nav-link" href="index.php?action=servicios">Servicios</a>
		</li>
		
		<li class="nav-item">
			<a class="nav-link" href="index.php?action=productos">Productos</a>
		</li>
		
		<li class="nav-item">
			<a class="nav-link" href="index.php?action=contacto">Contacto</a>
		</li>

		<li class="nav-item">
			<a class="nav-link" href="index.php?action=cerrar">Cerrar Sesion</a>
		</li>
	</ul>
</nav>