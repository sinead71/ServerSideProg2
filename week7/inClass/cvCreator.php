<?php     
    include('mPDF/Mpdf.php');
    $mpdf = new mPDF();
    
    $name = "sinead";
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = check_input($_POST["name"]);
    } 
    
    function check_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = htmlentities($data);
        return $data;
    }
    
    function checkLogin($name){   
        if($name == "sinead"){
            //this isn't working! :( trying to get the name to print onto a pdf
            $mpdf->WriteHTML($name);
            $mpdf->Output(); 
        }else{
            echo ("error: wrong username!");
            echo "<br>";   
        }
    } 
    
    checkLogin($name); 

?>
<div id='cvCreator'>
    <h1>Create Your CV</h1>
    <form method='POST' action='cvCreator.php'>
        <input name='name' type='text'> <br>
        <button type='submit' name='submit'>Submit</button>
    </form>
</div>