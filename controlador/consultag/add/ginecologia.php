<?php
	$conn = new mysqli('localhost', 'root', '', 'citas');
		$sql = ("SELECT consulta FROM ccitas WHERE consulta='ginecologia'");
		$resultado = $conn->query($sql);
		$gin = $resultado->num_rows;
			echo $gin;
	
?>
