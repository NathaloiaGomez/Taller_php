<?php
//funciones
hi("Lauris");
hi("Erika");
hi("Cristian");

function hi($name){
    echo "Hola $name";
}   

echo add(10,20);
function add($a, $b){
    $result = $a + $b;
    return $result;
}
//Aqui podemos dar a cada variable el tipo de dato deben cooincidir pq si no generara un error 
echo add(10,20);
function add(int $a, int $b):int{
    $result = $a + $b;
    return $result;
} 
//en las funciones php no distingue entre mayusculas y minusculas
