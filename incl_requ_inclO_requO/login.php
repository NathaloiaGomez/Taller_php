<?php
// Requiere la inclusión de archivos de configuración y funciones
require 'config/config.php';
require_once 'funciones/funciones.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if (validarUsuario($usuario, $password)) {
        echo "<p>¡Bienvenido, $usuario!</p>";
    } else {
        echo "<p>Credenciales incorrectas.</p>";
    }
}
?>

<form method="POST">
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" id="usuario" required>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
    <button type="submit">Iniciar sesión</button>
</form>