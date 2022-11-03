<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejer01view.php" method="post">
    <fieldset>
        <legend>Conversor de temperatura</legend>
        <p>Escriu una temperatura en Celsius / Fahrenheit</p>
        <strong>Temperatura:</strong>
            <input type="number" name="temp" size="7" maxlength="7">
                <select name="unitat">
                    <option value="c" selected="selected">Celsius</option>
                    <option value="f">Fahrenheit</option>
                </select>
            <p><input type="submit" value="Convertir">
            <input type="reset" value="Borrar" name="Reset"></p>
    </fieldset>
</form>
</body>
</html>