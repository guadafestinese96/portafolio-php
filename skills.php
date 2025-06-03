<?php
require 'config.php'; 

$carpeta = 'images/skills/';
$images = glob($carpeta . '*.{jpg,png}', GLOB_BRACE);

require 'views/skills.view.php';

?>
