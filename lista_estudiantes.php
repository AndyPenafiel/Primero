<?php
require_once('estudiantes.php');
$Estudiantes=new Estudiantes();
$consulta=$Estudiantes->listar_estudiantes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de estudiantes</title>
	<style>
		th{
			padding: 8px;
			background: black;
			color: white;
		}
		td{
			padding: 5px;
			border: solid 1px #687571;
		}
		table{
			width: 80%;
			border-collapse: collapse;
		}
		a{
			background:#01DFD7 ;
			color:#ffffff;
			text-decoration: none;
			font-family:Arial;
			padding: 2px ;
			border-radius: 5px;
			box-shadow:5px 5px 10px #218380;
			border: solid 1px black ;
		}

		img{
			width:20px
		}
	</style>
</head>
<body>
	<H1 style="background-color:#008000;color:#ffffff;"><center>lista estudiantes</center></H1>
	<table align="center">
		<tr>
			<th>Nº</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Cedula</th>
			<th>Edad</th>
			<th>Ciudad</th>
			<th>Sexo</th>
			<th>Acciones</th>

		</tr>
  	<?php
  	$x=0;
  	foreach($consulta as $c){
  		$x++;
  	echo "<tr>
  			<td>$x</td>
  			<td>{$c['est_nombres']}</td>
  			<td>{$c['est_apellidos']}</td>
  			<td>{$c['est_cedula']}</td>
  			<td>{$c['est_edad']}</td>
  			<td>{$c['est_ciudad']}</td>
  			<td>{$c['est_sexo']}</td>
  			<td>
  			<a href=''>
  				<img src='lapiz.png' />
  			</a>
  			<a href=''>
  			<img src='basura.png' />
  			</a>
  			</td>
  			</tr>";	
  }
   ?>	
	</table>
</body>
</html>