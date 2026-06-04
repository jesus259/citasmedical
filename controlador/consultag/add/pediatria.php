<?php
	$conn = new mysqli('localhost', 'root', '', 'citas');
		$sql = ("SELECT consulta FROM ccitas WHERE consulta='pediatra'");
		$resultado = $conn->query($sql);
		$pd = $resultado->num_rows;
			echo $pd;
	
?>
