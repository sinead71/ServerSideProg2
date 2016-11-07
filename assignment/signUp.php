<?php 
session_start();
include ("database.php");
include ("validate.php");

//signing up to the website. This adds the new info to the users table in the database
if(isset($_POST['signUp'])){      
    $username = check_input($_POST["username"]);
    $password = check_input(sha1($_POST["password"]));
    $email = check_email($_POST["email"]);
    //need to add email to the user table in mysql

    $stmt = $conn->prepare("INSERT INTO users (username, user_id, password, email)
    VALUES (:user, NULL, :pass, :email)");
    $stmt->bindParam(':user', $username); 
    $stmt->bindParam(':pass', $password);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
}


?>