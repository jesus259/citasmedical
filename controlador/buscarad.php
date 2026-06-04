<?php
	include ('conexion.php');
	//include ('paginacion.php');
	$query = "SELECT * FROM ccitas ORDER By fechareg ASC LIMIT 20";
	$salida ="";
	
	if(isset($_POST['consulta'])){
		$a = $conn->real_escape_string($_POST['consulta']);
		$query = "SELECT name, ci, localidad, atencion, email, telefono, consulta, fechac, fechareg, doctor, clasificacion FROM ccitas WHERE ci LIKE '%".$a."%' Or atencion LIKE '%".$a."%' OR consulta LIKE '%" .$a."%'";
	}
	$resultadob = $conn->query($query);
	
	if($resultadob->num_rows >0){?>
		<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
				<thead>
				<tr>
				
				<th>Nombre y apellido</th>
				<th>Cedula</th>
					
				<th>Para el:</th>
				<th>Emitido</th>
				<th>Doctor Asig.</th>
				<th>clasificacion</th>
				<th>Enviar Ficha</th>
				<th>Ficha</th>
				<th>Modificar</th>
				<th>Eliminar</th>
				</tr></thead>
				
				<tbody><?
				while($muestra = $resultadob->fetch_assoc()){?>
					<tr>
						
                        <td><? echo $muestra['name'];?></td>
						<td><? echo $muestra['ci'];?></td>
						
						<td><? echo $muestra['fechac'];?></td>
						<td><? echo $muestra['fechareg'];?></td>
						<td><? echo $muestra['doctor'];?></td>
						<td><? echo $muestra['clasificacion'];?></td>
						<td class="center"><a href="PHPMailer-master/envia.php?id=<? echo $muestra['id'];?>"><i class="fas fa-fw fa-mail-bulk"></i></a></td>
						<td class="center"><a href="ficha.php?id=<? echo $muestra['id'];?>"><i class="fas fa-fw fa-file-alt"></i></a></td>
						<td class="center"><a href="editc.php?id=<? echo $muestra['id'];?>"><i class="fas fa-fw fa-pen-fancy"></i></a></td>
						<td class="center"><a href='controlador/deletc.php?id=<? echo $muestra['id'];?>'><i class="fas fa-fw fa-trash-alt"></i></a></td>
                     </tr><?}
	$salida.="</tbody></tabla>";
	} else{
		$salida.="<h5 class='text-center' id='alert'>No hay datos</h5>";
	}
	Echo $salida;
	$conn->close();
	
?>