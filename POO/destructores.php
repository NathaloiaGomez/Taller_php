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
    publicfunction __destruct()
    {
        echo "se ha eliminado el objeto";
    }
    public function createInvoice(){
        echo "se crea la factura";
    }
}