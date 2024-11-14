<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "Nombre recibido: " . $_POST['nombre'];
}
?>