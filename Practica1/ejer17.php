<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $usuarios = [
        "Ameer" => [
            "apellido" => "Hamza",
            "email" => "hamza@gmail.com",
            "password" => "soyboss"
        ],

        "Damian" => [
            "apellido" => "romero",
            "email" => "romero@gmail.com",
            "password" => "soyboss"
        ],

        "Iñigo" => [
            "apellido" => "Bruk",
            "email" => "iñigo.bruk@ikasle.egibide.org",
            "password" => "soyboss"
        ],
];
        $usuario = $_GET["usuario"];
        $password = $_GET["password"];

        echo auth($usuarios,$usuario,$password);

            function auth($users,$u,$t){
                if(array_key_exists($u,$users)){
                return $users[$u]["password"] == $t ? "Usuario encontrado" : "mala combinacion de la contraseña y nombre del usuario";
            }else
                echo "Usuario no existe en base de datos";
            }

?>

</body>
</html>