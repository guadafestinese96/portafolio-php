<?php 
require_once 'config.php';

$conexion = conectar_db($bd_config);
if($conexion){
    $projects = get_projects($conexion);
}

require 'views/proyectos.view.php';

?>