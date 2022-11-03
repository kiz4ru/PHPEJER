<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$estudiantes = ["Ane","Markel","Nora","Danel","Amaia","izaro"];

foreach($estudiantes as $estudiante)
{
    echo "<li>" . $estudiante . "</li>";
}


?>
</body>
</html>