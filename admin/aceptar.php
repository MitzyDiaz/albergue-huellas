
<?php
	
require "conex.php";

	AceptarSolicitud($_GET['id_form']);

	function AceptarSolicitud($id_form)


	{
		$conexion=conexion();
		$sql="UPDATE form set estatus = 'Aceptado' where id_form = '$id_form'";
		$result = mysqli_query($conexion,$sql);
	
	}

?>
  <script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script src="librerias/alertifyjs/alertify.js"></script>
   <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
<script type="text/javascript">

	 alert("Solicitud aceptada exitosamente");
	window.location.href='aadopta.php';


</script>