<?php
/** plantilla.controlador.php Carga en memoria de trabajo la vista plantilla.php 
 * */
Class ControladorPlantilla
{
	/*=============================================
	Llamada a la plantilla
	=============================================*/
	public function ctrTraerPlantilla()
	{
		#include() Se utiliza para invocar el archivo que contiene código html-php.
		#carga en memoria el contenido de la vista de la página principal del proyecto
		#en plantilla.php se gestionan las consultas URL para seleccionar una pagina 
		include "./vistas/plantilla.php";
	}

}
?>