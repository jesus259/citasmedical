<?php
session_start();

if(!isset($_SESSION['nombre'])){
 header("location: login.php");
}
include ('controlador/conexion.php');
//modulo de citas registradas
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Citas-IPASME-HOY</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="css/stylesp.css" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Menu -->
			<? include ('modulos/menu.php');?>
        <!-- Menu -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
							<input name="cajab" id="cajab" type="text" class="form-control bg-light border-0 small" placeholder="Buscar">
                            
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                     <div class="topbar-divider d-none d-sm-block"></div>
						<? include ("modulos/user.html"); ?>
					</ul>
                </nav>
                <!-- End of Topbar -->
				
			<div id="content">
				
			<div class="container-fluid">
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
					<h1 class="h3 mb-0 text-gray-800">Agendados HOY
						<?
							date_default_timezone_set('America/Caracas');
							$hoy = date("y/m/d");
							echo $hoy;
						?>
					</h1>
                        <a href="modulos/exportat.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> Generar Reporte de citas atendidas</a>
                    </div>
					<div class="col-xl-8 col-lg-7">
						<?
							$cont = "SELECT * FROM ccitas WHERE fechac ='$hoy'";
							$res = $conn->query($cont);
							$res = $res->num_rows;
							echo "<br>Agendados: ".$res;
						?>
					</div>
						
				<div class="row">
			<!--tabla -->
			
			<div class="table-responsive table-hover">
			<div id="periodo">
							
							</div>
						</div>
			
			
			<!--fin tabla-->
				
				</div>

			</div>
		   

			</div>
			</div>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
			<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; UPTNM "lodovico Silva" 2022</span><br>
                        <span>&copy; Jesus Rondon</span>
                    </div>
                </div>
            </footer>
        </div>
        

    </div>
    </div>

    
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   <? include ('modulos/logout.html');?>

     
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
	<script src="js/periodos.js"></script>
	

</body>

</html>