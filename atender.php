<?php
session_start();

if(!isset($_SESSION['nombre'])){
 header("location: login.php");
}
//modulo para atender citas
	include ("controlador/conexion.php");
	$ID = $_GET['id'];
	$sql = $conn->query("SELECT * FROM ccitas WHERE id='$ID'");
	$res = $sql->fetch_array();
		$id =$res["id"];
		$nombre =$res["name"];
		$cedula =$res["ci"];
		$espe =$res["consulta"];
		$doc =$res["doctor"];
		$fechareg = date("y/m/d");
		$clasificacion =$res["clasificacion"];
		$localidad =$res["localidad"];
				
		$sql = $conn->query ("INSERT INTO atendidas (id, nombre, ci, especialidad, doctor, fechareg, clasificacion, localidad) VALUES ('$id','$nombre','$cedula','$espe','$doc','$fechareg','$clasificacion','$localidad')");
		if ($sql==1){
			echo "<h5 class='text-center' id='exito'>registro con exito<br></br></h5>";
			header ("location: hoy.php");
		}
?>
<?/*
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IPASME-Atender Cita</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<link href="css/stylesp.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">

	<div>
	<div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Atender citas-Rigistrar</h2>
                   
                </div>
                            <div class="col-lg-5 d-none d-lg-block"></div>
                           <div class="p-5">
							<form action="" method="POST" class="user">
									<? 
										include ('controlador/conexion.php');
										include ('controlador/att.php');
							
									?>
                                      <div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" name="nombre" placeholder="Primer Nombre y Apellido">
											</div>
											<div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" name="cedula" placeholder="Cedula">
											</div>
                                      </div>
                                        
                                    <div class="form-group row">
                                            
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" name="espe" placeholder="especialidad"><br>
                                            </div>
                                            <div class="col-sm-6">
												<input type="text" class="form-control form-control-user" name="doc" placeholder="doctor a atender"><br>
											</div>
                                    </div>
                                     
                                <div class="modal-footer">
                                            
                                            <!--<input method="POST" action="" class="btn btn-primary" type="button" value="paso 2->">-->
                                            <input class="btn btn-primary" type="submit" value="Procesar" name="procesar"></input>
                                            <a class="btn btn-secondary" type="button" href="index.php">Volver</a>
											
                                </div>
								</form>
                            </div>
        
        
        
    
     </div> 
     </div>     
     </div>
</body>	 
</html>