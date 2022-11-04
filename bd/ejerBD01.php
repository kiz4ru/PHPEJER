<?php
function connectar(){
    try {
        $servidor = "localhost";
        $usuario = "prueba";
        $contra = "prueba123";
        $bd = "ejer01";
        $dbh = new PDO ("mysql:servidor=$servidor;db=$db", $usuario, $contra);
        return $dbh;

    } catch (PDOException $e) {
        echo $e->getMessage();
        return null;

        
    }
    function close($dbh){
        $dbh = null
    }
    function select(){
        $dbh = connect();

        $stmt = $dhb->prepare("SELECT nombre, apellido, email FROM ejer01");
        $stmt -> execute();

        while($row = $stmt->fetch()){
            echo "<ul>"
            echo "<li>" . $row["nombre"] . " " 
            echo "</ul>"
        }
        close($dbh);
    }

    function hacerAccion($){}
    
}



?>