<?php
session_start();

if(!isset($_SESSION['nombre'])){
 header("location: login.php");
}			$admin = $_SESSION["rol"];
			if($admin >= 2){header("location: index.php");}
	include ("controlador/conexion.php");
	$id= $_GET['id'];
	$m=$conn->query("SELECT * FROM ccitas WHERE id='$id'");
	$datos = $m->fetch_array();
	if($id==0){header ("location: citas.php");}
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
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="css/stylesp.css" rel="stylesheet">
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
                    

                <!-- Topbar -->
                

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <ul class="navbar-nav ml-auto">

                     <div class="topbar-divider d-none d-sm-block"></div>
						<? include ("modulos/user.html"); ?>
					</ul>
				

                </nav>
                <!-- End of Topbar -->
				
	<div id="content">
	<div class="modal-header text-center">
		<h2 class="modal-title" id="exampleModalLabel">Editar cita</h2>
	   
	</div>
	<form autocomplete="off" action="<? echo $_SERVER['PHP_SELF'];?>"  method="POST" class="user">
		<?include ("controlador/agcitas.php");?>
	  <div class="form-group row">
			<div class="col-sm-6 mb-3 mb-sm-0">
			<input type="hidden" name="id"value="<? echo $datos['id'];?>">
			<label>Nombre y Apellido</label>
			<input type="text" class="form-control form-control-user" name="name" value="<? echo $datos['name'];?>">
			</div>
			<div class="col-sm-6">
			<label>Cedula</label>
			<input type="text" class="form-control form-control-user" name="ci" value="<? echo $datos['ci'];?>">
			</div>
	  </div>
		<div class="form-group row">
		<div class="col-sm-6 mb-3 mb-sm-0">
		<label>Motivo de la Consulta</label>
		<input type="text" class="form-control form-control-user" name="atencion" value="<? echo $datos['atencion'];?>"></div>
		<div class="col-sm-6 mb-3 mb-sm-0">
		<label>Clasificacion</label>
		<input type="text" class="form-control form-control-user" name="clasificacion" placeholder="Clasificacion:" value="<? echo $datos['clasificacion'];?>"></div>
		</div>
	<div class="form-group row">
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Direccion de Vivienda</label>
			<input type="text" class="form-control form-control-user" name="localidad" value="<? echo $datos['localidad'];?>">
			</div>
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Correo Electronico</label>
			<input type="text" class="form-control form-control-user" name="email" value="<? echo $datos['email'];?>"><br>
			</div>
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Numero de Contacto</label>
			<input type="text" class="form-control form-control-user" name="telefono" value="<? echo $datos['telefono'];?>">
			</div>
			
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Fecha para la Cita</label>
			<input type="date" class="form-control form-control-user" name="fechac" value="<? echo $datos['fechac'];?>"><br>
			</div>
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Especialidad</label>
			<input type="text" class="form-control form-control-user" name="consulta" placeholder="especialidad" value="<? echo $datos['consulta'];?>"><br>
			</div>
			<div class="col-sm-6">
			<label>Doctor a Atender</label>
				<input type="text" class="form-control form-control-user" name="doctor" placeholder="doctor a atender" value="<? echo $datos['doctor'];?>"><br>
				</select>
			</div>
	</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" value="Cargar datos" name="editar"></input>
				<a class="btn btn-secondary" href="citas.php">cancelar</a>
            </div>
	 </form>
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
	<? include ("modulos/logout.html");?>
   
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
	
</body>

</html>
	