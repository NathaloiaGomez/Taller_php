<?php

$sale = new sale(10.5, date("y-m-d"));

$sale->createInvoice();


class Sale{
    public $total;
    public $date;

    public function __construct{($total, $date){
        $this->total = $total;
        $this->date = $date;
    }
    public function createInvoice(){
        echo "se crea la factura";
    }
}
//asi podemos crear objetos que tienen propiedades y comportamiento
//Ahora crearemos un constructor
