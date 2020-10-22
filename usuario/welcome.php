<?php
	session_start();
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';

	if(!isset($_SESSION['id_tipo'])){
	header ('Location: uindex.php');
}else{

  if($_SESSION['id_tipo'] != 1){
    header('Location: nosotros.php');
  }

}
$idUsuario = $_SESSION['id_usuario'];
	
	$sql = "SELECT id, nombre FROM usuarios WHERE id = '$idUsuario'";
	$result = $mysqli->query($sql);
	
	$row = $result->fetch_assoc();
	  
		
?>

 
<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		
	</head>
    <header>
    <?php include("header.php");?>
    </header>
	<body>
		<div class="container">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                    <a class="nav-link active" href='welcome.php'>Inicio</a>
                    </li>

                    <?php if($_SESSION['tipo_usuario']==1) { ?>
                    <li class="nav-item">
                    <a class="nav-link" href='#'>Administrar Usuarios</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                    <a class="nav-link" href='logout.php'>Cerrar Sesi&oacute;n</a>
                    </li>
                </ul>
						
		    <div class="jumbotron">
				<h2><?php echo 'Bienvenid@ '.utf8_decode($row['nombre']); ?></h1>
				<br />
			</div>
		</div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="js/bootstrap.min.js"></script>
	</body>
    <footer>
        <?php include("footer.php")?>
    </footer>
</html>