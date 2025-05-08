<?php

#EL INDEX: En él mostraremos la salida de las vistas al usuario y también a través de él enviaremos las distintas acciones que el usuario envíe al controlador.

#require() establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo especificado en la función require() no se encuentra saltará un error “PHP Fatal error” y el programa PHP se detendrá.

#La versión require_once() funcionan de la misma forma que sus respectivo, salvo que, al utilizar la versión _once, se impide la carga de un mismo archivo más de una vez.
#Si requerimos el mismo código más de una vez corremos el riesgo de redeclaraciones de variables, funciones o clases. 

require_once "controladores/plantilla.controlador.php";#carga en memoria la página principal.
require_once "controladores/formularios.controlador.php";#carga el vinculo entre vista-controaldor
require_once "modelos/formularios.modelo.php";#carga vinculo entre modelo y controlador
//para prueba
//require_once "./modelos/conexion.php";//carga en memoria de trabajo
//test objeto interfaz
//var_dump(Conexion::conectar());
$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();# ejecuta cargar ./vistas/plantilla.php como página principal.
