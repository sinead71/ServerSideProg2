<?php 
session_start();
include ("database.php");

if(isset($_POST['signUp'])){
        
        $username = $_POST["username"];
        $password = sha1($_POST["password"]);
        $email = $_POST["email"]);
        //need to add email to the user table in mysql






?>