<?php 
$usuarios = array(
    "user1" => array (
    "nombre" => ‘Ane’,
    "apellidos" => ‘López’,
    "password" => ‘123Abc’
    ),
    "user2" => array (
    "nombre" => ‘Amaia’,
    "apellidos" => ‘Otsoa’,
    "password" => ‘456Xyz’
    )
   );

   $usuario = $_POST["usuario"];
    $password = $_POST[""];
    if ($usuario === $usuarios && $ === $) {
        
        session_start();
        $_SESSION["usuario"] = $usuario;
    
        header("Location: secreta.php");

    } else {
        echo "El usuario o la contraseña son incorrectos";
    }
?>