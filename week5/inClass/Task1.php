<?php 
define ('TAX_13_5', .135);

class myClass{
    const TAX_23 = .23; 
    public $total = 0;
  
    //multiplying the lower tax rate by $total which can be changed later on
    public function lowerRate($num){
        $this->total = $num * TAX_13_5;
        return $this->total;
    }
    
    public function higherRate($num){
        //the higher tax rate was created inside of the class so you need self:: 
        //to use it other wise an error will occur.
        $this->total = $num * self::TAX_23;
        return $this->total;       
    }
}

$obj = new myClass();
//total number has been changed to 100 which gets multipied to the laower tax rate
echo $obj->lowerRate(100);

echo('<br>');
echo $obj->higherRate(100);

?>