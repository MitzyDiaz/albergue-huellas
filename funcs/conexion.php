<?php
	
	$mysqli=new mysqli("localhost","root","admin","huellas");
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		
	}
?>
