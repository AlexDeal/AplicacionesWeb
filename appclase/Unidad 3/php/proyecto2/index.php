<!DOCTYPE html>
<html>
<head>
	<?php
		include("librerias.php");
	?>
</head>
<body>
	<div class="container">
		<div class="principal">
			<!-- MENU -->
			<?php
				include("menu.php");
			?>
			<!-- Fin del Menu -->

			<!-- Seccion Principal -->
			<?php
				include("principal.php");
			?>
			<!-- Fin de la Seccion Principal -->

			<!-- Carousel -->
			<?php
				include("carousel.php");
			?>
			<!-- Fin del Carousel -->


			<!-- Fichas -->
			<?php
				include("fichas.php");
			?>
			<!-- Fin de Fichas -->

			<!-- Redes Sociales -->
			<?php
				include("redes.php");
			?>
			<!-- Fin de Redes Sociales -->
			
		</div>
	</div>
	<!-- Librerias JQuery -->
	<script type="text/javascript" src="css/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>