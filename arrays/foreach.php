<?php

$names = ["franciasco", "Roberto","Juan"];

$beer = [
    "name" => "Erdinger",
    "alcohol" => 8.5,
    "country" => "Alemania"
];

foreach($beer as $k => $v){
    echo $k."". $v.";";
}
//imprime todos los valores de sus variables y claves nombre:erdinger.alcohol:8.5:Country: Alemania: