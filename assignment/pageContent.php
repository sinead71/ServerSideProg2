<?php 
include("products.php");

    echo ("<div class='products'>");
        //echo ("<h2>Keyboard</h2>");
        echo ("<img src='https://codekeyboards.com/galleria/9.jpg' alt='a keyboard'></a>");
        echo ("<form method='POST' action='cart.php'>");
            echo ("<button id='addBtn'>Add To Cart</button>");
        echo ("</form>");
    echo ("</div>");
?>