<? 
	
	include ("conexion.php"); 
	$id= $_GET['id'];
	$m=$conn->query("SELECT * FROM ccitas WHERE id='$id'");
	$datos = $m->fetch_array();
	$delet =$conn->query("DELETE FROM ccitas WHERE id='$id'");
	if($delet =! 0){header ("location: ../citas.php");}
	
	
?>