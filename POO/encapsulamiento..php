<?php
declare(strict_types=1);

$sale = new sale(10.5, date("y-m-d"));
$onlineSale = new $onlineSale(15,date("y-a-d"),"Tarjeta");
echo $onlineSale ->createInvoice();
     echo $onlineSale->showInfo();
//$concept = new concept("cerveza", 10);
//$sale->addConcept(concept:$concept);

//echo gettype($sale->$total)
//echo $sale->createInvoice();

class Sale{
    public $total;
    public $date;
    public array $concepts;
    public static $count;public function __construct(float $total, string $date){
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
        // $this->createInvoice();segun el ejemplo aquisi se podria  usar
        //echo "se ha eliminado el objeto"
    }
    public static function reset(){
        self::$count = 0;
       // $this->createInvoice();como se esta invocando fuera de ella solo se lo puede en un metodo que no sea static
    }
    //Private: solo puede ser visto por la misma clase
    //PROTECTED se usa para que solamente puedan ver los elementos la clase padre y quien hereda.
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
    }

//Private: solo puede ser visto por la misma clase

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