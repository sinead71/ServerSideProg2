<?php 
define ('CONST_NAME', 'This is the value of the constant');
echo CONST_NAME;

class MyClass{
    public static $my_static ='static var';
    public static $staticOne = 'hello world';
    
    const VAT_RATE = 1.23;
    
    public function __construct(){
        echo self::VAT_RATE;
    }

}
echo ('<br>');
echo MyClass::$my_static;

echo ('<br>');
echo MyClass::$staticOne;
$vat = new MyClass();


echo ('<br>');
$obj = new MyClass();

echo ('<br>');
echo MyClass::VAT_RATE;




?>