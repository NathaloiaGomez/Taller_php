class Coche {
public $marca;

public function __construct($marca) {
$this->marca = $marca;
}

public function mostrarInfo() {
return "Coche de marca: " . $this->marca;
}
}
