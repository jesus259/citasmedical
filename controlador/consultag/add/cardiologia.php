<?php
	$conn = new mysqli('localhost', 'root', '', 'citas');
		$sql = ("SELECT consulta FROM ccitas WHERE consulta='cardiologia'");
		$resultado = $conn->query($sql);
		$car = $resultado->num_rows;
			echo $car;
	
?>
