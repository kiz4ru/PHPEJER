
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1>Calculadora</h1>
		<form action="ejer02.php" method="post">
			Ingresa tu primer numero:<br />
			<input type="text" name="valor1"><br />
            <br>
			Ingresa tu segundo valor:<br />
			<input type="text" name="valor2"><br>
            <br>
            <select name="operador">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicacionn</option>
				<option value="division">Division</option>
			</select><br />
            <br>
			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
		</form>
<?php

	if(){
		
	}
if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){

	if ($_POST["operador"] == "suma") {
		
		print ('<br /><a href="ejer02Resultado.php">Resultado</a>');
		
	} elseif ($_POST["operador"] == "resta") {
		print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
		print ('<br /><a href="ejer02view.php">Volver</a>');
		
	} elseif ($_POST["operador"] == "multiplicacion") {
		print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
		print ('<br /><a href="ejer02view.php">Volver</a>');
		
	} elseif ($_POST["operador"] == "division") {
		print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
		print ('<br /><a href="ejer02view.php">Volver</a>');
	}
} else {
	print("Ingresa algun valor");
	print ('<br /><a href="ejer02view.php">Volver</a>');
}
?>
</body>
</html>
