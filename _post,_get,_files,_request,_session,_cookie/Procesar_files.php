<?php
if ($_FILES['archivo']['error'] == 0) {
    move_uploaded_file($_FILES['archivo']['tmp_name'], "uploads/" . $_FILES['archivo']['name']);
    echo "Archivo subido con éxito.";
}
?>