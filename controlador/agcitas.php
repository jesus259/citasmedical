<?php
	
	if(!empty($_POST["registro"])){
		if (empty ($_POST["name"]) or empty ($_POST["ci"]) or empty ($_POST["atencion"]) or empty ($_POST["localidad"]) or empty ($_POST["email"]) or empty ($_POST["telefono"]) or empty ($_POST["fechac"]) or empty ($_POST["consulta"]) or empty ($_POST["doctor"]) or empty ($_POST["clasificacion"])){
				echo "<h5 class='text-center' id='alert'>*Advertencia: Complete todos los datos*<br></br></h5>";
			}else{
				$name =$_POST["name"];
				$ci =$_POST["ci"];
				$atencion =$_POST["atencion"];
				$localidad =$_POST["localidad"];
				$email =$_POST["email"];
				$telefono =$_POST["telefono"];
				$fechac =$_POST["fechac"];
				$consulta =$_POST["consulta"];
				$doctor =$_POST["doctor"];
				$fechareg = date("y/m/d");
				
				$day= date_format(date_create($fechac),'y/m/d');
			//	echo $day."-".$fechareg;exit();
				
				if($day <= $fechareg){echo "<script>alert ('Error no debe registrar la cita ni antes ni el dia cursante')</script>";}else{
				$clasificacion= $_POST["clasificacion"];
				$sql=$conn->query ("INSERT INTO ccitas (name,ci,localidad,atencion,email,telefono,consulta,fechac,fechareg,doctor,clasificacion) VALUES ('$name','$ci','$localidad','$atencion','$email','$telefono','$consulta','$fechac','$fechareg','$doctor','$clasificacion')");
				if ($sql==1){
					echo "<h5 class='text-center' id='exito'>Registro con exito<br></br></h5>";
				}
					else{echo "<h5 class='text-center' id='alert'>*Advertencia: Error de registro, llame al administrador*<br></br></h5>";}
				
				}
			}
		
	}

	//editar reistro de citas
	
	if(!empty($_POST["editar"])){
		if (empty ($_POST["name"]) or empty ($_POST["ci"]) or empty ($_POST["atencion"]) or empty ($_POST["localidad"]) or empty ($_POST["email"]) or empty ($_POST["telefono"]) or empty ($_POST["fechac"]) or empty ($_POST["consulta"]) or empty ($_POST["doctor"]) or empty ($_POST["clasificacion"])){
				echo "<h5 class='text-center' id='alert'>*Advertencia: Complete todos los datos*<br></br></h5>";
			}else{
				$id =$_POST["id"];
				$name =$_POST["name"];
				$ci =$_POST["ci"];
				$atencion =$_POST["atencion"];
				$localidad =$_POST["localidad"];
				$email =$_POST["email"];
				$telefono =$_POST["telefono"];
				$fechac =$_POST["fechac"];
				$consulta =$_POST["consulta"];
				$doctor =$_POST["doctor"];
				$fechareg = date("y/m/d");
				$clasificacion= $_POST["clasificacion"];
				
				$sql=$conn->query ("UPDATE ccitas SET id='$id',name='$name',ci='$ci',localidad='$localidad',atencion='$atencion',email='$email',telefono='$telefono',consulta='$consulta',fechac='$fechac',fechareg='$fechareg',doctor='$doctor',clasificacion='$clasificacion' WHERE id='$id'");
				if ($sql==1){
					echo "<h5 class='text-center' id='exito'>Exito<br></br></h5>";
				}
					else{echo "<h5 class='text-center' id='alert'>*Advertencia: Error de registro, llame al administrador*<br></br></h5>";}
				
			}
		
	}
	
	if(isset($_POST["fichaconsulta"])){
		$id =$_POST["id"];
		$ci =$_POST["ci"];
		$consulta=$_POST['consulta'];
		$recetario=$_POST['recetario'];
		$day = date("y/m/d");

		$sql=$conn->query("INSERT INTO consultas (id_cita,ci,consulta,recetario,fecha) VALUES ('$id','$ci','$consulta','$recetario','$day')");
			if($sql > 0){
				echo "<script>alert ('El registro post consulta ha sido un exito')</script>";
				header ("location: citas.php");
			}else{
				echo "<script>alert ('Error de registro post consulta contacte al administrador/desarrollador')</script>";
			}
	}

?>