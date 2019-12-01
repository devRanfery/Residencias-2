<?php
// Connection info. file
include '../db/conexion.php';

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$query = "SELECT * FROM Administradores WHERE ad_usuario = '$usuario'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

$hash = $row['contrasena'];


if (password_verify($_POST['contrasena'], $hash)) {
	$_SESSION['loggedin'] = true;
	$_SESSION['id_admin'] = $row['id_admin'];
	$_SESSION['start'] = time();
	$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);

	include '../views/residencias_admin.php';
	
} else {
	echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
				<p><a href='index.php'><strong>Please try again!</strong></a></p></div>";
}

?>