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

<form action="ejer01cookie.php" method="GET">
    <label for="texto">Introduce el texto que deseas almacenar: </label>
    <input type="text" name="texto"></input>
    <input type="submit" value="Guardar">
</form>


</body>
</html>