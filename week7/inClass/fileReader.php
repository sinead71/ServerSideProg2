<?php 
//returns the file in a string
    $fullfile = file_get_contents('filename.txt');
    echo $fullfile;
    
    echo ('<br>');
    
    //Reads a file line by line
    //$fp = fopen('filename.txt');
    
    //while(!feof($fp)){
        //$row = fgets($fp, 999);
        //echo $row . "<br>";
    //}
    //fclose($fp);
    
    //  sorting a file in an array. each line is stored in the array
    $arr = file("filename.txt");
    echo $arr[1]; 
    echo ("<br>");
    
    //checks file size
    echo filesize("filename.txt");
    
    
    
    //writing to a file
    echo ("<br>");
    $fp = fopen("filename.txt", "a");
    fwrite($fp, "<h1>Hello Sinead!</h1>");
    fclose($fp);
    
    readfile("filename.txt");
    
    
    $file = fopen("textTest.txt", "w");
    echo fputs($file, "hello World. Testing!");
    fclose($file);
    
    
    echo file_put_contents("textTest.txt", "tuesday 18th");
?>