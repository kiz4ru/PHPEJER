<?php
$coches = ["Audi","Mercedes","BMW","Fiat","Nissan"];

function mostraInfo($coches)
{
   foreach($coches as $coche)
   {
        echo "<li>" . $coche . "</li>";
   }
       
}

mostraInfo($coches);