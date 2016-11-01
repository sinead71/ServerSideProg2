<?php 
session_start();
include ("database.php");

if(isset($_POST['signUp'])){
        
        $username = $_POST["username"];
        $password = sha1($_POST["password"]);
        $email = $_POST["email"]);
        //need to add email to the user table in mysql

        $stmt = $conn->prepare("INSERT INTO users (username, user_id, password, email)
        VALUES (:user, NULL, :pass, :email)");
        $stmt->bindParam(':user', $username); 
        $stmt->bindParam(':pass', $password);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        




?>