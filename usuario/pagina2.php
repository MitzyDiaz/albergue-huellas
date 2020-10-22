<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "huellas"; // nombre base de datos
$conex=mysqli_connect($server,$user,$pass,$bd);
 if (!$conex) {
  die("Error: ".mysqli_connect_error());
 }

$observacion=$_REQUEST['observacion'];
$imagen=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta= 'imagenes';
$ruta=$ruta."/".$nombreimg;
move_uploaded_file($archivo,$ruta);

$query = "insert into seguimiento (observacion,foto_seg) values('','".$observacion."','".$ruta."')";
/*$query = "insert into publicaciones VALUES('".$id."','".$nombre."','".$publicar."','".$fecha_publicacion."','".$ruta."')";*/

if (mysqli_query($conex, $query)) {
 echo "Insertado Correctamente";
}
else{
 echo "Error: ".mysqli_error($conex);
}

mysqli_close($conex);
 
?>