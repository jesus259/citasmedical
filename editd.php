<?php
session_start();

if(!isset($_SESSION['nombre'])){
 header("location: login.php");
}			$admin = $_SESSION["rol"];
			if($admin >= 2){header("location: index.php");}
	include ("controlador/conexion.php");
	$id= $_GET['id'];
	$m=$conn->query("SELECT * FROM doctores WHERE id='$id'");
	$datos = $m->fetch_array();
	if($id==0){header ("location: control.php");}
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

				<div class="container-fluid">
					<h1 class="h3 mb-4 text-gray-800">Datos de Doctores</h1>
					
					<div class="row">
				<li class="nav-item">
					<a class=" collapsed" href="#" data-toggle="collapse" data-target="#opciones"
                        aria-expanded="true" aria-controls="opciones">
					<i class="fas fa-fw fa-cog "></i>
					<span>Opciones</span></a>
					<div id="opciones" class="collapse" aria-labelledby="opciones"
					data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<input class="btn btn-primary" type="submit" value="Añadir" name="editar" data-toggle="modal" data-target="#crearmodal"></input>
						
					</div>
					</div>
				</li>
				
				<!--tabla -->
				<div class="modal-content">
					<div class="p-5" id="edit">
                         <div class="modal-content">
                <div class="header">
                    <h5 class="modal-title text-center">¿Desea editar un elemento de los registros?</h5>
                </div>
                <div class="body text-center">Digite el campo correspondiente que desea editar.</div>
				<form autocomplete="off" action="<? echo $_SERVER['PHP_SELF'];?>" method="POST" name="edit">
					<div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
					<input type="hidden" class="form-control form-control-user" name="id" value="<? echo $datos['id'];?>">
						<input class="form-control form-control-user" type="text" name="cedula" placeholder="digite la cedula"value="<? echo $datos['cedula'];?>"></input>
						<input class="form-control form-control-user" type="text" name="nombre" placeholder="digite el nombre"value="<? echo $datos['nombre'];?>"></input>
						</div></div>
						<div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
						<input class="form-control form-control-user" type="text" name="apellido" placeholder="digite el apellido"value="<? echo $datos['apellido'];?>"></input>
						<input class="form-control form-control-user" type="text" name="esp" placeholder="digite la especialidad"value="<? echo $datos['atiende'];?>"></input></div></div>
						<div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
						<input class="form-control form-control-user" type="text" name="horarios" placeholder="digite el horario"value="<? echo $datos['horario'];?>"></input>
						<input class="form-control form-control-user" type="text" name="dias" placeholder="dias asignados" value="<? echo $datos['dias'];?>"></input>
					</div></div>
					
				<div class="modal-body text-center" id="alert">Advertencia: Los datos a editar no podran ser recuperados.</div>
				<div class="modal-footer">
                    <input class="btn btn-primary" type="submit" value="Cargar datos" name="editar"></input>
						<a class="btn btn-secondary" href="doctores.php">cancelar</a>
                </div>
				
				</form>
				<?
	include ("controlador/conexion.php");
		if(!empty($_POST['editar'])){
			if(empty ($_POST["cedula"]) or empty ($_POST["nombre"])or empty ($_POST["apellido"])or empty ($_POST["esp"])or empty ($_POST["horarios"])or empty ($_POST["dias"])){
				echo "<h5 class='text-center' id='alert'><br>campos vacios</h5>";
		}else{
			$id = $_POST['id'];
			$cedula = $_POST['cedula'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$esp = $_POST['esp'];
			$horario = $_POST['horarios'];
			$dias = $_POST['dias'];
			
			$sql = $conn->query("UPDATE doctores SET cedula='$cedula',nombre='$nombre',apellido='$apellido',atiende='$esp',horario='$horario',dias='$dias' WHERE id ='$id'");
				
			}
		}
	?>
            </div>
        
					</div>
                </div>
				
				
				<!--fin tabla-->
					
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

   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">deseas cerrar seccion?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">selcciona "logout" para finalizar tu seccion</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
	
</body>

</html>
	