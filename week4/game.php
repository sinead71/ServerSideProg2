<?php 
spl_autoload_register ('myAutoloader');
function myAutoloader($classExample){
    $path ='./inc/';
    include $path.$classExample.'.php';
}

include ('character.php');

$obj = new Character();
$obj->setName("Mario");
echo $obj->getName();
$obj->setGender("Male");
echo $obj->GetGender();
$obj->setWeight("1Kilo");
echo $obj->GetWeight();
$obj->setCoins("200");
echo $obj->GetCoins();

$obj->setName("Bowser");
echo $obj->getName();


?>