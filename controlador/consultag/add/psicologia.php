<?php
	$conn = new mysqli('localhost', 'root', '', 'citas');
		$sql = ("SELECT consulta FROM ccitas WHERE consulta='psicologia'");
		$resultado = $conn->query($sql);
		$psic = $resultado->num_rows;
			echo $psic;
	
?>
