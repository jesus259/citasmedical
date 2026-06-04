<?php

require_once  "controlador/conexion.php";

if($_POST) {

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE usuario ='$usuario'";
    //echo $sql; confirmacion de conexion al sql
    $resultado = $conn->query($sql);
    $num = $resultado->num_rows;

    if($num>0){
        $row = $resultado->fetch_assoc();
        $password_bd = $row['password'];
        $password_c = sha1($password);
		//echo "bd.:".$password_bd;
		//echo "<br> sha1.:".$password_c;
		//exit();
		if($password_bd == $password_c){
			session_start();
			$_SESSION['nombre'] = $row['nombre'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['asignacion'] = $row['asignacion'];
			$_SESSION['rol'] = $row['rol'];
			
			//echo $_SESSION['nombre'];
			//exit();
			header("location: index.php");
		}else {
			//echo "la contraseña no coincide";
			echo '<script language="javascript">'; 
			echo 'alert("la contraseña no coincide")'; 
			echo '</script>';
			//exit();
		}
	}else {
		//echo "no existe el usuario";
		 echo '<script language="javascript">'; 
		 echo 'alert("no existe el usuario")'; 
		 echo '</script>';
		 //exit();
		//header("location:javascript://history.go(-1)");
	}
	/*echo $password_bd;
	echo $password_c;
	exit();*/
	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Citas-IPASME  LOGIN</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"><img src="img/icono.png" alt=""></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                                    </div>
                                                        <!--formulario-->
                                    <form autocomplete="off" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="users">
                                        <div class="form-group">
                                           <input type="text" class="form-control form-control-user"
                                                id="users" name="usuario" aria-describedby="user"
                                                placeholder="ingrese su usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="contraseña">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordar datos
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        
                                    </form>    
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">!Si olvido sus datos contacte al administrador!</a>
                                    
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>