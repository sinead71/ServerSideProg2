<?php 
session_start();
include("header.php");
include ("database.php");
require_once("cartSession.php");

$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    echo("<div class='products'>");
        echo("<h2>". $row['title']." &euro;" .$row['price']  ."</h2>");
        echo("<p>". $row['description'] ."</p>");
        echo ("<img src='". $row['image_url'] ."' alt='a keyboard'></a>");
        echo ("<form method='POST' action='products.php'>");
            echo("<input type='hidden' value='".$row['prod_id']."' name='addToCart'>");
            echo ("<button id='addBtn' name='addBtn'>Add To Cart</button>");
        echo ("</form>");           
    echo("</div>");  
    
} 


//adds products to the array
if(isset($_POST['addBtn'])){
    $productId = $_POST['addToCart'];
    array_push($_SESSION['shoppingCart'], $productId);             
}  
    
 
  
if(isset($_POST['logOutBtn'])){
    unset($_SESSION['shoppingCart']);
    header('Location:index.html');
}  
          
?>
 
 
        
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>        
    </head>   
    <body id="productsPage">      
    </body>
</html>
