<?php
function connectar(){
    try {
        $servidor = "localhost";
        $usuario = "prueba";
        $contra = "prueba123";
        $bd = "conectar";
        $dbh = new PDO ("mysql:servidor=$servidor;db=$db", $usuario, $contra);
        return $dbh;

    } catch (PDOException $e) {
        echo $e->getMessage();
        return null;

        
    }



    
}



?>