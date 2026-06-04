<? include ("conexion.php"); ?>
<div class="col-lg-6 mb-4">

	<!-- Project Card Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">tablero de control</h6>
		</div>
		<div class="card-body">
			<h4 class="small font-weight-bold">Pediatria <span
					class="float-right">
					<?
						$sql = ("SELECT consulta FROM ccitas WHERE consulta='pediatra'");
						$resultado = $conn->query($sql);
						$pd = $resultado->num_rows;
						echo "N°: ".$pd;
					?>
					</span></h4>
					<?
						$sql = "SELECT especialidad FROM atendidas WHERE especialidad ='pediatra'";
						$r1 = $conn->query($sql);
						$r2 = $r1->num_rows;
						if ($pd !=0){
						$res1= $r2 / $pd;
						$p= $res1*100;}else{$p=0;}
						$p = ceil($p);
					?>
			<div class="progress mb-4">
				<div class="progress-bar bg-danger" role="progressbar" style="width: <?echo $p;?>%"
					aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><?echo $p."%"?></div>
			</div><!--FIN-->
			<h4 class="small font-weight-bold">Odontologia <span
					class="float-right"><?
						$sql = ("SELECT consulta FROM ccitas WHERE consulta='odontologia'");
						$resultado = $conn->query($sql);
						$od = $resultado->num_rows;
						echo "N°: ".$od;
					?></span></h4>
					<?
						$sql = "SELECT especialidad FROM atendidas WHERE especialidad ='odontologia'";
						$r1 = $conn->query($sql);
						$r2 = $r1->num_rows;
						if ($od !=0){
						$res1= $r2/$od;
						$o= $res1*100;}else{$o=0;}
						$o = ceil($o);
					?>
			<div class="progress mb-4">
				<div class="progress-bar bg-warning" role="progressbar" style="width: <?echo $o;?>%"
					aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><?echo $o."%"?></div>
			</div><!--FIN-->
			<h4 class="small font-weight-bold">Ginecologia <span class="float-right">
					<?
						$sql = ("SELECT consulta FROM ccitas WHERE consulta='ginecologia'");
						$resultado = $conn->query($sql);
						$gn = $resultado->num_rows;
						echo "N°: ".$gn;
					?></span></h4>
					<?
						$sql = "SELECT especialidad FROM atendidas WHERE especialidad ='ginecologia'";
						$r1 = $conn->query($sql);
						$r2 = $r1->num_rows;
						if ($gn !=0){
						$res1= $r2 / $gn;
						$g= $res1*100;}else{$g=0;}
						$g = ceil($g);
					?>
			<div class="progress mb-4">
				<div class="progress-bar" role="progressbar" style="width: <?echo $g;?>%"
					aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><?echo $g."%"?></div>
			</div><!--FIN-->
			<h4 class="small font-weight-bold">Rayos x <span
					class="float-right"><?
						$sql = ("SELECT consulta FROM ccitas WHERE consulta='rayos x'");
						$resultado = $conn->query($sql);
						$rx = $resultado->num_rows;
						echo "N°: ".$rx;
					?></span></h4>
					<?
						$sql = "SELECT especialidad FROM atendidas WHERE especialidad ='rayos x'";
						$r1 = $conn->query($sql);
						$r2 = $r1->num_rows;
						if ($rx !=0){
						$res1= $r2 / $rx;
						$r= $res1*100;}else{$r=0;}
						$r = ceil($r);
						
					?>
			<div class="progress mb-4">
				<div class="progress-bar bg-info" role="progressbar" style="width: <?echo $r;?>%"
					aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><?echo $r."%"?></div>
			</div><!--FIN-->
			<h4 class="small font-weight-bold">Medicina General<span
					class="float-right"><?
						$sql = ("SELECT consulta FROM ccitas WHERE consulta='medicina-general'");
						$resultado = $conn->query($sql);
						$mg = $resultado->num_rows;
						echo "N°: ".$mg;
					?></span></h4>
					<?
						$sql = "SELECT especialidad FROM atendidas WHERE especialidad ='medicina-general'";
						$r1 = $conn->query($sql);
						$r2 = $r1->num_rows;
						if ($mg !=0){
						$res1= $r2 / $mg;
						$mg= $res1*100;}else{$mg=0;}
						$mg = ceil($mg);
					?>
			<div class="progress mb-4">
				<div class="progress-bar" role="progressbar" style="width: <?echo $mg;?>%"
					aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><?echo $mg."%";?></div>
			</div><!--FIN-->
			<h4 class="small font-weight-bold">Fisiatria <span
					class="float-right"><?
						$sql = ("SELECT consulta FROM ccitas WHERE consulta='fisiatria'");
						$resultado = $conn->query($sql);
						$fs = $resultado->num_rows;
						echo "N°: ".$fs;
					?></span></h4>
					<?
						$sql = "SELECT especialidad FROM atendidas WHERE especialidad ='fisiatria'";
						$r1 = $conn->query($sql);
						$r2 = $r1->num_rows;
						if ($fs !=0){
						$res1= $r2 / $fs;
						$f= $res1*100;}else{$f=0;}
						$f = ceil($f);
					?>
			<div class="progress mb-4">
				<div class="progress-bar" role="progressbar" style="width: <?echo $f;?>%"
					aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><?echo $f."%"?></div>
			</div><!--FIN-->
			<h4 class="small font-weight-bold">Psicologia <span
					class="float-right"><?
						$sql = ("SELECT consulta FROM ccitas WHERE consulta='psicologia'");
						$resultado = $conn->query($sql);
						$ps = $resultado->num_rows;
						echo "N°: ".$ps;
					?></span></h4>
					<?
						$sql = "SELECT especialidad FROM atendidas WHERE especialidad ='psicologia'";
						$r1 = $conn->query($sql);
						$r2 = $r1->num_rows;
						if ($ps !=0){
						$res1= $r2 / $ps;
						$sp= $res1*100;}else{$sp=0;}
						$sp = ceil($sp);
					?>
			<div class="progress mb-4">
				<div class="progress-bar" role="progressbar" style="width: <?echo $sp;?>%"
					aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><?echo $sp."%"?></div>
			</div><!--FIN-->
			<h4 class="small font-weight-bold">Cardiologia <span
					class="float-right"><?
						$sql = ("SELECT consulta FROM ccitas WHERE consulta='cardiologia'");
						$resultado = $conn->query($sql);
						$cr = $resultado->num_rows;
						echo "N°: ".$cr;
					?></span></h4>
					<?
						$sql = "SELECT especialidad FROM atendidas WHERE especialidad ='cardiologia'";
						$r1 = $conn->query($sql);
						$r2 = $r1->num_rows;
						if ($cr !=0){
						$res1= $r2 / $cr;
						$c= $res1*100;}else{$c=0;}
						$c = ceil($c);
					?>
			<div class="progress mb-4">
				<div class="progress-bar" role="progressbar" style="width: <?echo $c;?>%"
					aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><?echo $c."%"?></div>
			</div><!--FIN-->
			<h4 class="small font-weight-bold">Laboratorio <span
					class="float-right"><?
						$sql = ("SELECT consulta FROM ccitas WHERE consulta='laboratorios'");
						$resultado = $conn->query($sql);
						$lb = $resultado->num_rows;
						echo "N°: ".$lb;
					?></span></h4>
					<?
						$r1 = $conn->query($sql);
						$r2 = $r1->num_rows;
						if ($lb !=0){
						$res1= $r2 / $lb;
						$l= $res1*100;}else{$l=0;}
						$l = ceil($l);
					?>
			<div class="progress mb-4">
				<div class="progress-bar" role="progressbar" style="width: <?echo $l;?>%"
					aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><?echo $l."%"?></div>
			</div><!--FIN-->
			<h4 class="small font-weight-bold">Ecografia <span
					class="float-right"><?
						$sql = ("SELECT consulta FROM ccitas WHERE consulta='ecografia'");
						$resultado = $conn->query($sql);
						$ec = $resultado->num_rows;
						echo "N°: ".$ec;
					?></span></h4>
					<?
						$sql = "SELECT especialidad FROM atendidas WHERE especialidad ='ecografia'";
						$r1 = $conn->query($sql);
						$r2 = $r1->num_rows;
						if ($ec !=0){
						$res1= $r2 / $ec;
						$e= $res1*100;}else{$e=0;}
						$e = ceil($e);
					?>
			<div class="progress mb-4">
				<div class="progress-bar" role="progressbar" style="width: <?echo $e;?>%"
					aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><?echo $e."%"?></div>
			</div><!--FIN-->
			<h4 class="small font-weight-bold">Nutricionista <span
					class="float-right"><?
						$sql = ("SELECT consulta FROM ccitas WHERE consulta='nutricionista'");
						$resultado = $conn->query($sql);
						$n = $resultado->num_rows;
						echo "N°: ".$n;
					?></span></h4>
					<?
						$sql = "SELECT especialidad FROM atendidas WHERE especialidad ='nutricionista'";
						$r1 = $conn->query($sql);
						$r2 = $r1->num_rows;
						if ($ec !=0){
						$res1= $r2 / $ec;
						$n= $res1*100;}else{$n=0;}
						$n = ceil($n);
					?>
			<div class="progress mb-4">
				<div class="progress-bar" role="progressbar" style="width: <?echo $n;?>%"
					aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><?echo $n."%"?></div>
			</div>
			<!--<h4 class="small font-weight-bold">Account Setup <span
					class="float-right">Complete!</span></h4>
			<div class="progress">
				<div class="progress-bar bg-success" role="progressbar" style="width: 100%"
					aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
			</div>-->
		</div>
	</div>
</div>