<?php
require_once 'config.php'; 

$carpeta = "images/skills/";
$images_design = glob($carpeta . 'design-layout/' . '*.{jpg,png}', GLOB_BRACE);
$images_frameworks  = glob($carpeta . 'frameworks-libraries/' . '*.{jpg,png}', GLOB_BRACE);
$images_programming  = glob($carpeta . 'programming-languages/' . '*.{jpg,png}', GLOB_BRACE);
$images_tools  = glob($carpeta . 'tools-technologies/' . '*.{jpg,png}', GLOB_BRACE);

require 'views/skills.view.php';

?>
