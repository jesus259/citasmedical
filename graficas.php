<?php
session_start();

if(!isset($_SESSION['nombre'])){
 header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Citas-IPASME-Conf</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div id="wrapper">

	<!-- Menu -->
		<? include ("modulos/menu.php"); ?>
	<!-- Menu -->

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

			<!-- Topbar -->
			<div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <ul class="navbar-nav ml-auto">

                     <div class="topbar-divider d-none d-sm-block"></div>
			<? include ("modulos/user.html"); ?>
			</ul>
			</nav>
			</div>
			<!-- End of Topbar -->
			<h1 class="h3 mb-4 text-gray-800 text-center">Control Estadistico-Dashboard</h1>
			<div id="content">

				<div class="container-fluid">
				<form method="POST">
				<input class="btn btn-primary" type="submit" method="POST" name="updatetabla" id="updatetabla" value="actualizar datos">
				</input>
				<? if(isset ($_POST["updatetabla"])){echo "procesando...";
					
				include ("controlador/consultag/consultag.php");} ?></form>
					<br>
						
					<div class="row">
					<!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Estadistica</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                               
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">estadistica de eficiencia</h6>
                                </div>
                                
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
									<div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Record
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Atendidas
                                        </span>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
				<div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <!--<form method="POST" name="gselec">
									<h6 class="m-0 font-weight-bold text-primary"><select class="form-control form-control-user" value="seleccione un campo" name="selection"> 
										<option name="p">Pediatria</option>
										<option name="rx">Rayos x</option>
										<option name="ec">Ecografia</option>
										<option name="ps">Psicologia</option>
										<option name="f">Fisiatria</option>
										<option name="g">Ginecologia</option>
										<option name="lab">Laboratorios</option>
										<option name="od">Odontologia</option>
										<option name="mg">Medicina General</option>
										<option name="c">Cardiologia</option>
									
									</select>
										
									</h6>
									<? //include ("js/demo/selec.php");?>
									<br><input class="btn btn-primary" type="submit" name="gselec" value="Cargar Grafica">
                                    </form>-->
                                </div>
								
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myBarChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
				<? include ("controlador/barrasl.php");?>
				<!--fin-->
					
					</div>

				</div>
		   

			</div>
		</div>

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		
		

		
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



<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<? include ('modulos/logout.html');?>


</div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!--Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
	<script src="vendor/chart.js/Chart.min.js"></script>
	
	<?
		include ("js/demo/chart-bar-demo.php");
		include ("js/demo/barras.php");
		include ("js/demo/pie.php");
	
	?>
	
	
</body>
	
</html>