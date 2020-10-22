<?php
session_start();
if(!isset($_SESSION["tipo_usuario"])){
    header("Location: ../index.php");
}else{
    if($_SESSION['tipo_usuario'] != 1){
        header('Location: ../index.php');
    }
}
?>