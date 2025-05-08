<?php 
/**conexion.php retorna un objeto interfaz para vincular consultas a bd
 * Descripción.  Muestra como retornar un objeto interfac para vincular 
 * 					consulas SQL hacia una base de datos.
 * 				 Obtner credenciales desde: 
 * 					phpMyAdmin/pagina_de_inicio/Cuentas_de_usuario/Vista global de la cuentas de usuario
 * 					Nombre de usuario Nombre del servidor   Contraseña ... ...
 * 					     root          localhost               NO       ALL PRIVILEGES  SI 
 * 
 * //define nombre de base de datos
 * //define nombre de usuario
 * // define contraseña
 */
class Conexion 
{
	//retorna un objeto interfaz para vincular consultas a base de datos
	static public function conectar()
	{
		$link=new PDO("mysql:host=localhost;dbname=videojuegosdb",
			"root",
			"");
		$link->exec("set names utf8");//sistema de codificación y representación de caracteres unicode a 8bits.
		 return $link;
	}
}
?>