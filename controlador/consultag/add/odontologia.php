<?php
	$conn = new mysqli('localhost', 'root', '', 'citas');
		$sql = ("SELECT consulta FROM ccitas WHERE consulta='odontologia'");
		$resultado = $conn->query($sql);
		$od = $resultado->num_rows;
			echo $od;
	
?>
