<?php
	$conn = new mysqli('localhost', 'root', '', 'citas');
		$sql = ("SELECT consulta FROM ccitas WHERE consulta='ecografia'");
		$resultado = $conn->query($sql);
		$eco = $resultado->num_rows;
			echo $eco;
	
?>
