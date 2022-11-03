<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
<?php
if(isset($usuario)) {
?>
<p>Usuario almacenado: <?= $usuario ?></p>
<?php
} else {
?>
<p>No hay ningún usuario almacenado</p>
<?php
}
?>

<form action="ejercicio01.php" method="GET">
    <label for="texto">Introduce el texto que deseas almacenar: </label>
    <input type="text" name="texto"></input>
    <input type="submit" value="Guardar">
</form>
<a href="ejer02cok.php?accion=borrarCookie">BORRAR COOKIE</a>

</body>
</html>