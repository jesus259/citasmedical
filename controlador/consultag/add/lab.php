<?php
	$conn = new mysqli('localhost', 'root', '', 'citas');
		$sql = ("SELECT consulta FROM ccitas WHERE consulta='laboratorios'");
		$resultado = $conn->query($sql);
		$lab = $resultado->num_rows;
			echo $lab;
	
?>
