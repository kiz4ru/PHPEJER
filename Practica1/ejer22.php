<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$paises = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];
function buscarPais($paises,$pais)
{
     $posicion = -1;
    for($i=0;$i < count($paises);$i++)
    {
        
        if($paises[$i] == $pais) $posicion = $i + 1;
    }

    return $posicion;
}

 

echo buscarPais($paises,"Filipinas");
?>
</body>
</html>