<?php  
//has to start at the beginning
session_start();
include ("validate.php");

include ("database.php");
   //isset = makes sure there is something within the textfield. cant be blank
    if(isset($_POST['login'])){
        
        $username = check_input($_POST["username"]);
        $password = check_input(sha1($_POST["password"]));
        
        //looking through the database for info.            
        $stmt = $conn->prepare("SELECT * FROM users WHERE 
        username = :user AND password = :pass");
        $stmt->bindParam(":user", $username);
        $stmt->bindParam(":pass", $password);
        $stmt->execute();
        
        if($stmt->rowCount() == 1){
            header("Location:products.php");          
        }else{
            echo("user not found");
        }
               
    }


    
    
    
    
              
?>