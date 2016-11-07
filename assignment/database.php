<?php 
try{
    //can't combine PDO and other sql code to connect to db
    $conn = new PDO("mysql:host=localhost; dbname=ssp2cart", 'root', '' );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected to db";
}
//shows up errors
catch(PDOException $e){
    echo "error". $e->getMessage();     
}


?>