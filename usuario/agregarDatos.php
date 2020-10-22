<?php
	require_once "conex.php";
	$conexion=conexion();
	$f_s=$_POST['foto_seg'];
	$o=$_POST['observacion'];


	$sql="INSERT INTO seguimiento (foto_seg,observacion) values ('$f_s','$o')";

echo $result=mysqli_query($conexion,$sql);
 ?>