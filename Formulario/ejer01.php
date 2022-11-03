<?php

    $option = $_POST[];
    $temp = $_POST[]; 

if ($temp == "") {
    echo "<p>No has escrit cap temperatura</p><p><input type='button' value='Enrera' onClick='history.go(-1);'></p>";
    }elseif ($txtc == "") {
//Passar de celcius a Fahrenheit
    $f = $c * 1.8 + 32;
    echo "Temp: ".$f."<p><input type='submit' value='Convertir' onClick='history.go(-1);'></p>";
} else {
//Passar de Fahrenheit a celsius
    $c = $f / 1.8 - 32;
    echo "Temp: ".$c."<p><input type='submit' value='Convertir' onClick='history.go(-1);'></p>";
}

?>