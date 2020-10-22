<?php
    require 'funcs/conexion.php';
    require 'funcs/funcs.php';

    session_start(); //Iniciar una nueva sesión o reanudar la existente
	
	if(isset($_SESSION["tipo_usuario"])){ //En caso de existir la sesión redireccionamos
		header("Location: welcome.php");
	}

    $errors = array();
    if(!empty($_POST))
	{
		$usuario = $mysqli->real_escape_string($_POST['usuario']);
		$password = $mysqli->real_escape_string($_POST['password']);
		
		if(isNullLogin($usuario, $password))
		{
			$errors[] = "Debe llenar todos los campos";
		}
		
		$errors[] = login($usuario, $password);	
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
    <title>Login</title>
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
                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">Iniciar Sesi&oacute;n</div>
                            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="recupera.php">¿Se te olvid&oacute; tu contraseña?</a></div>
                        </div>     
                        
                        <div style="padding-top:30px" class="panel-body" >
                            
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                            <form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
                                
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="usuario o email" required>                                        
                                </div>
                                
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="password" required>
                                </div>
                                
                                <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-12 controls">
                                        <button id="btn-login" type="submit" class="btn btn-success">Iniciar Sesi&oacute;n</a>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            No tiene una cuenta! <a href="registro.php">Registrate aquí</a>
                                        </div>
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

        <footer>
        <?php include("footer.php")?>
</footer>
</html>