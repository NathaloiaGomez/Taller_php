class Persona {
public $nombre;

public function __construct($nombre) {
$this->nombre = $nombre;
}

public function presentarse() {
return "Hola, soy " . $this->nombre;
}
}