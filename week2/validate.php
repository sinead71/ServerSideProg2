<?php 
    $username = "";
    $number = "";
    $email = "john@example.com";
    $age = "";
    $gender = "";
    $comment = "";
    
    $sanitized = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($sanitized, FILTER_VALIDATE_EMAIL)){
    }
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = check_input($_POST["username"]);
        $number = check_input($_POST["number"]);
        $number = only_numbers($_POST["number"]);
        $email = check_input($_POST["email"]);
        $age = check_input($_POST["age"]);
        $age = only_numbers($_POST["age"]);
        $gender = check_input($_POST["gender"]);
        $comment = check_input($_POST["comment"]);
    }    
    
    function check_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = htmlentities($data);
        return $data;
    }
    
    function only_numbers($data){
        if (is_numeric($data)){
        return $data;
    }else {return "not a number";} 
    }
   
   
    echo "<br> <h1>YourForm</h1>";
    echo "<br>";
    echo $username;
    echo "<br>";
    echo $number;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $comment;
?>