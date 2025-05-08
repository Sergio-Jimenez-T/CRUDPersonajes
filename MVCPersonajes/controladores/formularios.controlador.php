<?php
/**formularios.controlador.php retorna un arreglo asociativo con tabla-datos
* Descrición.  
* 			-Muestra como escribir nombre de la tabla-datos recibidos con $_POST en un arreglo asociativo
* 			-Retorna un objetoInterfaz, $respuesta, para la capa vista.
**/
class ControladorFormularios
{
	/*=============================================
	Registro recibe las variables definidas en $_POST[]
	exporadas desde /vistas/paginas/registro.php 
	=============================================*/
	static public function ctrRegistro()
	{
		if(isset($_POST["registroPersonaje"]))
		{
			$tabla="personajes";//define nombre de la tabla de BD
			// actualiza arreglo asociativo
			$datos=array("personaje"=>$_POST["registroPersonaje"],
				         "saga"=>$_POST["registroSaga"],
				         "especie"=>$_POST["registroEspecie"]);
			//var_dump($datos);
			//se vincula con la capa modelo
			$respuesta=ModeloFormularios::mdlRegistro($tabla,$datos);
			return $respuesta;
		}	
	}
	static public function obtenerPersonajes() {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM personajes ORDER BY id ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}
?>