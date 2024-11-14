<?php
// Incluir archivos de configuración y funciones
include 'config/config.php';
include_once 'config/database.php';
include_once 'funciones/funciones.php';

echo "<h1>Bienvenido a $site_name</h1>";

$conexion = conectarDB();
echo "<p>Conexión exitosa a la base de datos.</p>";
?>

