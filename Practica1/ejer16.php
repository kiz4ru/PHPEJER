<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer16</title>
</head>
<body>
    <form action="" method="get">
    Num1: <input type="text" name="" id="">
    Num2: <input type="text" name="" id="">
    </form>

    <?php
    $a = $_GET["primero"];
    $b = $_GET["segundo"];

    if($a != $b){
        $sumar = $a + $b;
        return echo "La suma es $sumar";
    }

    if($a == $b){
        $multi = $a*$b;
        echo "El resultado es $multi";
    }

    ?>
</body>
</html>