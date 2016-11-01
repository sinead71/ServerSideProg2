<?php 
session_start();
$_SESSION["shoppingSession"]= "Start Shopping";
$_SESSION["shoppingSession"];

class products {
    public $name = "";
    public $description = "";
    public $image = "";
    public $price = "";
    public $id = "";
    
    public function __construct($name, $description, $image, $price, $id){
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
        $this->id = $id;
        
    }
}

?>

<html>
    <body>
        <div id="header">
            <h1>Products.com</h1>
            <nav>
                <a href="index.php">Home</a>|
                <a href="productTwo.php">Gadgets</a>|
                <a href="productThree.php">Clothes</a>|
                <a href="cart.php">Shopping Cart</a>
            </nav> 
            <br>
            <br>
            <div>
                <h3>Product No.1</h3>
                <button>Add to cart</button>
            </div>         
        </div>
    </body>    
</html>
