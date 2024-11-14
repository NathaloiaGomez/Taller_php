<?php

$sale = new sale(10.5, date("y-m-d"));
$sale = new sale(10.5, date("y-m-d"));
echo Sale::$count." ";
Sale::reset();
$sale = new Sale(10.5. date("y-m-d"));

echo Sale::$count;

//$sale->createInvoice();

class Sale{
    public $total;
    public $date;
    public static $count;

    public function __construct($total, $date){
        $this->total = $total;
        $this->date = $date;
        self::$count++;
    }
    
    public static function reset(){
        self::$count = 0;
    }
}