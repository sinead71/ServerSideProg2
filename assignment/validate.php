<?php 
    function check_input($data){
        if(isset($data)){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = strip_tags($data);
            $data = htmlentities($data);
            return $data;
        }
    }
    
    function check_email($data){
        if(isset($data)){
            $sanitized = filter_var($email, FILTER_SANITIZE_EMAIL);
            if (filter_var($sanitized, FILTER_VALIDATE_EMAIL)){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                $data = strip_tags($data);
                $data = htmlentities($data);
                return $data;
            }      
        }
    }
   
    
    
    /*if($_SERVER["REQUEST_METHOD"]=="POST"){ 
        $password = check_input($_POST["password"]);     
    }    
    
    function check_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = htmlentities($data);
        return $data;
    }*/
?>