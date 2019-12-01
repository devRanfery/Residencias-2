<?php
// Connection info. file
include '../db/conexion.php';

session_start();

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$num_control = $_POST['num_control'];
$contrasena = $_POST['contrasena'];


$query = "SELECT * FROM Alumno WHERE id_alumno = '$num_control'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

$hash = $row['contrasena'];


if (password_verify($_POST['contrasena'], $hash)) {
	$_SESSION['loggedin'] = true;
	$_SESSION['id_alumno'] = $row['id_alumno'];
	$_SESSION['start'] = time();
	$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);

	include '../views/perfil_alumno.php';
	
} else {
	echo "<div class='alert alert-danger mt-4' role='alert'>El numero de control o la contraseña son incorrectos!
				<p><a href='../views/login-alumno.php'><strong>Inténtalo de nuevo!</strong></a></p></div>";
}

?>