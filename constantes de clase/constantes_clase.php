class Coche {
const NUMERO_RUEDAS = 4;  // Constante de clase

public $marca;

public function __construct($marca) {
$this->marca = $marca;
}

public function mostrarInfo() {
return "El coche " . $this->marca . " tiene " . self::NUMERO_RUEDAS . " ruedas.";
}
}

$coche = new Coche("Toyota");
echo $coche->mostrarInfo();  // "El coche Toyota tiene 4 ruedas."
