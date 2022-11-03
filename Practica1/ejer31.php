<?php

$numeros = [];

function rellenarArray(&$numeros,$size=20)
{
    for($i=0;$i<$size;$i++) {array_push($numeros,random_int(1,999));}
}

function valorMax($numeros){
    $max = $numeros[0];

    foreach($numeros as $numero)
    {
        if($numero > $max)
        {
            $max = $numero;
        }
    }

    return $max;
}

function valorMin($numeros){
    $min = $numeros[0];
    foreach($numeros as $numero)
    {
        if($numero < $min)
        {
            $min = $numero;
        }
    }

    return $min;
}

rellenarArray($numeros);
$msg = "El contenido del array es ";
foreach($numeros as $numero)
{
    $msg .= $numero . "-";
}
echo $msg;
echo "<br>";
echo "El valor max es " . valorMax($numeros);
echo "<br>";
echo "El valor min es " .  valorMin($numeros);

?>