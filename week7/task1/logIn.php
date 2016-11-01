<?php  
//has to start at the beginning
session_start();

include ("database.php");
   
    if(isset($_POST['submit'])){
        
        $username = $_POST["username"];
        $password = sha1($_POST["password"]);
        
        //looking through the database for info.            
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :user AND password = :pass");
        $stmt->bindParam(":user", $username);
        $stmt->bindParam(":pass", $password);
        $stmt->execute();
        
        if($stmt->rowCount() == 1){
            echo "found user";
            echo"<br>";
        }else{
            echo("user not found");
        }
               
    }


    
    
    
    
              
?>

