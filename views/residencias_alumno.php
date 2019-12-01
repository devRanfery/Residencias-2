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
    <title>Residencias - Alumno</title>
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
                <a class="nav-link" href="perfil_alumno.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Perfil</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../views/residencias_alumno.php">
                    <i class="fas fa-fw fa-exchange-alt"></i>
                    <span>Residencias</span></a>
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
                        <a>Datos generales</a>
                    </li>
                </ol>

                <section id="tabla_resultado">
                    <?php

                    $num_c = $_SESSION['id_alumno'];    

                    include '../db/conexion.php';

                    if ($conn->connect_errno) {
                        die("Fallo la conexion:(" . $conn->mysqli_connect_errno() . ")" . $conn->mysqli_connect_error());
                    }

  
                    $sql = "SELECT Alumno.*, Residencias.*, Docente.* FROM Alumno INNER JOIN Residencias ON Alumno.id_alumno = Residencias.id_alumno INNER JOIN Docente ON Residencias.id_docente= Docente.id_docente WHERE Residencias.id_alumno = '$num_c'";
                    $resultado = $conn->query($sql);

                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            ?>
 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Residencias</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Nombre</th>
                                    <td><? echo $row['a_nombre']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Apellidos</th>
                                    <td><? echo $row['a_ape_paterno']; ?>  <? echo $row['a_ape_materno']; ?> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Carrera</th>
                                    <td><? echo $row['carrera']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nombre Asesor</th>
                                    <td><? echo $row['d_nombre']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Apellidos</th>
                                    <td><? echo $row['d_ap_paterno']; ?>  <? echo $row['d_ap_materno']; ?> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Correo</th>
                                    <td><? echo $row['d_correo']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Telefono</th>
                                    <td><? echo $row['d_telefono']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nombre Proyecto</th>
                                    <td><? echo $row['nombre_proyecto']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Empresa</th>
                                    <td><? echo $row['empresa']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Correo Empresa</th>
                                    <td><? echo $row['correo_empresa']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Ciudad</th>
                                    <td><? echo $row['ciudad']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Telefono</th>
                                    <td><? echo $row['telefono']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php

                        }
                    }else{
                        ?>
                    <h3>Aun no estas inscrito en el proceso de Residencias</h3>
<?php
                    }
                    ?>
                </section>



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