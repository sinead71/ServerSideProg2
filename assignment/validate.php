<?php 
    $sanitized = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($sanitized, FILTER_VALIDATE_EMAIL)){
    }
    
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = check_input($_POST["username"]); 
        $password = check_input($_POST["password"]);     
        $email = check_input($_POST["email"]);
    }    
    
    function check_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = htmlentities($data);
        return $data;
    }
    

    
    



?>