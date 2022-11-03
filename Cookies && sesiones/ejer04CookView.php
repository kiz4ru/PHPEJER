<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer04cookie</title>
</head>
<body>
<ul>
<?php
    if(count($personas) > 0) {
    foreach ($personas as $persona) {
?>
    <li><?= $persona ?></li>
<?php
    }
}
else {
?>
    <p>No hay asistentes</p>
<?php
}
?>
</ul>
    <h5>Añadir asistente</h5>
<form action="ejer04Cook.php" method="get">
    <input type="text" name="persona">
    <input type="hidden" name="accion" value="insertar">
    <input type="submit" value="Añadir">
</form>
<br>
    <a href="ejer04Cook.php">Vaciar lista</a>
</body>
</html>