class Persona {
public $nombre;
public $edad;

// Constructor
public function __construct($nombre, $edad) {
$this->nombre = $nombre;
$this->edad = $edad;
}

public function saludar() {
return "Hola, soy " . $this->nombre . " y tengo " . $this->edad . " años.";
}
}

// Crear una instancia de la clase Persona con parámetros para el constructor
$persona = new Persona("Juan", 30);
echo $persona->saludar();  // "Hola, soy Juan y tengo 30 años."
