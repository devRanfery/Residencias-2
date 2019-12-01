<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////

include '../db/conexion.php';

if ($conn -> connect_errno)
{
	die("Fallo la conexion:(".$conn -> mysqli_connect_errno().")".$conn-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM Alumno ORDER BY id_alumno";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['Alumno']))
{
	$q=$conn->real_escape_string($_POST['Alumno']);
	$query="SELECT * FROM Alumno WHERE 
		id_alumno LIKE '%".$q."%' OR
		a_nombre LIKE '%".$q."%' OR
		a_ape_paterno LIKE '%".$q."%' OR
		a_ape_materno LIKE '%".$q."%' OR
		carrera LIKE '%".$q."%' OR
		grado LIKE '%".$q."' OR
		grupo LIKE '%".$q."'";
}

$buscarAlumnos=$conn->query($query);
if ($buscarAlumnos->num_rows > 0)
{
	$tabla.= 
	'<table class="table table-hover">
		<tr class="table-active">
			<td>Numero de Control</td>
			<td>Nombre</td>
			<td>Apellidos</td>
			<td>Carrera</td>
			<td>Grado y grupo</td>
			<td>Telefono</td>
            <td>Correo</td>
            <td></td>
            <td></td>
		</tr>';

	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaAlumnos['id_alumno'].'</td>
			<td>'.$filaAlumnos['a_nombre'].'</td>
			<td>'.$filaAlumnos['a_ape_paterno'].' '.$filaAlumnos['a_ape_materno'].'</td>
			<td>'.$filaAlumnos['carrera'].'</td>
			<td>'.$filaAlumnos['grado'].''.$filaAlumnos['grupo'].'</td>
            <td>'.$filaAlumnos['a_telefono'].'</td>
            <td>'.$filaAlumnos['a_correo'].'</td>
            <td><button class="btn btn-success">Editar</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
