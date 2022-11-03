<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $agendas = [
    [
        "nombre" => "Gorka",
        "apellido" => "Uriarte Sainz de la fuente",
        "telefono" => "631456789",
        "email" => "gorka.uriarte@ikasle.egibide.org"
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

    for($i=0;$i < count($agendas);$i++){
        $table .= "<tr><td>" . $agendas[$i]['nombre'] ."</td><td>". $agendas[$i]['apellido'] ."</td><td>".$agendas[$i]['telefono']."</td><td>".$agendas[$i]['email']."</td></tr>";
}
echo $table . "</table>";

?>
</body>
</html>