<?php
//echo phpversion();

$my_other_arr = array('red', 'yellow', 'green', 'blue');
echo $my_other_arr[2];
echo print_r($my_other_arr);
echo count($my_other_arr);
foreach($my_other_arr as $value){
    echo $value;
}
echo("<br>");

$pets = array(
    0 => array(
        'name' => 'jenney',
        'species' => 'horse'
    ),
    1 => array(
        'name' => 'jazz',
        'species' => 'dog'
    ),  
);

foreach($pets as $sub_arr){
    echo $sub_arr['name']. " - ".
    $sub_arr['species']."<br/>";
}

global $forth;
$forth = 8;

function add_nums($first, $second, $third=0){
    global $forth;
    $forth=1;
    echo $first + $second + $third + $forth;
};
add_nums(3, 7, 10);
add_nums(3, 7);
//add_nums(3);


echo $forth;

$number1 = 7;
function doubleNums($number1){
    $number1 *=2;
    return $number1;  
}
$doubled = doubleNums($number1);
echo $doubled;

?>