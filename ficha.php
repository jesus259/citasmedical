<?php
session_start();

if(!isset($_SESSION['nombre'])){
 header("location: login.php");
}			$admin = $_SESSION["rol"];
			if($admin >= 2){header("location: index.php");}
	include ("controlador/conexion.php");
	$id= $_GET['id'];
	$m=$conn->query("SELECT * FROM ccitas WHERE id='$id'");
	$f=$conn->query("SELECT * FROM consultas WHERE id_cita='$id'");
	$datosf = $f->fetch_array();
	$datos = $m->fetch_array();
	if($id==0){header ("location: citas.php");}
	include ("controlador/agcitas.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Citas-IPASME-Ficha</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="css/stylesp.css" rel="stylesheet">
</head>
<style>
@media print { 
.printN{ 
display: none !important; 
} 
}
</style>
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
                
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <ul class="navbar-nav ml-auto printN">

                     <div class="topbar-divider d-none d-sm-block"></div>
						<? include ("modulos/user.html"); ?>
					</ul>
				

                </nav>
                <!-- End of Topbar -->
				
	<div id="content">
	<div class="modal-header text-center">
		<h2 class="modal-title" id="exampleModalLabel">Ficha Post Consulta</h2>
	   
	</div>
	<form autocomplete="off" method="POST" class="user">
	  <div class="form-group row">
			<div class="col-sm-6 mb-3 mb-sm-0">
			<input type="hidden" name="id"value="<? echo $datos['id'];?>">
			<input hidden name="ci"value="<? echo $datos['ci'];?>">
			<label>Nombre y Apellido</label>
			<input DISABLED type="text" class="form-control form-control-user" name="name" value="<? echo $datos['name'];?>">
			</div>
			<div class="col-sm-6">
			<label>Cedula</label>
			<input DISABLED type="text" class="form-control form-control-user" name="ci2" value="<? echo $datos['ci'];?>">
			</div>
	  </div>
		<div class="form-group row">
		<div class="col-sm-6 mb-3 mb-sm-0">
		<label>Motivo de la consulta:</label>
		<input DISABLED type="text" class="form-control form-control-user" name="atencion" value="<? echo $datos['atencion'];?>"></div>
		<div class="col-sm-6 mb-3 mb-sm-0">
		<label>Clasificacion</label>
		<input DISABLED type="text" class="form-control form-control-user" name="clasificacion" value="<? echo $datos['clasificacion'];?>"></div>
		</div>
	<div class="form-group row">
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Direccion de Vivienda</label>
			<input DISABLED type="text" class="form-control form-control-user" name="localidad" value="<? echo $datos['localidad'];?>">
			</div>
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Correo Electronico</label>
			<input DISABLED type="text" class="form-control form-control-user" name="email" value="<? echo $datos['email'];?>"><br>
			</div>
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Numero de Telefono</label>
			<input DISABLED type="text" class="form-control form-control-user" name="telefono" value="<? echo $datos['telefono'];?>">
			</div>
			
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Fecha de la Cita</label>
			<input DISABLED type="date" class="form-control form-control-user" name="fechac" value="<? echo $datos['fechac'];?>"><br>
			</div>
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Especialidad</label>
			<input DISABLED type="text" class="form-control form-control-user" name="consulta" value="<? echo $datos['consulta'];?>"><br>
			</div>
			<div class="col-sm-6">
			<label>Doctor asignado</label>
				<input DISABLED type="text" class="form-control form-control-user" name="doctor" value="<? echo $datos['doctor'];?>"><br>
				</select>
			</div>
			<div class="col-sm-6">
			<label>Resultado de Consulta</label>
				<input required value="<? echo $datosf['consulta'];?>" type="text" class="form-control form-control-user campo" name="consulta" <?if($datosf['id_cita'] >0){?> DISABLED <?}?>><br>
				</select>
			</div>
			<div class="col-sm-6">
			<label>Recetario</label>
				<input required value="<? echo $datosf['recetario'];?>" type="text" class="form-control form-control-user campo" name="recetario" <?if($datosf['id_cita'] >0){?>DISABLED<?}?>><br>
				</select>
			</div>
	</div>
			<div class="modal-footer">
			<?if($datosf['id_cita'] <=0){
				echo'<input class="btn btn-primary printN" type="submit" value="Guardar datos" name="fichaconsulta"></input>';
			}else{?>
				<input class="btn btn-primary printN" type="submit" value="Imprimir" onclick="imprimir();"></input>

			<?}?>
				<a class="btn btn-secondary printN" href="citas.php">cancelar</a>
            </div>
	 </form>
</div>
	</div>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
			<div class="">
			
			<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
				<thead>
				<tr>
				
				<th>Cedula</th>
				<th>Consulta</th>
				<th>Recetario</th>
				<th>Fecha atendido</th>
				</tr></thead>
				
				<tbody><?
				$cedulaP= $datos['ci'];
				$consultaEspecial=$conn->query("SELECT * FROM consultas WHERE ci='$cedulaP'");
				while($muestra = $consultaEspecial->fetch_assoc()){?>
					<tr>
                        <td><? echo $muestra['ci'];?></td>
						<td><? echo $muestra['consulta'];?></td>
						<td><? echo $muestra['recetario'];?></td>
						<td><? echo $muestra['fecha'];?></td>						
                     </tr><?}?>
				</tbody></table>
				
			</div>
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
</div>
	
    
			<script type="text/javascript">
			var inputs = document.getElementsByClassName("campo");

			// Iterar sobre los elementos y aplicar la función a cada uno
			for (var i = 0; i < inputs.length; i++) {
			  inputs[i].oninput = function() {
				this.value = this.value.toUpperCase();
			  };
			}
						function imprimir() {
							if (window.print) {
								window.print();
							} else {
								alert("La función de impresion no esta soportada por su navegador.");
							}
						}
			</script>
    
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
	