<?php

$servidor = "localhost";
$usuario = "prueba";
$contra = "prueba123";
$bd = "conectar";

$conexion = @mysql_connect($servidor, $usuario, $contrasenha); 

if (!$conexion) {
    die('<strong>No pudo conectarse:</strong> ' . mysql_error());
}else {
    echo "Conectado ala base de datos";
}

mysql_select_db($BD, $conexion) or die(mysql_error($conexion)); 

?>