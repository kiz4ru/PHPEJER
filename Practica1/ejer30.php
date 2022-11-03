<?php

$agendas = [
    [
        "nombre" => "Gorka",
        "nota" => 6.8
    ],
    [
        "nombre" => "Unai",
        "nota" => 8
    ],
    [
        "nombre" => "Iñigo",
        "nota" => 7
    ],
];


foreach($agendas as $agenda)
{
    echo "<li> La nota media de " . $agenda['nombre'] . " es " .$agenda['nota'] .".</li>";
}