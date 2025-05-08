<h1>Creacion de personajes</h1>
<!--- justifica cajas de entrada del formulario --->
<div class="d-flex justify-content-center text-center">
		<!--incorpora un background lijero --->
	<form class="p-5 bg-light" method="post">

		<div class="form-group">
			<label for="personaje">Personaje:</label>

			<div class="input-group">

				<!---incorpora icono --->
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="personaje" name="registroPersonaje">

			</div>
			
		</div>

		<div class="form-group">

			<label for="saga">Saga:</label>

			<div class="input-group">

				<!---incorpora icono --->
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="saga" name="registroSaga">
			
			</div>
			
		</div>

		<div class="form-group">
			<label for="especie">Especie:</label>

			<div class="input-group">
				
				<!---incorpora icono --->
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="especie" name="registroEspecie">

			</div>

		</div>

		<?php 
		/*=============================================
		FORMA EN QUE SE INSTANCIA LA CLASE DE UN MÉTODO NO ESTÁTICO 
		=============================================*/
		
		// $registro = new ControladorFormularios();
		// $registro -> ctrRegistro();

		/*=============================================
		FORMA EN QUE SE INSTANCIA LA CLASE DE UN MÉTODO ESTÁTICO 
		=============================================*/
		//vincula con la capa controaldor
		$registro=ControladorFormularios::ctrRegistro();
			//  borra las variables post el buffer de memoria de la aplicación
		if($registro=="ok")
			{
				echo '<script>
					if ( window.history.replaceState ) 
						{
							window.history.replaceState( null, null, window.location.href );
						}
				</script>';
				echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
			}
		?>
		
		<button type="submit" class="btn btn-primary">🕹️Crear personaje🕹️</button>

	</form>

</div>