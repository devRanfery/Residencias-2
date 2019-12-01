<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nuevo - Admin</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-primary bg-dark static-top">
        <a class="navbar-brand mr-1" href="index.html"></a>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../views/residencias_admin.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Residencias</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../views/alumnos_admin.php">
                    <i class="fas fa-fw fa-exchange-alt"></i>
                    <span>Alumnos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../views/nueva_residencia.php">
                    <i class="fas fa-fw fa-exchange-alt"></i>
                    <span>Nueva residencia</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../views/nuevo-asesor.php">
                    <i class="fas fa-fw fa-exchange-alt"></i>
                    <span>Nuevo Asesor</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../views/nuevo_admin.php">
                    <i class="fas fa-fw fa-exchange-alt"></i>
                    <span>Nuevo Administrador</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../controllers/logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Cerrar Sesión</span></a>
            </li>

        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a>Agregar Nuevo Administrador</a>
                    </li>
                </ol>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-md-2 col-lg-2"></div>
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <hr />
                            <form method="post" action="../controllers/create-admin.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ap_paterno" placeholder="Apellido Paterno" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ap_materno" placeholder="Apellido Materno" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="usuario" placeholder="Nombre de Usuario" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Crear Cuenta</button>
                            </form>
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2"></div>
                    </div>
                </div>
           
                <!-- Sticky Footer -->

                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright © Your Website 2019</span>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript-->
        <script src="../vendor/chart.js/Chart.min.js"></script>
        <script src="../vendor/datatables/jquery.dataTables.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin.min.js"></script>

        <!-- Demo scripts for this page-->
        <script src="../js/demo/datatables-demo.js"></script>
        <script src="../js/demo/chart-area-demo.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>

</html>