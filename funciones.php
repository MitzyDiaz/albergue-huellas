<?php

function conexiondb(){
    $conn = mysql_connect('localhost', 'root', 'root');
    $bd_conn = mysql_select_db('huellas', $conn);
    return $bd_conn;
}


function conectar_pdf(){
    $conne=null;
    $host= 'localhost';
    $db= 'huellas';
    $user='root';
    $pwd='';
    try{
        $conne= new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
    }
    catch(PDOException $e){
        echo '<p>No se puede conectar';
        exit;
    }
    return $conne;
}

?>