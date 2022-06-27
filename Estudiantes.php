<?php
require_once("Conection.php");

class Estudiantes extends Conection{

	function listar_estudiantes(){
		$resultado=$this->con->query("SELECT * FROM estudiantes ");
		return $resultado->fetch_all(MYSQLI_ASSOC);//
	}

function create($est_nombres,$est_apellidos,$est_cedula,$est_ciudad,$est_edad,$est_genero){
$this->con->query("INSERT INTO estudiantes (est_nombres,
		est_apellidos,
		est_cedula,
		est_ciudad,
		est_edad,
		est_genero)
	values('$est_nombres',
		   '$est_apellidos',
		   '$est_cedula',
		   '$est_ciudad',
		   '$est_edad',
		   '$est_genero')

	");
}

function edit($est_id){
	$resultado=$this->con->query("SELECT * FROM estudiantes WHERE est_id=$est_id");
return $resultado->fetch_all(MYSQLI_ASSOC)[0];
}
} 
?>