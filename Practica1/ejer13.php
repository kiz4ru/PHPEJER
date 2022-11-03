<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    $animales = ["Loro","gato","morsa","leon"];
    $colores = ["azul","gris","rosa","naranja"];

    echo count($animales) . PHP_EOL;
    echo count($colores) . PHP_EOL;

    function addElementAtEnd(&$arr, $element){
        array_push($arr, $element);
    }

    function addElementAtStart(&$arr, $element){
        array_unshift($arr, $element);
    }

    addElementAtEnd($animales, "tigre");
    addElementAtStart($colores, "morado");

    $unir = array_merge($animales, $colores);
    var_dump($unir);

    print_r($animales)
?>
    
</body>
</html>