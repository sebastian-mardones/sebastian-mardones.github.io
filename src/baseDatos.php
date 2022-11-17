<?php
    //host
    $host = 'cs.ilab.cl';
    //usuario
    $usu = '2_BD_38';
    //password
    $pwd = 'c10w6ST5XdmD4Sdh';
    //conexion a bbdd
    $bbdd = '2_BD_38';
    $bd = new mysqli();
    $bd->connect($host, $usu, $pwd, $bbdd);
    if($bd->connect_errno !==0) {
        die("error $bd->connect_errno");
    } else {
        
    }
?>
