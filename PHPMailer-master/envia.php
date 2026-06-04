<?php
	include ("../controlador/conexion.php");
	$id= $_GET['id'];
	$m=$conn->query("SELECT * FROM ccitas WHERE id='$id'");
	$f=$conn->query("SELECT * FROM consultas WHERE id_cita='$id'");
	$datosf = $f->fetch_array();
	$datos = $m->fetch_array();
					
		$content='<div class="form-group row">
			<div class="col-sm-6 mb-3 mb-sm-0">
			<input type="hidden" name="id"value="'. $datos['id'].'">
			<input hidden name="ci"value="'.  $datos['ci'].'">
			<label>Nombre y Apellido</label>
			<input DISABLED type="text" class="form-control form-control-user" name="name" value="'.  $datos['name'].'">
			</div>
			<div class="col-sm-6">
			<label>Cedula</label>
			<input DISABLED type="text" class="form-control form-control-user" name="ci2" value="'.  $datos['ci'].'">
			</div>
	  </div>
		<div class="form-group row">
		<div class="col-sm-6 mb-3 mb-sm-0">
		<label>Motivo de la consulta:</label>
		<input DISABLED type="text" class="form-control form-control-user" name="atencion" value="'. $datos['atencion'].'"></div>
		<div class="col-sm-6 mb-3 mb-sm-0">
		<label>Clasificacion</label>
		<input DISABLED type="text" class="form-control form-control-user" name="clasificacion" value="'. $datos['clasificacion'].'"></div>
		</div>
	<div class="form-group row">
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Direccion de Vivienda</label>
			<input DISABLED type="text" class="form-control form-control-user" name="localidad" value="'. $datos['localidad'].'">
			</div>
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Correo Electronico</label>
			<input DISABLED type="text" class="form-control form-control-user" name="email" value="'.$datos['email'].'"><br>
			</div>
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Numero de Telefono</label>
			<input DISABLED type="text" class="form-control form-control-user" name="telefono" value="'. $datos['telefono'].'">
			</div>
			
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Fecha de la Cita</label>
			<input DISABLED type="date" class="form-control form-control-user" name="fechac" value="'. $datos['fechac'].'"><br>
			</div>
			<div class="col-sm-6 mb-3 mb-sm-0">
			<label>Especialidad</label>
			<input DISABLED type="text" class="form-control form-control-user" name="consulta" value="'. $datos['consulta'].'"><br>
			</div>
			<div class="col-sm-6">
			<label>Doctor asignado</label>
				<input DISABLED type="text" class="form-control form-control-user" name="doctor" value="'. $datos['doctor'].'"><br>
				</select>
			</div>
			<div class="col-sm-6">
			<label>Resultado de Consulta</label>
				<input required value="'.$datosf['consulta'].'" type="text" class="form-control form-control-user campo" name="consulta" DISABLED><br>
				</select>
			</div>
			<div class="col-sm-6">
			<label>Recetario</label>
				<input required value="'. $datosf['recetario'].'" type="text" class="form-control form-control-user campo" name="recetario" DISABLED><br>
				</select>
			</div>
	</div>';	
	
	$tabla1= '<tbody>';
$cedulaP = $datos['ci'];
$consultaEspecial = $conn->query("SELECT * FROM consultas WHERE ci='$cedulaP'");
while ($muestra = $consultaEspecial->fetch_assoc()) {
    $tabla2= '<tr>
            <td>' . $muestra['ci'] .'-</td>
            <td>' . $muestra['consulta'] . '-</td>
            <td>' . $muestra['recetario'] . '-</td>
            <td>' . $muestra['fecha'] . '-</td>						
          </tr>';
}
$tabla3= '</tbody>';
	$tabla= '<br>'.$tabla1.'-'.$tabla2.'-'.$tabla3;	
echo $content . $tabla;
echo "<hr><h3>Esta opcion requiere configuracion del correo emisor para poder cumplir con su funcion, contacte al desarrollador para completar dicho proceso</h3>";
exit();
$nombre = "IPASME"; //your-name -- "Jesus J Rondon S Lunes 2...."; //
$vcorreo= ""; //your-email
$Rcorreo= $email['receptor']; 
$telefono = $row['contacto']; //your-phone
$negocio=$row['negocio'];
$vmensaje = $content.$tabla; //your-mensage

$contenido = "<!DOCTYPE html>
            <html lang='es'>
            <head>
                <meta charset='UTF-8'>
            </head>
            <body><table bgcolor='#ffffff' border='0' cellpadding='0' cellspacing='0' width='100%'><tbody><tr><td align='center' valign='top'><table border='0' cellpadding='0' cellspacing='0' style='min-width:500px' width='500'><tbody><tr><td align='center' valign='top'><table border='0' cellpadding='0' cellspacing='0' width='500'><tbody><tr><td align='left' valign='top'></td></tr><tr><td align='center' valign='top'><table border='0' cellpadding='0' cellspacing='0' width='480'><tbody><tr><td align='left' style='font-family:Helvetica,Arial,sans-serif;font-size:17px;line-height:24px;color:#454958' valign='top'><b>Buen Día:</b></td></tr><tr><td align='left' style='padding-bottom:30px' valign='top'><table border='0' cellpadding='0' cellspacing='0' width='100%'><tbody><tr><td align='left' style='font-family:Helvetica,Arial,sans-serif;font-size:17px;line-height:24px;color:#454958;padding-bottom:19px' valign='top'>Emision de Reporte financiero, con los siguientes datos: <br>Nombre.: " . $nombre . "<br>Correo.: " . $vcorreo . "<br>Telefono.: " . $telefono . "<br>Mensaje.: " . $vmensaje . "<br>Los datos suministrados en el presente correo, son datos resultantes del sistema INV-DESYM del comercio ". $negocio .". <br><br></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></tr></tbody></table></td></tr></tbody></table></body></html></body></html>";
			

// Ayuda: https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting
// https://support.google.com/accounts/answer/185833?visit_id=638234068642611262-1927694666&p=InvalidSecondFactor&rd=1
/*
 Para generar claves de uso del correo, solo para app que no pueden autenticarse en dos pasos.
 $mail->Password="ixxgspyciavwhhvn";  
*/
// https://accounts.google.com/b/0/DisplayUnlockCaptcha
// El enlace anterior te envia a una pagina para que te perrmita entrar desde el dispositivo. Añade dispositivo.
$exito=TRUE;
require_once 'PHPMailerAutoload.php';  //PHPMailer-master/PHPMailerAutoload.php
$mail = new PHPMailer;
$mail->isSMTP();
try {           
    $mail->SMTPAuth=true;
    //$mail->SMTPSecure = 'tls';
    // $mail->Host="smtp.gmail.com"; //Este dato te lo deber�an dar en tu hosting, eso creo :p
    $mail->Host="tls://smtp.gmail.com:587";  // Utilizar este desde localhost y comentar la linea anterior y porterior
		// $mail->Port=587;                                      
		$mail->Username=""; //tambien este dato lo deberian de proporcionar los d tu hosting
		$mail->Password="";           
		$mail->SMTPDebug=0;  // valor 2 para activar muestra de mensaje del servidor errores y aceptaciones.
		//$mail->Helo = "gmail.com"; //Muy importante para que llegue a hotmail y otros                                                       
    //$mail->AddAddress("pdmwire@gmail.com", 'Jesus 3');  
	$mail->AddAddress($Rcorreo, $nombre);  
//    $mail->AddBCC("correoalquelellegarauna copia"); //opcional              
    $mail->IsHTML(true); //SI QUISIERAS ENVIAR CODIGO HTML, OPCIONAL
    $mail->Subject="Mensaje Enviado desde el sistema INV_DESYM";
    $mail->From=$vcorreo;
    $mail->FromName= $nombre;
    $mail->Timeout=15;
    $mail->Body= $contenido;   // "CUERPO DE TU MENSAJE";
    $mail->AltBody = "CUERPO DE TU MENSAJE SIN ETIQUETAS HTML envia"; //Opcional
    $exito = $mail->Send();
       if($exito) { echo "Mensaje Enviado...<br>"; header('location: ../home.php');
                  }
       else { echo "Mensaje No enviado, por favor Revice su correo demas datos. Si esta es su segundo mensaje de Error, Intente más tarde ó Contactenos por Nuestros Teléfonos, Gracias...<br>";
            }
                                } catch (phpmailerException $e){                echo "Servicio no disponible!";
                                } catch (Exception $e) {
                                    echo "Servicio no disponible!";
                                }
?>