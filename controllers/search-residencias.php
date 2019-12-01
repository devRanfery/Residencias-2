<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////

include '../db/conexion.php';

if ($conn -> connect_errno)
{
	die("Fallo la conexion:(".$conn -> mysqli_connect_errno().")".$conn-> mysqli_connect_error());
}

//////////////// PROCEDIMIENTO ALMACENADO///////////////////////
//USE TecResidencias;
//CREATE PROCEDURE buscar_residencias();
//SELECT * FROM Residencias ORDER BY id_alumno 

$tabla="";
$query="CALL buscar_residencias();";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['Residencias']))
{
	$q=$conn->real_escape_string($_POST['Residencias']);
	$query="SELECT * FROM Residencias WHERE 
		id_alumno LIKE '%".$q."%' OR
		id_docente LIKE '%".$q."%' OR
		nombre_proyecto LIKE '%".$q."%' OR
		empresa LIKE '%".$q."%' OR
		correo_empresa LIKE '%".$q."%' OR
		ciudad LIKE '%".$q."' OR
		telefono LIKE '%".$q."'";
}

$buscarResidencias=$conn->query($query);
if ($buscarResidencias->num_rows > 0)
{
	$tabla.= 
	'<table class="table table-hover">
		<tr class="table-active">
			<td>Numero de Control de Alumno</td>
			<td>Numero de control Asesor</td>
			<td>Nombre de proyecto</td>
			<td>Empresa</td>
			<td>Correo de Empresa</td>
			<td>Ciudad</td>
            <td>Telefono</td>
            <td></td>
            <td></td>
		</tr>';

	while($filaResidencias= $buscarResidencias->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaResidencias['id_alumno'].'</td>
			<td>'.$filaResidencias['id_docente'].'</td>
			<td>'.$filaResidencias['nombre_proyecto'].'</td>
			<td>'.$filaResidencias['empresa'].'</td>
			<td>'.$filaResidencias['correo_empresa'].'</td>
            <td>'.$filaResidencias['ciudad'].'</td>
            <td>'.$filaResidencias['telefono'].'</td>
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
