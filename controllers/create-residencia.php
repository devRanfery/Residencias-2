<!doctype html>
<html lang="en">
  <head>
    <title>Create account on database</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>

<div class="container">

	<?php

	include '../db/conexion.php';

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$checkUser = "SELECT * FROM Residencias WHERE id_alumno = '$_POST[id_alumno]'";

	$result = $conn-> query($checkUser);

	$count = mysqli_num_rows($result);

	
    // LIMITAR NUMERO DE RESIDENCIAS POR ASESOR
	if ($count == 3) {
	echo "<div class='alert alert-warning mt-4' role='alert'>
					<p>That email is already in our database.</p>
					<p><a href='login.html'>Please login here</a></p>
				</div>";
	} else {	
	
	/*
	If the email don't exist, the data from the form is sended to the
	database and the account is created
	*/

	$id_alumno = $_POST['id_alumno'];
	$id_docente = $_POST['id_docente'];
	$n_proyecto = $_POST['n_proyecto'];
	$empresa = $_POST['empresa'];
	$correo_empresa = $_POST['correo_empresa'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
	
	
	$query = "INSERT INTO Residencias (id_alumno, id_docente, nombre_proyecto, empresa, correo_empresa, ciudad, telefono) 
	VALUES ('$id_alumno', '$id_docente', '$n_proyecto', '$empresa', '$correo_empresa', '$ciudad', '$telefono')";

	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success mt-4' role='alert'><h3>Tramite completado con exito.</h3>
		<a class='btn btn-outline-primary' href='../views/nueva_residencia.php' role='button'>Regresar</a></div>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}	
	}	
	mysqli_close($conn);
	?>
</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>