<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer19</title>
</head>
<body>
    <?php

    $limite = (int) $_GET["limit"];

    function sumItAll($limit)
    {
        $suma = 0;
        for($i=0;$i <= $limit;$i++)
        {
            $suma += $i;
        }
        return $suma;
    }
    
    echo sumItAll($limite);
    
    ?>
</body>
</html>