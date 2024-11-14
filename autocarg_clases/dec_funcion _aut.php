<?function cargarClases($nombreClase) {
    include $nombreClase . '.php';  // Cargar la clase desde un archivo con el mismo nombre
}

spl_autoload_register('cargarClases');  // Registrar la función de autocarga

// PHP carga automáticamente las clases Coche y Persona cuando se instancien
$coche = new Coche("Toyota");
$persona = new Persona("Juan");

echo $coche->mostrarInfo();   // "Coche de marca: Toyota"
echo $persona->presentarse(); // "Hola, soy Juan"