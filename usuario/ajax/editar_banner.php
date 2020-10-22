<?php

require 'usuariolog.php';


if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["observacion"])){
	/* Llamar la Cadena de Conexion*/ 
	include ("../../conexion.php");
	// escaping, additionally removing everything that could be (html/javascript-) code
     $observacion = mysqli_real_escape_string($con,(strip_tags($_POST['observacion'], ENT_QUOTES)));

	 $id_banner=intval($_POST['id_banner']);
	 $sql="UPDATE seguimiento SET observacion='$observacion' WHERE id_seguimiento='$id_banner'";
	 $query = mysqli_query($con,$sql);
	// if user has been added successfully
	if ($query) {
		$messages[] = "Datos  han sido actualizados satisfactoriamente.";
	} else {
		$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
	}
	
	if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
		}
		if (isset($messages)){
			
			?>
			<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>¡Bien hecho!</strong>
					<?php
						foreach ($messages as $message) {
								echo $message;
							}
						?>
			</div>
			<?php
		}
		
}
?>