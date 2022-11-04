<?php
$user = "root";
$pass ="";
$server = "localhost"
$db = "conectar";

$conx = mysql_connect($server, $user, $pass, ) or die ("Error al conectar a la base de datos");

function conectar(){
    mysql_select_db($db,$conx)

    return $conx;
}

?>