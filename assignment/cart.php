<link rel="stylesheet" type="text/css" href="style.css"/>
<body class="cart">
    <div id="header">
        <h1 id="pagetitle">Your Cart</h1>
        <form method="POST" action="products.php">
            <button id="prodBtn">Products</button>
        </form>
        <form method="POST" >
            <button id="logOutBtn" name="logOutBtn" >Log Out</button>
        </form>
        <form method="POST" id="checkout">
            <button id="checkoutBtn" name="checkOutBtn">Checkout</button>
        </form>    
    </div>   
</body>

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
            echo("<form method='POST' id='delete'>");
                echo("<input type='hidden' name='cartProdId' value='".$row['prod_id']."'>");
                echo("<button id='deleteProd' name='deleteProd'>Delete</button>");
            echo("</form>");
        echo("</div>");
    }
}



if(isset($_POST['deleteProd'])){
    $deletingProduct = $_POST['cartProdId'];
    foreach($_SESSION['shoppingCart'] as $cartProduct => $val){
        if($val == $deletingProduct){
            unset($_SESSION['shoppingCart'][$cartProduct]);
            //avoids a copy of the same id being deleted at the same time
            break;
        }   
    }
    header('Location:cart.php');
}

//deletes the session if logging out
if(isset($_POST['logOutBtn'])){
    unset($_SESSION['shoppingCart']);
    header('Location:index.html');
} 

if(isset($_POST['checkOutBtn'])){
    include('librarys/PHPMailer-master/PHPMailerAutoload.php');
    
    $mail = new PHPMailer;
    $body = "";
    
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Username = "ssp2.sineadcooney@gmail.com";
    $mail->Password = "ssp2cart";
    $mail->setFrom("ssp2.sineadcooney@gmail.com", "Sinead Cooney");
    $mail->addAddress("ssp2.sineadcooney@gmail.com", "Sinead Cooney");
    $mail->Subject = "Order Confirmed";
    $body .= "<h1>Your Products</h1>";
    foreach($_SESSION['shoppingCart'] as $prodId){
        $stmt = $conn->prepare("SELECT * FROM products WHERE prod_id = :productId");
        $stmt->bindParam(":productId", $prodId);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $body .= "<div id='orderProd'>";
            $body .= "<h2>".$row['title']. " &euro;" .$row['price']  ."</h2>";
            $body .= "<img src='". $row['image_url'] ."' alt='a keyboard'></a>"; 
            $body .= "</div>";
        }
    }
    $mail->msgHtml($body);
    if(!$mail->send()){
        echo "Error:" . $mail->ErrorInfo;
    }    
}

?>