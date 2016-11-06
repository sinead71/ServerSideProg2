<?php 
session_start();

//this needs to be outside the $_POST addtocart or it 
//will create a new aaray each time the button is clicked
$_SESSION['shoppingCart'] = array();

var_dump ($_SESSION['shoppingCart']);




?>