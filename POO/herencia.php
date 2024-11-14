<?php
declare(strict_types=1);

$sale = new sale(10.5, date("y-m-d"));
$onlineSale = new $onlineSale(15,date("y-a-d"),"Tarjeta");
echo $onlineSale ->createInvoice();
     echo $onlineSale->showInfo();
//$concept = new concept("cerveza", 10);
//$sale->addConcept(concept:$concept);




//print_r($sale->concepts);

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
        $this ->concepts = [];
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
class OnlineSale extends Sale{
    public $paymentMethod;
        public function __construct(float $total,string $date){
            str_contains($paymenmethod){
            parent::__construct($total, $date);
            $this->paymentMethod = $paymenmethod
        }
        public function showInfo((): string{
         return "la venta tiene un monto de: $this->total";
        }
        {

        }
    }



    public function __construct(float $total, string $date,
    string $paymentMethod){
        parent::__construct($total, $date );
        $this->paymentMethod = $paymentMethod;
    }
    public function showInfo(): string{
        return "la venta tiene un monto de: $total "
    }
}


class concept {
    public string $description;
    public float $amount;
    public function __construct(string $description, int|float|null $amount){
        $this->description = $description;
        $this->amount = $amount;
    }
}