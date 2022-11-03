<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$limite = (int) $_GET["limit"];

function sumItAll($limit)
{
    $suma = 0;
    for($i=0;$i <= $limit;$i++)
    {
        if($i % 2 == 0)
        {
            $suma += $i;
        }
    }
    return $suma;
}

echo sumItAll($limite);
?>
</body>
</html>