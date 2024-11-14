<?php
//declare(strict_types=1);
$sale = new sale(10.5, date("y-m-d"));
$concept = new concept("cerveza", 10);
$sale->addConcept(concept:$concept);
print_r($sale->concepts);

//echo gettype($sale->$total)
//echo $sale->createInvoice();

class Sale{
    public $total;
    public $date;
    public array $concepts;
    public static $count;

    public function __construct(float $total, string $date){
        $this->total = $total;
        $this->date = $date;
        self::$count++;
    }
    
    public function addConcept(concept $concept){
        $this->concepts[]= $concept;
    }
    public static function reset(){
        self::$count = 0;
    }
    public function __destruct() {
        //echo "se ha eliminado el objeto"
    }
    public function createInvoice():string{
        return"se crea la factura";
    }
}