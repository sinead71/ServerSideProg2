<?php  

try{
    $connect = new PDO("mysql:host=localhost; dbname=SSP2", 'root', '' );
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $connect->prepare('SELECT * FROM users VALUES(:id, :emp_id, :username, :password, :email)');
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':emp_id', $emp_id);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $email);
    
    $id = '10';
    $emp_id = '10';
    $username = 'hannah10';
    $password = 'hannah1';
    $email = 'hannah@email.com';
    $stmt->execute();
    
    
    
    
} catch (PDOException $e){
    echo 'ERROR:' . $e->getMessage();               
}





?>