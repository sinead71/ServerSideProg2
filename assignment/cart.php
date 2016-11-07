<?php 
session_start();
include("database.php");

//this needs to be outside the $_POST addtocart or it 
//will create a new aaray each time the button is clicked



//loop through array session
//where the id in the array matches the id in the database 
//echo the same stuff in pproducts
foreach ($_SESSION['shoppingCart'] as $prodId){
    $stmt = $conn->prepare("SELECT * FROM products WHERE prod_id = :prodId");
    $stmt->bindParam(":prodId", $prodId);
    $stmt->execute();
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo("<div class='products'>");
            echo("<h2>". $row['title']." &euro;" .$row['price']  ."</h2>");
            echo("<p>". $row['description'] ."</p>");
            echo ("<img src='". $row['image_url'] ."' alt='a keyboard'></a>");           
        echo("</div>");
    }
}




?>