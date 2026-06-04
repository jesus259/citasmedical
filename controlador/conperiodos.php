<?
	include ("conexion.php");
	
	date_default_timezone_set('America/Caracas');
	$hoy = date("y/m/d");
	//echo $hoy;
	echo "<br>";
	$sql = "SELECT * FROM ccitas WHERE fechac ='$hoy'";
	$result = $conn->query($sql);
	$salida = "";
	if(isset($_POST['consulta'])){
		$a = $conn->real_escape_string($_POST['consulta']);
		$query = "SELECT name, ci, localidad, atencion, email, telefono, consulta, fechac, fechareg, doctor, clasificacion FROM ccitas WHERE ci LIKE '%".$a."%' Or atencion LIKE '%".$a."%' OR consulta LIKE '%" .$a."%'";
	}
	$result = $conn->query($sql);
	if($result->num_rows >0){?>
			<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
				<thead>
				<tr>
				
				<th>Nombre y apellido</th>
				<th>Cedula</th>
				<th>Atencion a:</th>
				<th>Email-correo</th>
				<th>Telefono</th>
				<th>Consulta</th>
				<th>Emitido</th>
				<th>Doctor Asig.</th>
				<th>clasificacion</th>
				<th>Opciones</th>
				</tr></thead>
				
				<tbody>
				<?php while($muestra = $result->fetch_assoc()){?>
					<tr>
						
                        <td><? echo $muestra['name'];?></td>
						<td><? echo $muestra['ci'];?></td>
						<td><? echo $muestra['atencion'];?></td>
						<td><? echo $muestra['email'];?></td>
						<td><? echo $muestra['telefono'];?></td>
						<td><? echo $muestra['consulta'];?></td>
						<td><? echo $muestra['fechareg'];?></td>
						<td><? echo $muestra['doctor'];?></td>
						<td><? echo $muestra['clasificacion'];?></td>
						<td class="center"><a href="atender.php?id=<?echo $muestra['id'];?>"><? $id=$muestra['id']; $sql=$conn->query("SELECT * FROM atendidas WHERE id='$id'");	if($sql->num_rows >= 1){}else{echo '<i class="fas fa-fw fa-check"></i>';}?></a></td>
                     </tr><?}
	$salida.="</tbody></tabla>";
	} else{
		$salida.="<h5 class='text-center' id='alert'>No hay datos</h5>";
	}
	Echo $salida;
	$conn->close();
?>