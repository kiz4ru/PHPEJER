<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $num1 = 5; //$_GET['num1'];
    $num2 = 2;//$_GET['num2'];

    function esmayor($num1, $num2){
            if($num1 > $num2){
                return true;
            }
            return false;
           }
    
    if(esmayor($num1, $num2)) {
        echo "<p>$num1 es mayor que $num2</p>";
    }
    else {
        echo " <p>$num1 es menor que $num2</p>";
    }

    esmayor($num1,$num2)
    
    ?>

</body>
</html>