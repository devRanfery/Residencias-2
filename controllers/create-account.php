<!doctype html>
<html lang="en">
  <head>
    <title>Registro</title>
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
	
	// Query to check if the email already exist
	$checkEmail = "SELECT * FROM Alumno WHERE id_alumno = '$_POST[num_control]'";

	// Variable $result hold the connection data and the query
	$result = $conn-> query($checkEmail);

	// Variable $count hold the result of the query
	$count = mysqli_num_rows($result);

	
    // Si count == 1 eso significa que el correo electrónico ya está en la base de datos
	if ($count == 1) {
	echo "<div class='alert alert-warning mt-4' role='alert'>
					<p>Ese correo electrónico ya está en nuestra base de datos.</p>
					<p><a href='../views/login-alumno.php'>Por favor inicie sesión aquí!</a></p>
				</div>";
	} else {	
	
	/*
	If the email don't exist, the data from the form is sended to the
	database and the account is created
	*/
	$num_control = $_POST['num_control'];
	$nombre = $_POST['nombre'];
	$ap_paterno = $_POST['ap_paterno'];
	$ap_materno = $_POST['ap_materno'];
	$carrera = $_POST['carrera'];
	$grado = $_POST['grado'];
	$grupo = $_POST['grupo'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$pass = $_POST['contrasena'];
	

	
	// The password_hash() function convert the password in a hash before send it to the database
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	
	// Query to send Name, Email and Password hash to the database
	$query = "INSERT INTO Alumno (id_alumno, a_nombre, a_ape_paterno, a_ape_materno, carrera, grado, grupo, a_telefono, a_correo, contrasena) 
	VALUES ('$num_control', '$nombre', '$ap_paterno', '$ap_materno','$carrera ', '$grado','$grupo', '$telefono', '$correo', '$passHash')";

	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success mt-4' role='alert'><h3>Tu cuenta ha sido creada.</h3>
		<a class='btn btn-outline-primary' href='../views/login-alumno.php' role='button'>Iniciar sesión</a></div>";		
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