<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $listado = ["Unai","Damian","Yeray","Ameer"];
    $posicion = 0;
    while($posicion < count $listado ){
        echo "<li>" . $listado[$posicion] . "</li>";
        $posicion++;
    }
    ?>
</body>
</html>