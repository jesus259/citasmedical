<?php
	$conn = new mysqli('localhost', 'root', '', 'citas');
		$sql = ("SELECT consulta FROM ccitas WHERE consulta='rayos x'");
		$resultado = $conn->query($sql);
		$rayos = $resultado->num_rows;
			echo $rayos;
	
?>
