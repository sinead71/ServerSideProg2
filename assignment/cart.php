<link rel="stylesheet" type="text/css" href="style.css"/>
<body class="cart"></body>
<?php 
session_start();
include("database.php");


/*loop through session array
where the id in the array matches the id in the database 
echo the products in the array to be seen
*/
foreach ($_SESSION['shoppingCart'] as $prodId){
    $stmt = $conn->prepare("SELECT * FROM products WHERE prod_id = :prodId");
    $stmt->bindParam(":prodId", $prodId);
    $stmt->execute();
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo("<div class='cartList'>");
            echo("<h2>". $row['title']." &euro;" .$row['price']  ."</h2>");
            echo("<p>". $row['description'] ."</p>");
            echo ("<img src='". $row['image_url'] ."' alt='a keyboard'></a>");           
            echo("<form method='POST' id='delete'");
                echo("<input type='hidden' value='".$row['prod_id']."' name='cartProdId'>");
                echo("<button id='deleteProd' name='deleteProd'>Delete</button>");
            echo("</form>");
        echo("</div>");
    }
}


if(isset($_POST['delete'])){
    $deletingProduct = $_POST['cartProdId'];
    foreach($_SESSION['shoppingCart'] as $prodId => $val){
        if($val == $deletingProduct){
            unset($_SESSION['shoppingCart'][''$prodId]);
        }   
    }
}


?>