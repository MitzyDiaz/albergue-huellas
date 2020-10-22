<!DOCTYPE html>
<html>
<head>
	<title>Generar Pdf</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="content_eform">
	<img src="img/check-circle.svg" class="avatar" alt="Avatar Image">
	<div>

	
		
		<h1 class="h1_eform">mitzy: su registro ha sido enviado satisfactoriamente.</h1>
		<p class="p_eform">Da click en el enlace para descargar tu comprobante.</p>
	</div>

	<form action="comprobante.php" target="_blank" method="POST">	
		<input type="submit" name="create_pdf" value="Generar Comprobante">
	</form>
			<!--BOTON PARA REGRESAR-->
				<div class="botoncito">
				<input type="submit" onclick="history.back()" name="Regresar" value="Regresar">
				</div>
	</div>
</body>
</html>
