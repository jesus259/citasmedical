<?
include ("../controlador/conexion.php");
 $querysol=$conn->query("SELECT * FROM atendidas");
	header ("content-type: application/vnd.ms-excel");
	header ("content-disposition: attachment;  filename=Reporte-atendidos.xls");
	header ("pragma: no-cache");
	header ("expires: 0");
 echo "<table border=1>";
 echo "<tr>";
 echo "<th colspan=8>Reporte de Citas Atendidas</th>";
 echo "</tr>";
 echo "<tr><th>ID</th><th>Nombre y Apellido</th><th>Cedula</th><th>Localidad</th><th>Especialidad</th><th>Clasificacion</th><th>registrada el:</th><th>doctor</th></tr>";
		While($row=mysqli_fetch_array($querysol)){
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['nombre']."</td>";
			echo "<td>".$row['ci']."</td>";
			echo "<td>".$row['localidad']."</td>";
			echo "<td>".$row['especialidad']."</td>";
			echo "<td>".$row['clasificacion']."</td>";
			echo "<td>".$row['fechareg']."</td>";
			echo "<td>".$row['doctor']."</td>";
			echo "</tr>";
		}
 
 echo "</table>";
?>