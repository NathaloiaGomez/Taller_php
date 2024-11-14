// Interfaz que obliga a implementar ciertos métodos
interface AnimalInterface {
public function hacerSonido();
}

// Clase abstracta que usa la interfaz
abstract class Animal implements AnimalInterface {
public $nombre;

public function __construct($nombre) {
$this->nombre = $nombre;
}

// Método abstracto
abstract public function dormir();
}

// Clase que hereda de la clase abstracta y cumple con la interfaz
class Perro extends Animal {
public function hacerSonido() {
return "Guau!";
}

public function dormir() {
return $this->nombre . " está durmiendo.";
}
}

$perro = new Perro("Rex");
echo $perro->hacerSonido();  // "Guau!"
echo $perro->dormir();       // "Rex está durmiendo."
