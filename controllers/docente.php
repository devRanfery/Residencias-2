<?php
// Connection info. file
include '../db/conexion.php';

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

session_start();

$num_control = $_POST['num_control'];
$contrasena = $_POST['contrasena'];


$query = "SELECT * FROM Docente WHERE id_docente = '$num_control'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

$hash = $row['contrasena'];


if (password_verify($_POST['contrasena'], $hash)) {
	$_SESSION['loggedin'] = true;
	$_SESSION['id_docente'] = $row['id_docente'];
	$_SESSION['start'] = time();
	$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);

	include '../views/perfil_docente.php';
	
} else {
	echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
				<p><a href='index.php'><strong>Please try again!</strong></a></p></div>";
}

?>