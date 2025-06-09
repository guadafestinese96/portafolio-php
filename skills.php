<?php
require_once 'config.php'; 
$conexion = conectar_db($bd_config);
if($conexion){
    $skills_design = get_skills_by_type($conexion, 'design');
    $skills_fram_lib = get_skills_by_type($conexion, 'fram-lib');
    $skills_lang = get_skills_by_type($conexion, 'languajes');
    $skills_tools = get_skills_by_type($conexion, 'tools');
}


require 'views/skills.view.php';

?>
