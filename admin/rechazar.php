
<?php
	
require "conex.php";

	AceptarSolicitud($_GET['id_form']);

	function AceptarSolicitud($id_form)


	{
		$conexion=conexion();
		$sql="UPDATE form set estatus = 'Rechazado' where id_form = '$id_form'";
		$result = mysqli_query($conexion,$sql);
	
	}

?>
<script type="text/javascript">

	 alert("Solicitud rechazada exitosamente");
	window.location.href='aadopta.php';


</script>