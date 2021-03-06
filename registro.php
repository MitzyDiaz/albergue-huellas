<?php
	require 'funcs/conexion.php';
    require 'funcs/funcs.php';

    $errors = array();

    if(!empty($_POST))
    {
        $nombre = $mysqli->real_escape_string($_POST['nombre']);
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $password = $mysqli->real_escape_string($_POST['password']);
        $con_password = $mysqli->real_escape_string($_POST['con_password']);
        $email = $mysqli->real_escape_string($_POST['email']);
       $captcha = $mysqli->real_escape_string($_POST['g-recaptcha-response']);

        $activo=0; #
        $tipo_usuario=2; #
        $secret='6Lc3CrUUAAAAAOKpnsEAtLi-kjZlK1OHcI8w8BDq'; #colocar clave secreta del captcha

      if(!$captcha){
            $errors[]="Por favor verifica el CAPTCHA";
        }
        if(isNull($nombre,$usuario,$password,$con_password,$email))
        {
            $errors[]="Debe llenar todos los campos";
		}
		if(!isEmail($email)){
			$errors[]="Dirección de correo inválida";
		}
		if(!validaPassword($password,$con_password)){
			$errors[]="Las contraseñas no coinciden";
		}
		if (usuarioExiste($usuario)) {
			$errors[]="El nombre de usuario $usuario ya existe";
		}
		if (emailExiste($email)) {
			$errors[]="El correo electronico $email ya existe";
		}
		if (count($errors)== 0) {
			$response= file_get_contents(
				"https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");

			$arr=json_decode($response,TRUE);

			if ($arr['success']) {

				$pass_hash= hashPassword($password);
				$token= generateToken();

				$registro= registraUsuario($usuario,$pass_hash,$nombre,$email,$activo,$token,$tipo_usuario);
		
				if($registro>0){
					$url = 'https://'.$_SERVER["SERVER_NAME"].'/adopcion_huellas/activar.php?id='.$registro.'&val='.$token;
					#$url = 'http://'.$_SERVER["SERVER_NAME"].'/adopcion_huellas/activar.php?id='.$registro.'&val='.$token;
					
					$asunto = 'Activar Cuenta - Sistema de Usuarios';
					$cuerpo = "Estimado $nombre: <br /><br />Para continuar con el proceso de registro, es indispensable de click en la siguiente liga <a href='$url'>Activar Cuenta</a>";

					if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
						
						echo "Para terminar el proceso de registro siga las instrucciones que le hemos enviado la direccion de correo electronico: $email";
						echo "<br><a href='login.php' >Iniciar Sesion</a>";
						exit;
						}
						else 
						{
							$errors[] = "Error al enviar Email";
						}
				}
				else
				{
					$errors["Error al Registrar Usuario"];
				}
			
			}
			else
			{
				$errors[]='Error al comprobar Captcha';
			}
		}

	} 


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    	<link rel="stylesheet" href="fontawesome/css/solid.min.css">
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<title>Registro</title>
    </head>
    
	<header id="header">
        <nav class="menu">
            <div class="logo">
                <a href="index.php"> <img src="img/logo-min.png" alt=""></a>  
                <a href="#" class="btn-menu" id="btn-menu"><i class="icono fas fa-bars"></i></a>
            </div>
            <div class="enlaces" id="enlaces">
                <a href="index.php"><i class="fas fa-home"></i>Inicio</a>
                <a href="nosotros.php"><i class="fas fa-dog"></i>Nosotros</a>
                <a href="galeriaBase.php"><i class="fas fa-images"></i>Galeria</a>
                <a href="adopta.php"><i class="fas fa-bone"></i>Adopta una Huella</a>
                <a href="contacto.php"><i class="fas fa-envelope"></i>Contacto</a>
            </div>
        </nav>
	</header>
	
	<body>
		<div class="container">
			<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">Reg&iacute;strate</div>
						<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="login.php">Iniciar Sesi&oacute;n</a></div>
					</div>  
					
					<div class="panel-body" >
						
						<form id="signupform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
							
							<div class="form-group">
								<label for="nombre" class="col-md-3 control-label">Nombre:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" required >
								</div>
							</div>
							
							<div class="form-group">
								<label for="usuario" class="col-md-3 control-label">Usuario</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="con_password" class="col-md-3 control-label">Confirmar Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="con_password" placeholder="Confirmar Password" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="email" class="col-md-3 control-label">Email</label>
								<div class="col-md-9">
									<input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="captcha" class="col-md-3 control-label"></label>
								<div class="g-recaptcha col-md-9" data-sitekey="6Lc3CrUUAAAAAMxaX-qdxkJ6zHxuDBhUw2r4VEvb"></div>
							</div>
							
							<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
								</div>
							</div>
						</form>
						<?php echo resultBlock($errors); ?>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>	