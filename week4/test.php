<?php 

include ('HelloWorld.php');

$obj = new HelloWorld();

echo $obj->setProperty("I changed prop1");
echo $obj->getProperty(); //calls the class on HelloWorld file



?>