<?php 
session_start();
//it will read the name of the session from sessionOne.php because it remembers it.
echo $_SESSION["mySession"];

?>