<?php
	$conn = new mysqli('localhost', 'root', '', 'citas');
		$sql = ("SELECT consulta FROM ccitas WHERE consulta='medicina general'");
		$resultado = $conn->query($sql);
		$medg = $resultado->num_rows;
			echo $medg;
	
?>
