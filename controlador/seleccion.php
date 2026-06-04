<?
include ("conexion.php");
if(isset($_POST['seleccion'])){
$seleccion = $_POST['seleccion'];
echo $seleccion;
$sql = $conn->query("SELECT * FROM doctores WHERE atiende='$seleccion'");
if($sql->num_rows >0){
While($val = mysqli_fetch_array($sql)){
	echo '<option value='.$val["nombre"].'>'.$val["nombre"].'-'.$val["atiende"].'</option>';
}
}else{
	  echo '<option value="">No hay opciones disponibles</option>';
}
}
?>