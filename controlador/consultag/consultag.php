<?
//consultas generales a la base de datos para graficar
$conn = new mysqli('localhost', 'root', '', 'citas');
	if(!empty ($_POST["updatetabla"])){
	
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
			$sql = ("SELECT consulta FROM ccitas WHERE consulta='nutricionista'");
		$resultado = $conn->query($sql);
		$nutri = $resultado->num_rows;
			//echo "<br> nutricionista: ".$nutri;
			
			
			$bd= $conn->query ("UPDATE contador SET id='1',esp='rayos x',cont='$rayos' WHERE id ='1'");
			$bd2=$conn->query ("UPDATE contador SET `id`='2',`esp`='ecografia',`cont`='$eco' WHERE id = '2'");
			$bd3=$conn->query ("UPDATE contador SET `id`='3',`esp`='ginecologia',`cont`='$gin' WHERE id = '3'");
			$bd4=$conn->query ("UPDATE contador SET `id`='4',`esp`='odontologia',`cont`='$od' WHERE id = '4'");
			$bd5=$conn->query ("UPDATE contador SET `id`='5',`esp`='medicina-general',`cont`='$medg' WHERE id = '5'");
			$bd6=$conn->query ("UPDATE contador SET `id`='6',`esp`='psicologo',`cont`='$psic' WHERE id = '6'");
			$bd7=$conn->query ("UPDATE contador SET `id`='7',`esp`='laboratorio',`cont`='$lab' WHERE id = '7'");
			$bd8=$conn->query ("UPDATE contador SET `id`='8',`esp`='fisiatria',`cont`='$fis' WHERE id = '8'");
			$bd9=$conn->query ("UPDATE contador SET `id`='9',`esp`='pediatra',`cont`='$pd' WHERE id = '9'");
			$bd1=$conn->query ("UPDATE contador SET `id`='10',`esp`='cardiologia',`cont`='$car' WHERE id = '10'");
			$bd1=$conn->query ("UPDATE contador SET `id`='11',`esp`='nutricionista',`cont`='$nutri' WHERE id = '11'");
				
					if($bd==1){echo "carga con exito";
				//echo $bd;
			}			
			}
			
			//para actualizar contador en base de datos
//UPDATE `especialidades` SET `id`='1',`esp`='rayos x',`cont`=$variable WHERE id = '1'
?>