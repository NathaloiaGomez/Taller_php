<?php
function validarUsuario($usuario, $password) {
    // Simulamos una validación (en un caso real sería una consulta a la base de datos)
    return $usuario === "admin" && $password === "1234";
}
?>