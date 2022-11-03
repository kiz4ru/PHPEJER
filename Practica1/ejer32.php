<?php

$estudiantes = [
    "gorka" => [
        "nombre" => "Gorka Uriarte",
        "nota1" => 6,
        "nota2" => 5
    ],
    "Damina" => [
        "nombre" => "Damian romero",
        "nota1" => 5.5,
        "nota2" => 4
    ],
    "Alex" => [
        "nombre" => "Alex gomez",
        "nota1" => 2.5,
        "nota2" => 4
    ],
    "Luis" => [
        "nombre" => "Luis marco",
        "nota1" => 2.5,
        "nota2" => 8
    ],
];


generarTable($estudiantes);

function calcularNotaMedia($nota1,$nota2)
{
    return ($nota1+$nota2) / 2;
}

function generarTd($valor,$numberType=false)
{
    $class = null;
    if($numberType)
    {
        $class = $valor < 5 ? "fail" : null;
    }
    return "<td class=". $class. ">" . $valor . "</td>";
}

function generarTable($estudiantes)
{
    $table = "<table><tr><th>Nombre</th><th>Nota 1</th><th>Nota 2</th><th>Nota Media</th><tr>";

    foreach($estudiantes as $estudiante)
    {
        $table .= "<tr>" . generarTd($estudiante['nombre']) . generarTd($estudiante['nota1'],true) . generarTd($estudiante['nota2'],true) . generarTd(calcularNotaMedia($estudiante['nota1'],$estudiante['nota2']),true) . "</tr>";

    }
    echo $table . "</table>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            text-align:center;
        }
    .fail{
        border:5px solid black;
        background-color:red;
        color:white;
    }
    </style>
</head>
<body>
    
</body>
</html>