<!doctype html>

<html lang="en">

<head>
	<title>Create an account or Login</title>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="css/custom.css">
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>PHP MySQL login</h1>
				<p>A login App with SESSIONS, Password Hash, and Password recovery made with PHP 7, MySQL, phpMyAdmin, and Bootstrap.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6">

				<h3>Create an account</h3>
				<hr />
				
				<form method="post" action="../controllers/create-docentes.php" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="num_control" placeholder="Num_control" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="ap_paterno" placeholder="paterno" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="ap_materno" placeholder="materno" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="correo" aria-describedby="emailHelp" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
						<input type="text" class="form-control" name="telefono" placeholder="telefono" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="contrasena" placeholder="contraseña" required>
					</div>

					<button type="submit" class="btn btn-success btn-block">Create my account</button>
				</form>

			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<h3>Login</h3>
				<hr />
				<p>Already have an account? <a href="login.html" title="Login Here">Login here!</a></p>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>

</html>