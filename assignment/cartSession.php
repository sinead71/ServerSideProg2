<?php
/*this page is only needed to create the shopping cart session array.
if it were added to the products page or the cart page then the array 
would be created each time one of those pages were opened up. Meaning 
anything that was added to it eariler would be lost.
*/

if(isset($_POST['cart.php'])){
    $_SESSION['shoppingCart'] = array();
}

?>