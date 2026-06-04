<?
include ("conexion.php");
	if(!empty($_POST["filtro"])){
		$fechai = date("y-m-d", strtotime($_POST['fechai']));
		$fechaf = date("y-m-d", strtotime($_POST['fechaf']));
				
		$sql = "SELECT * FROM ccitas WHERE fechac BETWEEN '$fechai' AND '$fechaf' ORDER BY fechac ASC";
		$fila = $conn->query ($sql);
		$row = $fila->num_rows;
		
		$salida ="";
				$salida.="<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
				<thead>
				<tr>
				
				<th>Nombre y apellido</th>
				<th>Cedula</th>
				<th>Localidad</th>
				<th>Atencion a:</th>
				<th>Email-correo</th>
				<th>Telefono</th>
				<th>Consulta</th>
				<th>Para el:</th>
				<th>Emitido</th>
				<th>Doctor Asig.</th>
				<th>clasificacion</th>
				</tr></thead>
				
				<tbody>";
				while($muestra = $fila->fetch_assoc()){
					$salida.="<tr>
						
                        <td>".  $muestra['name']."</td>
						<td>".  $muestra['ci']."</td>
						<td>".  $muestra['localidad']."</td>
						<td>".  $muestra['atencion']."</td>
						<td>".  $muestra['email']."</td>
						<td>".  $muestra['telefono']."</td>
						<td>".  $muestra['consulta']."</td>
						<td>".  $muestra['fechac']."</td>
						<td>".  $muestra['fechareg']."</td>
						<td>".  $muestra['doctor']."</td>
						<td>".  $muestra['clasificacion']."</td>
                     </tr>";}
	$salida.="</tbody></tabla>";
		
	echo $salida;
	
	
	}
?>