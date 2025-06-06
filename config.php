<?php
define('RUTA', 'https://guadalupefestinese.infinityfreeapp.com');


$bd_config = array(
    'database' => 'if0_39174617_portfolio',
    'user' => 'if0_39174617',
    'pass' => 's84obY8tKSIa'
);

function conectar_db($bd_config){
    try {
        $conexion = new PDO('mysql:host=sql113.infinityfree.com;dbname=' . $bd_config['database'] . ';charset=utf8mb4', $bd_config['user'], $bd_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function get_skills_by_type($conexion, $type){
    $statement = $conexion->prepare("SELECT * FROM skills WHERE type = :type");
    $statement->execute([':type' => $type]);
    return $statement->fetchAll();
}

function get_studies($conexion){
    $statement = $conexion->prepare("SELECT * FROM studies");
    $statement->execute();
    return $statement->fetchAll();
}

function get_projects($conexion){
    $statement = $conexion->prepare("SELECT * FROM projects");
    $statement->execute();
    return $statement->fetchAll();
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = strip_tags($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos, ENT_QUOTES, 'UTF-8');

    return $datos;
}
