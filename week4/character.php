<?php 

class character {
    
    public $name = "";
    public $gender = "";
    public $weight = "";
    public $coins = "";
    
    public function __construct(){
        echo "Characters, start your engines<br/>";
    }
    
    public function setName($newval){
        $this->name = $newval;       
    }
    
    public function getName(){
        return $this->name ." is ready. <br/>";
    }   
    
    public function setGender($newval){
        $this->gender = $newval;
    }
    
    public function getGender(){
        return "Gender: ". $this->gender ."<br>";
    }
    
    public function setWeight($newval){
        $this->weight = $newval;
    }
    
    public function getWeight(){
        return "Weight: ". $this->weight ."<br>";
    }
    
    public function setCoins($newval){
        $this->coins = $newval;
    }
    
    public function getCoins(){
        return "Coins: ". $this->coins ."<br>";
    }
}

?>