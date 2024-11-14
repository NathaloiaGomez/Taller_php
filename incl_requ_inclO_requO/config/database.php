<?php
// Incluir configuración de la base de datos
include_once 'config.php';

function conectarDB() {
    global $host, $db_name, $user, $password;
    try {
        $dsn = "mysql:host=$host;dbname=$db_name";
        $pdo = new PDO($dsn, $user, $password);
        return $pdo;
    } catch (PDOException $e) {
        die("Error al conectar a la base de datos: " . $e->getMessage());
    }
}
?>