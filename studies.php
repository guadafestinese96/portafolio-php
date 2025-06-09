<?php
require_once 'config.php';

$conexion = conectar_db($bd_config);
$studies = get_studies($conexion);

require 'views/studies.view.php';
?>