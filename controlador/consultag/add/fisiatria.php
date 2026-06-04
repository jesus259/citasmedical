<?php
	$conn = new mysqli('localhost', 'root', '', 'citas');
		$sql = ("SELECT consulta FROM ccitas WHERE consulta='fisiatria'");
		$resultado = $conn->query($sql);
		$fis = $resultado->num_rows;
			echo $fis;
	
?>
