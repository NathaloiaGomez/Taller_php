<?php
$beers = [ 
    "caroluz",
    "london porter",
    "Delirium Red",
    "corona"
];
$beers2 = [ 
    "caroluz 2",
    "london porter 2",
    "Delirium Red 2",
    "corona 2"
];
$beerMixed = array_merge ($beers, $beers2);//funcion para combinar dos arrays
print_r($beerMixed);

array_pop($beers);//nos sirve para eliminar el ultimo elemento del array
array_push($beers, "karmeliten");//Tambien nos sirve para agregar otro elemento al array
$beer [] = "1";//asi agregamos un nuevo elemento 

echo count($beers);
$beer = array_pop($beers);
print_r($beers);
echo $beer;//imprimimos lo que guardamos en esta variable
if(in_array("corona", $beers)){ 
    echo "existe"; 
}