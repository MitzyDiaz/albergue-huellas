
<?php
	
require "conex.php";

	AceptarSolicitud($_GET['id_seguimiento']);

	function AceptarSolicitud($id_seguimiento)


	{
		$conexion=conexion();
		$sql="UPDATE seguimiento set estatus_seg = 'Rehacer' where id_seguimiento = '$id_seguimiento'";
		$result = mysqli_query($conexion,$sql);
	
	}

?>
<script type="text/javascript">

	 alert("Solicitud rechazada exitosamente");
	window.location.href='seguimiento.php';


</script>