<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $ciudad = ['Paris', 'Berlin', 'Amsterdam', 'Praga'];
    
   
    function getValor($array, $posicion){
        //if($posicion > count($array) -1) return "error";
        return $array[$posicion];
    }

    function setValor(&$array,$posicion, $valor){
        //if($posicion > count($arr) -1) return "posicion $posicion indicado no existe";
        $array[$posicion] = $valor;
        return $arr;
    }
    
    setValor($ciudad,4,"Praga");
    echo getValor($ciudad, 4);
?>
    
</body>
</html>