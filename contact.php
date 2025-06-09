<?php
require_once 'config.php';

$errores = '';
$enviado = '';


if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    if (empty($nombre)) {
        $errores.= "Por favor ingresa tu nombre <br/>";
    }else{
        $nombre = limpiarDatos($nombre);
    }
    
    if(empty($email)) {
        $errores .= "Por favor ingresa tu email <br/>";
    }else{
        $email = limpiarDatos($email);
    }
    
    if(empty($mensaje)) {
        $errores .= "Por favor ingresa un mensaje <br/>";
    }else{
        $mensaje = limpiarDatos($mensaje);
    }

    if(!$errores){
        $enviar_a = 'widistoreok@gmail.com';
        $asunto = 'Correo desde mi portafolio';
        $mensaje_enviado = "Nombre: $nombre \n Email: $email \n Mensaje: $mensaje";

        mail($enviar_a, $asunto, $mensaje);
        $enviado = 'true';
    }
}




require 'views/contact.view.php';
