<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios PHP</title>
</head>
<body>

<?php
if(isset($idioma)) {
?>
    <p>Idioma: <?= $idioma ?></p>
<?php
} else {
?>
    <p>No hay ningún idioma almacenado.</p>
<?php
}
?>

<form action="ejer03CookView.php" method="GET">
    <p>
        <label for="texto">Elige tu idioma </label>
        <select name="idioma">
            <option value="Euskera">Ingles</option>
            <option value="Castellano">Castellano</option>
    </select>
</p>
    <input type="submit" value="Guardar">
</form>

</body>
</html>