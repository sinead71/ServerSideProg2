<?php 
function calculate($num1, $num2, $operator){
    if($operator == '+'){
        return addNums($num1, $num2);
    }
    
    if($operator == '-'){
        return subtractNums($num1, $num2);
    } 
    
     if($operator == '/'){
        return divideNums($num1, $num2);
    }  
    
    if($operator == '*'){
        return multiplyNums($num1, $num2);
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

?>
