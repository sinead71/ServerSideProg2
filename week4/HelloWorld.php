<?php 

class HelloWorld {
    public $prop1 = "I'm a class property!";
    
    public $message = "hello World!";
    public function __construct(){
        echo $this->message . '!<br/>';    
    }
    
    public function __destruct(){
        echo 'Goodbye World<br/>';
    }
    
    public function setProperty($newval){
        $this->prop1 = $newval;
    }
        
    public function getProperty(){
        return $this->prop1 . "<br/>";
    }
}

?>