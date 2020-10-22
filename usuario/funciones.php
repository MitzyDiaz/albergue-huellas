<?php
function conexiondb(){
    $conn = mysql_connect('localhost', 'root', '');
    $bd_conn = mysql_select_db('huellas', $conn);
    return $bd_conn;
}

?>