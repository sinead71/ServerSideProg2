<?php 
    //session_start();
    include("header.php");
    include ("database.php");
    
    $stmt = $conn->prepare("SELECT * FROM products");
    $stmt->execute();
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        echo("<div class='products'>");
            echo("<h2>". $row['title']." &euro;" .$row['price']  ."</h2>");
            echo("<p>". $row['description'] ."</p>");
            echo ("<img src='". $row['image_url'] ."' alt='a keyboard'></a>");
            echo ("<form method='POST' action='products.php'>");
                echo ("<button id='addBtn'>Add To Cart</button>");
            echo ("</form>");           
        echo("</div>");  
        
                
        $prod_id = $row['prod_id'];
        
    }          
    
?>
        
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>        
    </head>   
    <body id="productsPage">      
    </body>
</html>
