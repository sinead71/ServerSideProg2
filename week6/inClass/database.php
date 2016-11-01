<?php  
// selecting an id from the table alredy existing
$id = 8;
//("connecting to localhost", 'username', 'password'); 
try{
    $connect = new PDO("mysql:host=localhost; dbname=SSP2", 'root', '' );
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $connect->prepare('SELECT * FROM employees WHERE id = :id');
    $stmt->execute(array('id'=> $id));
    
    //Makes the executed value look nicer
    while($row = $stmt->fetch(PDO::FETCH_OBJ)){
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }
    
} catch (PDOException $e){
    echo 'ERROR:' . $e->getMessage();               
}





?>