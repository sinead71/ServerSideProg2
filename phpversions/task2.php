<?php 
//linking the logical code that has the functions to calculate the numbers to this
// page so you don't have to see it.
include('logicalCode.php');

echo calculate(3, 7, '+');
echo ('<br>');
echo calculate(5, 2, '-');
echo ('<br>');
echo calculate(20, 2, '/');
echo ('<br>');
echo calculate(5, 5, '*');
?>