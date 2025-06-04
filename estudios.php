<?php
require_once 'config.php';

$carpeta = 'images/certificados/';
$images = glob($carpeta . '*.{jpg,png}', GLOB_BRACE);

require 'views/estudios.view.php';
?>