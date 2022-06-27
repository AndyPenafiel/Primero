<?php

require_once("Estudiantes.php");
$Estudiantes=new Estudiantes();
$datos=$_REQUEST;

$Estudiantes->create($datos['est_nombres'],
					 $datos['est_apellidos'],
					 $datos['est_cedula'],
					 $datos['est_ciudad'],
					 $datos['est_edad'],
					 $datos['est_genero']);

header('Location:http://localhost/primero/lista_estudiantes.php ');
?>