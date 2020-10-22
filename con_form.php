<?php

include('funcs/conexion.php');
    
$id=$_POST['id'];
$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$ap=$_POST['ap'];
$am=$_POST['am'];
$edad=$_POST['edad'];
$tel=$_POST['tel'];
$contacto_co=$_POST['contacto_co'];
$parent=$_POST['parent'];
$dir=$_POST['dir'];
$hijos=$_POST['hijos'];
$hijos_cant=$_POST['hijos_cant'];
$mascotas=$_POST['mascotas'];
$mascota_esp=$_POST['mascota_esp'];
$mascota_cant=$_POST['mascota_cant'];
$url_ine=$_POST['url_ine'];
$razon=$_POST['razon'];
$term_cond=$_POST['term_cond'];

$sql="INSERT INTO form (id,id_usuario,nombre,ap,am,edad,tel,contacto_co,parent,dir,hijos,hijos_cant,mascotas,mascota_esp,mascota_cant,url_ine,razon,term_cond) VALUES (
                               '$id',
                               '$id_usuario',
                               '$nombre',
                               '$ap',
                               '$am',
                               '$edad',
                               '$tel',
                               '$contacto_co',
                               '$parent',
                               '$dir',
                               '$hijos',
                               '$hijos_cant',
                               '$mascotas',
                               '$mascota_esp',
                               '$mascota_cant',
                               '$url_ine',
                               '$razon',
                               '$term_cond')";
//$ejecutar="mysql_query($sql)";
$ejecutar = $mysqli -> query($sql);
    if(!$ejecutar){
        echo"hubo un error";
        echo "$sql";
    }
    else{
        echo"Datos guardados correctamente <a href='index.php'>volver</a>";
        echo "$sql";
    }
?>