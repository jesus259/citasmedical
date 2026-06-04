<?php
session_start();

if(!isset($_SESSION['nombre'])){
 header("location: login.php");
}

//modulo para registrar citas
?>
<!DOCTYPE html>
<html lang="es">

<head>
		
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="js/select.js"></script>


    <title>IPASME-Crear Cita</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="css/stylesp.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
	<div class="modal-dialog" role="document">
	<div class="modal-content">
	<div class="modal-header">
	<h2 class="modal-title" id="exampleModalLabel">crear cita</h2>

	</div>
		<div class="col-lg-5 d-none d-lg-block"></div>
	   <div class="p-5">
		<form autocomplete="off" method="POST" class="user">
			<? 
				include ('controlador/conexion.php');
				include ('controlador/agcitas.php');
				
			?>
			  <div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
					<label>Nombre y Apellido</label>
					<input REQUIRED type="text" class="form-control campo" name="name">
					</div>
					<div class="col-sm-6">
					<label>Cedula</label>
					<input type="number" class="form-control" name="ci">
					</div>
			  </div>
				<div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label>Motivo de Consulta:</label>
				<input REQUIRED type="text" class="form-control campo" name="atencion"></div>
				<div class="col-sm-6 mb-3 mb-sm-0">
				<label>Clasificacion</label>
				<select REQUIRED type="text" class="form-control" name="clasificacion">
					<option value="AFILIADO">AFILIADO</option>
					<option value="COMUNIDAD">COMUNIDAD</option>
				</select>
				</div>
				</div>
			<div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
					<label>Direccion de vivienda</label>
					<input REQUIRED type="text" class="form-control campo" name="localidad">
					</div>
					<div class="col-sm-6 mb-3 mb-sm-0">
					<label>Correo Electronico</label>
					<input REQUIRED type="text" class="form-control" name="email"><br>
					</div>
					<div class="col-sm-6 mb-3 mb-sm-0">
					<label>Numero Telefonico</label>
					<input REQUIRED type="number" class="form-control" name="telefono">
					</div>
					
					<div class="col-sm-6 mb-3 mb-sm-0">
					<label>Fecha para la cita</label>
					<input REQUIRED type="date" class="form-control" name="fechac"><br>
					</div>
					<div class="col-sm-6 mb-3 mb-sm-0">
					<label>Especialidad</label>
					<select REQUIRED class="form-control form-p" name="consulta" id="consulta">
						<option value="0">Especialidad:</option>
						<?
						$sql = $conn->query("SELECT * FROM especialidades");
						While($val = mysqli_fetch_array($sql)){
							echo '<option value='.$val["esp"].'>'.$val["esp"].'</option>';
						}
						?>
					</select>
					</div>
					<div class="col-sm-6">
					<label>Doctor a atender</label>
					<select REQUIRED class="form-control" name="doctor" id="doctores">
					</select>
						
					</div>
			</div>
			 
		<div class="modal-footer">
					
					<!--<input method="POST" action="" class="btn btn-primary" type="button" value="paso 2->">-->
					<input class="btn btn-primary" type="submit" value="registrar" name="registro"></input>
					<a class="btn btn-secondary" type="button" href="index.php">Volver</a>
					
		</div>
			</form>
		</div>
        
        <script>
	var inputs = document.getElementsByClassName("campo");

	// Iterar sobre los elementos y aplicar la función a cada uno
	for (var i = 0; i < inputs.length; i++) {
	  inputs[i].oninput = function() {
		this.value = this.value.toUpperCase();
	  };
	}
	//listas
	$(document).ready(function(){
	  $('#consulta').change(function(){
		var seleccion = $(this).val();
		//console.log (seleccion);
		$.ajax({
		  url: 'controlador/seleccion.php', // Archivo PHP que maneja la solicitud
		  method: 'POST',
		  data: {seleccion: seleccion},
		  success: function(data){
			$('#doctores').html(data); // Actualiza la segunda lista con las opciones recibidas
		  }
		});
	  });
	});
	</script>
     </div> 
     </div>     
</body>	 
</html>