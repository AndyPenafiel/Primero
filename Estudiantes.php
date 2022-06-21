<?php
require_once('Conection.php');

class Estudiantes extends Conection{

	function listar_estudiantes(){
		$resultado=$this->con->query('SELECT * FROM estudiantes order by est_apellidos');
		return $resultado->fetch_all(MYSQLI_ASSOC);//
	}


}



?>