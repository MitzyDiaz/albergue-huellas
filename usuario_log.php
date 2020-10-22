<?php
session_start();
if(!isset($_SESSION["tipo_usuario"])){
    header("Location: login.php");
}else{
    if($_SESSION['tipo_usuario'] != 2){
        header('Location: usuario/index.php');
    }
}
?>