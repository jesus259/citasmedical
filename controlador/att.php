<?
	include ("conexion.php");
	
	if(!empty ($_POST["procesar"])){
		if (empty ($_POST["nombre"]) or empty ($_POST["cedula"]) or empty ($_POST["espe"]) or empty ($_POST["doc"])){
			echo "complete todos los datos";
		}else{
			$nombre =$_POST["nombre"];
			$cedula =$_POST["cedula"];
			$espe =$_POST["espe"];
			$doc =$_POST["doc"];
			$fechareg = date("y/m/d");
			//confirmacion de datos
			$name = "SELECT * FROM ccitas WHERE name ='$nombre'";
			$ci = "SELECT * FROM ccitas WHERE ci ='$cedula'";
			$especialidad = "SELECT * FROM ccitas WHERE especialidad ='$espe'";
			$doct = $conn->query("SELECT nombre FROM doctores WHERE nombre ='$doc'");
			$esp = $conn->query("SELECT esp FROM especialidades WHERE esp ='$espe'");
			
			$num = $conn->query ($ci);
			$result = $num->num_rows;
			//echo $result;
			
			if($result>0){
			echo "los datos del paciente coinciden";
				if($doct->num_rows !=1){
					echo "<br>doctor no registrado";
				}else{ if ($esp->num_rows !=1){echo "<br>Especialidad no resgistrada.";
				}else{
						$sql = $conn->query ("INSERT INTO atendidas (nombre, ci, especialidad, doctor, fechareg) VALUES ('$nombre','$cedula','$espe','$doc','$fechareg')");
					if ($sql==1){
						echo "<h5 class='text-center' id='exito'>registro con exito<br></br></h5>";
					}
				}}
			}else{
			echo "los datos no coinciden";
		}
			}
			
			
	}

		
		

?>