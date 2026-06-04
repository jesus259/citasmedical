<?
	
	$conn = new mysqli('localhost', 'root', '', 'citas');
	

	$sql = ("SELECT consulta FROM ccitas WHERE consulta='medicina-general'");
		$resultado = $conn->query($sql);
		$medg = $resultado->num_rows;
			//echo "medicina general: ".$medg;
			
			$sql = ("SELECT consulta FROM ccitas WHERE consulta='ginecologia'");
		$resultado = $conn->query($sql);
		$gin = $resultado->num_rows;
			//echo "<br>ginecologia: ".$gin;
			
			$sql = ("SELECT consulta FROM ccitas WHERE consulta='odontologia'");
		$resultado = $conn->query($sql);
		$od = $resultado->num_rows;
			//echo "<br>odontologia: ".$od;
			
			$sql = ("SELECT consulta FROM ccitas WHERE consulta='laboratorios'");
		$resultado = $conn->query($sql);
		$lab = $resultado->num_rows;
			//echo "<br>laboratorios: ".$lab;
			
			$sql = ("SELECT consulta FROM ccitas WHERE consulta='cardiologia'");
		$resultado = $conn->query($sql);
		$car = $resultado->num_rows;
			//echo "<br>cardiologia: ".$car;
			
			$sql = ("SELECT consulta FROM ccitas WHERE consulta='pediatra'");
		$resultado = $conn->query($sql);
		$pd = $resultado->num_rows;
			//echo "<br>pediatra: ".$pd;
			
			$sql = ("SELECT consulta FROM ccitas WHERE consulta='psicologia'");
		$resultado = $conn->query($sql);
		$psic = $resultado->num_rows;
			//echo "<br>psicologia: ".$psic;
			
			$sql = ("SELECT consulta FROM ccitas WHERE consulta='fisiatria'");
		$resultado = $conn->query($sql);
		$fis = $resultado->num_rows;
			//echo "<br>fisiatria: ".$fis;
			
			$sql = ("SELECT consulta FROM ccitas WHERE consulta='ecografia'");
		$resultado = $conn->query($sql);
		$eco = $resultado->num_rows;
			//echo "<br>ecografia: ".$eco;
			
			$sql = ("SELECT consulta FROM ccitas WHERE consulta='rayos x'");
		$resultado = $conn->query($sql);
		$rayos = $resultado->num_rows;
			//echo "<br> rayos X: ".$rayos;
		
	$result = $rayos + $eco + $fis + $psic + $pd + $car + $lab + $od + $medg + $gin;
	echo $result;

?>