<?php
$agendas = [
    [
        "nombre" => "ameer",
        "apellido" => "Uriarte Sainz de la fuente",
        "telefono" => "631456789",
        "email" => "ameer.hamza@ikasle.egibide.org"
    ],
    [
        "nombre" => "Unai",
        "apellido" => "Abad Diez",
        "telefono" => "631456789",
        "email" => "unai.abad@ikasle.egibide.org"
    ],
    [
        "nombre" => "Iñigo",
        "apellido" => "Bruk Gueverra",
        "telefono" => "631456789",
        "email" => "iñigo.bruk@ikasle.egibide.org"
    ],
];


$table = "<table><tr><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Email</th></tr>";

foreach($agendas as $agenda)
{
    $table .= "<tr><td>" . $agenda['nombre'] ."</td><td>". $agenda['apellido'] ."</td><td>".$agenda['telefono']."</td><td>".$agenda['email']."</td></tr>";
}
echo $table . "</table>";