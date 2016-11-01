<?php 
include ('compute.php');

$result = new Compute();
echo $result->calculateResult(2, 2, '+');
echo ('<br>');
echo $result->calculateResult(10, 2, '-');
echo ('<br>');
echo $result->calculateResult(5, 6, '*');
echo ('<br>');
echo $result->calculateResult(8, 2, '/');


?>