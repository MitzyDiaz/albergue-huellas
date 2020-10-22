<?php
    require 'funcs/conexion.php';
    require 'funcs/funcs.php';

    if(isset($_GET["id"]) AND isset($_GET['val']))
	{	
		$idUsuario = $_GET['id'];
		$token = $_GET['val'];
		
		$mensaje = validaIdToken($idUsuario, $token);
	}
?>
<html>
	<head>
		<title>Registro</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" >		
	</head>
	
	<body>
		<div class="container">
			<div class="jumbotron">
				
				<h1><?php echo $mensaje; ?></h1>
				
				<br />
				<p><a class="btn btn-primary btn-lg" href="login.php" role="button">Iniciar Sesi&oacute;n</a></p>
			</div>
		</div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
	</body>
</html>
