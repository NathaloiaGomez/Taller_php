<?php
if (isset($_COOKIE['usuario'])) {
    echo "Cookie 'usuario' tiene el valor: " . $_COOKIE['usuario'];
} else {
    echo "No se ha encontrado la cookie.";
}
?>
