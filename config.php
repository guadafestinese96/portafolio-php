<?php
define('RUTA', 'http://localhost/portafolio-php');

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = strip_tags($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos, ENT_QUOTES, 'UTF-8');
    
    return $datos;
}


?>