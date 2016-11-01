<?php 
    $username = "user1";
    $password = "pass1";
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = check_input($_POST["username"]);
        $password = check_input($_POST["password"]);
    }
    
    function check_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = htmlentities($data);
        return $data;
    }
     
    function checkLogin($username, $password){   
        if($username == "user1"){
            echo $username; 
            echo "<br>"; 
        }else{
            echo ("error: wrong username!");
            echo "<br>";
        }
        
        if($password == "pass1"){
            echo $password;
        }else{
            echo ("error: wrong password!");
        } 

    }  
    
    checkLogin($username, $password);        
?>