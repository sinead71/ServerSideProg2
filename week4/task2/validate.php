<?php 
//if statments can't be writen outside of a function inside of a class.
if($_SERVER["REQUEST_METHOD"]=="POST"){
            $username = check_input($_POST["username"]);
            $password = check_input($_POST["password"]);
    } 

//telling the class the username and password inputs will be checked inside the class    
$access = new LogIn($username, $password);

//this could be added inside the class but another $access=new check_input(); will be needed 
function check_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = htmlentities($data);
        return $data;
    } 
 
 

 
//everything in a class must be in a function. Don't call a function with in a class    
class LogIn{
    protected $username = "user1";
    protected $password = "pass1";
    
    //constructors set up variables that will be used later in the class
    //here we want to use the user name and password so you need to pass both of them 
    //in to the constructor. I this isn't done the code wont know what username is etc.
    public function __construct($uName, $pass){
        $this->username = $uName;
        $this->password = $pass;
        $this->checkLogin($uName, $pass);       
    }
       
    protected function checkLogin($username, $password){   
        if($username == "user1" && $password == "pass1"){
            echo ('Access Allowed!');
            echo "<br>"; 
        }else{
            echo ("Access Denied!");
            echo "<br>";
        }
    }  
    

}

class Register{
    
}


?>