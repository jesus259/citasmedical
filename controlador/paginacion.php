<?
	if(!$_GET){header('location: citas.php?pagina=1');}
	$xpagina= 2;
	$start = ($_GET['pagina']-1)*$xpagina;
	
	
	
		//echo $start;
	$query = "SELECT * FROM ccitas ORDER By fechareg ASC";
	$contpaginas1 = $conn->query($query);
	$contpaginas = $contpaginas1->num_rows;
	
	$fila = ("SELECT * FROM ccitas ORDER By fechareg ASC LIMIT 0,2");
	
	$pag = $conn->query($fila);
	$paginas = ceil ($contpaginas / $xpagina);
	
		
?>