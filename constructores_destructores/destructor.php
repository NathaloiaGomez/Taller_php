class Archivo {
public $nombreArchivo;
private $archivo;

// Constructor
public function __construct($nombre) {
$this->nombreArchivo = $nombre;
$this->archivo = fopen($nombre, "w"); // Abrir un archivo para escritura
echo "Archivo abierto: " . $nombre . "<br>";
}

// Destructor
public function __destruct() {
fclose($this->archivo); // Cerrar el archivo al destruir el objeto
echo "Archivo cerrado: " . $this->nombreArchivo . "<br>";
}
}

// Crear una instancia de la clase Archivo
$miArchivo = new Archivo("mi_archivo.txt");

// El destructor se llama automáticamente cuando el objeto $miArchivo es destruido
// Esto ocurrirá al final del script o cuando ya no haya más referencias al objeto
