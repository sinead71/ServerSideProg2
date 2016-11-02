<?php 
//this can then be wrapped around the input field info to secure them (username and password)
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
    
    //wrap this aound the email to secure it
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
   
?>