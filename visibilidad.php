class Animal {
public $nombre;          // Público: se puede acceder desde fuera
private $edad;           // Privado: solo accesible dentro de la clase
protected $especie;     // Protegido: accesible dentro de la clase y las clases hijas

public function __construct($nombre, $edad, $especie) {
$this->nombre = $nombre;
$this->edad = $edad;
$this->especie = $especie;
}

public function obtenerInfo() {
return "Soy un " . $this->especie . " llamado " . $this->nombre . " y tengo " . $this->edad . " años.";
}

private function obtenerEdad() {
return $this->edad;
}
}

class Perro extends Animal {
public $raza;

public function __construct($nombre, $edad, $especie, $raza) {
parent::__construct($nombre, $edad, $especie);  // Llamamos al constructor de la clase padre
$this->raza = $raza;
}

public function obtenerInfoCompleta() {
// Accedemos a los atributos protegidos de la clase padre
return $this->obtenerInfo() . " Soy un " . $this->raza . ".";
}
}

$miPerro = new Perro("Rex", 5, "Perro", "Pastor Alemán");

echo $miPerro->nombre;   // "Rex" (público)
echo $miPerro->obtenerInfo();   // "Soy un Perro llamado Rex y tengo 5 años."
echo $miPerro->obtenerInfoCompleta();  // "Soy un Perro llamado Rex y tengo 5 años. Soy un Pastor Alemán."
