<!-- Menu -->
<nav class="menu printN" id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="height-640px">

            <!-- Sidebar - Brand -->
            
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">System Citas <sup>ipasme</sup></div>
                </a>
                
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Panel Principal</span></a>
                </li>
                
                <!-- Divider -->
                <hr class="sidebar-divider">
                
                <!-- Heading -->
                <div class="sidebar-heading">
                    Principal
                </div>
                
                <!-- Nav Item - Pages Collapse Menu -->
                
				<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#citas"
                        aria-expanded="true" aria-controls="citas">
					<i class="fas fa-fw fa-table"></i>
					<span>Citas</span></a>
					<div id="citas" class="collapse" aria-labelledby="citas"
					data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="citas.php">Record de citas</a>
                        <a class="collapse-item" href="hoy.php">Agenda de HOY</a>
					</div>
					</div>
				</li>
					
                <div class="btn">
                    <a class="btn btn-primary " type="button" name="crearc" id="crearc" 
					href="cita.php">Crear Cita</a>
                </div>
				<!--<div class="botonc btn btn-primary">
                    <a class=" btn btn-primary" type="button" name="crearc" id="crearc" 
					href="atender.php">Atender Cita</a>
                </div>-->
                
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!--
                 DIVISION DE PRIMERA SECCION DEL MENU Y OPCIONES DE OPERADOR DE CITAS
                 --USUARIO ADMINISTRATIVO-->
				 <!-- Heading -->
                <?
				$admin = $_SESSION["rol"];
			if($admin == 1){
				echo '<div class="sidebar-heading">
                    Administrativo
                </div>
                
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Control</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Acceso Administrativo:</h6>
                            <a class="collapse-item" href="control.php">Registro de doctores</a>
                            <a class="collapse-item" href="periodos.php">Generador de reporte</a>
                            <div class="collapse-divider"></div>
                        </div>
                    </div>
                </li>
                
                <!-- Nav Item - estadistica--> 
                
				<li class="nav-item">
                    <a class="nav-link" href="graficas.php">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Estadisticas</span></a>
                </li>';
			}else{}
				?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        </nav>
		<!-- Menu -->