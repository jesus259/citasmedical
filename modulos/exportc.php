<?
include ("../controlador/conexion.php");
 $querysol=$conn->query("SELECT * FROM ccitas");
	header ("content-type: application/vnd.ms-excel");
	header ("content-disposition: attachment;  filename=Reporte-citas.xls");
	header ("pragma: no-cache");
	header ("expires: 0");
 echo "<table border=1>";
 echo "<tr>";
 echo "<th colspan=12>Reporte de Citas</th>";
 echo "</tr>";
 echo "<tr><th>ID</th><th>Nombre y Apellido</th><th>Cedula</th><th>Localidad</th><th>atencion</th><th>telefono</th><th>Email</th><th>Consulta</th><th>fecha agendada</th><th>registrada el:</th><th>doctor</th><th>clasificacion</th></tr>";
		While($row=mysqli_fetch_array($querysol)){
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['ci']."</td>";
			echo "<td>".$row['localidad']."</td>";
			echo "<td>".$row['atencion']."</td>";
			echo "<td>".$row['telefono']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['consulta']."</td>";
			echo "<td>".$row['fechac']."</td>";
			echo "<td>".$row['fechareg']."</td>";
			echo "<td>".$row['doctor']."</td>";
			echo "<td>".$row['clasificacion']."</td>";
			echo "</tr>";
		}
 
 echo "</table>";
 ?>