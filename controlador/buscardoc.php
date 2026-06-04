<?php
	include ('conexion.php');
	$salida ="";
	$query = "SELECT * FROM doctores ORDER By atiende";
	
	if(isset($_POST['consulta'])){
		$a = $conn->real_escape_string($_POST['consulta']);
		$query = "SELECT id, cedula, nombre, apellido, atiende, horario, dias FROM doctores WHERE atiende LIKE '%".$a."%' Or nombre LIKE '%".$a."%' OR dias LIKE '%" .$a."%'Or cedula LIKE '%".$a."%'Or apellido LIKE '%".$a."%'";
	}
	$resultado = $conn->query($query);
	if($resultado->num_rows >0){?>
		<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
				<thead>
				<tr>
					<th>Cedula</th>
					<th>Nombre</th>
					<th>apellido</th>
					<th>atiende</th>
					<th>Horario</th>
					<th>Dia</th>
					<th class="center">Editar</th>
					<th class="center">Eliminar</th>
				<tbody>
				<?php  while($muestra = $resultado->fetch_assoc()){?>
					<tr>
						
                        <td><? echo $muestra['cedula'];?></td>
                        <td><? echo $muestra['nombre'];?></td>
						<td><? echo $muestra['apellido'];?></td>
						<td><? echo $muestra['atiende'];?></td>
						<td><? echo $muestra['horario'];?></td>
						<td><? echo $muestra['dias'];?></td>
						<td class="center"><a href="editd.php?id=<? echo $muestra['id'];?>"><i class="fas fa-fw fa-pen-fancy"></i></a></td>
						<td class="center"><a href='controlador/delet.php?id=<? echo $muestra['id'];?>'><i class="fas fa-fw fa-trash-alt"></i></a></td>
					</tr>
					<?php
					}
	$salida.="</tbody></tabla>";
	} else{
		$salida.="<h5 class='text-center' id='alert'>No hay datos</h5>";
	}
	Echo $salida;
	$conn->close();
	
?>