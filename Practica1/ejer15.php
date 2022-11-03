<?php

    $usuarios = [
        "Ameer" => [
            "apellido" => "Hamza",
            "email" => "hamza@gmail.com"
        ],
        "Damian" => [
            "apellido" => "romero",
            "email" => "romero@gmail.com"
        ],
        "Iñigo" => [
            "apellido" => "Bruk",
            "email" => "iñigo.bruk@ikasle.egibide.org"
        ],
    ];

    function getDatos($base,$nombre,$attributo){
    return $base[$nombre][$attributo];
}
    echo getDatos($usuarios,"Ameer","email");

?>