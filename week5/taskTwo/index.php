<?php 
session_start();

    include 'header.php';
    include 'sidebar.php';
    include 'content.php';
    include 'footer.php';
    
    $poducts = array(
        array("Phone", 350),
        array("Keyboard", 20),
        array("Headphones", 50)
    );
    
   
?>

<link rel="stylesheet" type="text/css" href="styles.php">



<!-- local host link: http://localhost/SSP2/week5/taskTwo/index.php -->