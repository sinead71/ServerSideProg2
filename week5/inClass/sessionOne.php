<?php 
session_start();

$_SESSION["mySession"]= "hello session.php";
echo $_SESSION["mySession"];

?>

<a href="sessionTwo.php">Go to session two</a>