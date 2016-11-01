<?php 
class Compute {      
    function calculateResult($num1, $num2, $operator){
        if($operator == '+'){
            return $this->addNums($num1, $num2);
        }
        
        if($operator == '-'){
            return $this->subtractNums($num1, $num2);
        } 
        
        if($operator == '/'){
            return $this->divideNums($num1, $num2);
        }  
        
        if($operator == '*'){
            return $this->multiplyNums($num1, $num2);
        }    
    } 
    
      
    function addNums($first, $second){
        $sum = $first + $second;
        return $sum;
    }

    function subtractNums($first, $second){
        $sum = $first - $second;
        return $sum;
    }

    function divideNums($first, $second){
        $sum = $first / $second;
        return $sum;
    }

    function multiplyNums($first, $second){
        $sum = $first * $second;
        return $sum;
    }  
}


?>