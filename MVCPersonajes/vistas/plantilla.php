<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Junta de Videojuegos🕹️</title>

	<!--=====================================
	PLUGINS DE CSS
	======================================-->	

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!--=====================================
	PLUGINS DE JS
	======================================-->	

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- Latest compiled Fontawesome-->
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

</head>
<body>


	<!--=====================================
	LOGOTIPO
	======================================-->

	<div class="container-fluid">
		
		<h3 class="text-center py-3">Formulario de personajes</h3>

	</div>

	<!--=====================================
	BOTONERA
	======================================-->

	<div class="container-fluid  bg-light">
		
		<div class="container">

			<ul class="nav nav-justified py-2 nav-pills">
			
			<!-- activar e iluminar un boton de navegación con clase: active y $_GET[]. -->


			<?php if (isset($_GET["pagina"])): ?>

				<?php if ($_GET["pagina"] == "registro"): ?>

					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=registro">Creando personaje</a>
					</li>

				<?php else: ?>

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=registro">Crear</a>
					</li>
					
				<?php endif ?>

				<?php if ($_GET["pagina"] == "ingreso"): ?>

					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=ingreso">Editando</a>
					</li>

				<?php else: ?>

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=ingreso">Editar</a>
					</li>
					
				<?php endif ?>

				<?php if ($_GET["pagina"] == "inicio"): ?>

					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=inicio">Bienvendio a las listas</a>
					</li>

				<?php else: ?>

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=inicio">Listas</a>
					</li>
					
				<?php endif ?>

				<?php if ($_GET["pagina"] == "salir"): ?>

					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=salir">Buenas :3</a>
					</li>

				<?php else: ?>

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=salir">Sobre mi</a>
					</li>
					
				<?php endif ?>

			<?php else: ?>

				<!-- GET: $_GET["variable"] Variables que se pasan como parámetros Vía URL 
				( También conocido como cadena de consulta a través de la URL) 
				Cuando es la primera variable se separa con ?
				las que siguen a continuación se separan con &

					Definición y selección de la nombre de pagina en la variables $_GET[].
					Activa boton registro
				-->

				<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=registro">Registrar</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=ingreso">Ingresar</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=inicio">Revisar</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=salir">Game Over</a>
				</li>
				
			<?php endif ?>

			</ul>

		</div>

	</div>

	<!--=====================================
	CONTENIDO encuesta si $_GET["pagina"] tiene una url valida, renderiza o renderiza
	pagina por omisión.
	======================================-->

	<div class="container-fluid">
		
		<div class="container py-5">

			<?php # gstor de páginas solicitadas
				#ISSET: isset() Determina si una variable está definida y no es NULL
				if(isset($_GET["pagina"]))# url específica {registro,ingreso,inicio,salir}
				{
					if($_GET["pagina"] == "registro" ||//encuesta petición URL válida. 
					   $_GET["pagina"] == "ingreso"  ||//encuesta petición URL válida. 
					   $_GET["pagina"] == "inicio"   ||//encuesta petición URL válida.
					   $_GET["pagina"] == "salir")     //encuesta petición URL válida.
					{
						include "paginas/".$_GET["pagina"].".php"; # carga página solicitada
					}else{
						include "paginas/error404.php";#url aleatoria
					}
				}else{ //url vacia
					include "paginas/registro.php";#url por omisión carga página de inicio
				}
			 ?>
		</div>
	</div>
</body>
</html>