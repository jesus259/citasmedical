	<!--insertar nuevo registro-->
	<? include ("controlador/conexion.php"); ?>
<div class="modal fade" id="crearmodal" tabindex="-1" role="dialog" aria-labelledby="crearmodal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content center" style="margin-left:10%;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear registro de especialista</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Complete el formulario</div>
				<form method="POST" name="add">
					<div class="col-sm-6"><!--editar css para este formulario-->
						<label>Documento de Identidad</label>
						<input class="form-control form-control-user" type="text" name="cedula" placeholder="Ejemplo: 4563214"></input>
						<label>Nombre</label>
						<input class="form-control form-control-user" type="text" name="nombre" placeholder="Ejemplo: Pedro"></input></div>
					<div class="form-group col-sm-6">
						<label>Apellido</label>
						<input class="form-control form-control-user" type="text" name="apellido" placeholder="Ejemplo: Rodriguez"></input>
						<label>Especialidad a dedicar</label>
							<select class="form-control form-p" name="consulta" id="consulta">
							<option value="0">Seleccionar:</option>
							<?
							$sql = $conn->query("SELECT * FROM especialidades");
							While($val = mysqli_fetch_array($sql)){
								echo '<option value='.$val["esp"].'>'.$val["esp"].'</option>';
							}
							?>
							</select>
					</div>
						<div class="col-sm-6">
						<label>Horario de disponibilidad</label>
						<input class="form-control form-control-user" type="text" name="horarios" placeholder="Ejemplo: 7:00/14:00"></input>
						<label>Dias de atencion</label>
						<input class="form-control form-control-user" type="text" name="dias" placeholder="Ejemplo: lunes-martes-..."></input>
						</div>
					
				
				<div class="modal-footer">
                    <input class="btn btn-primary" type="submit" value="Cargar datos" name="crear"></input>
						<a class="btn btn-secondary" data-dismiss="modal">cancelar</a>
                </div>
				</form>
            </div>
        </div>
    </div>
	<?
		if(!empty($_POST['crear'])){
			if(empty ($_POST["cedula"]) or empty ($_POST["nombre"])or empty ($_POST["apellido"])or empty ($_POST["esp"])or empty ($_POST["horarios"])or empty ($_POST["dias"])){
				echo "<h5 id='alert'><br>campos vacios</h5>";
		}else{
			$cedula = $_POST['cedula'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$esp = $_POST['esp'];
			$horario = $_POST['horarios'];
			$dias = $_POST['dias'];
			$sql =$conn->query("INSERT INTO doctores(cedula,nombre,apellido,atiende,horario,dias) VALUES ('$cedula','$nombre','$apellido','$esp','$horario','$dias')");
			
			}
		}
	?>