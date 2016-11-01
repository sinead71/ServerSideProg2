<?php 
setcookie("cookie_name", "checking cookie" ,time()+10);
echo $_COOKIE["cookie_name"];

setcookie("cookie_no2", "checking cookie no2" ,time()+60);

//deleting a cookie
unset($_COOKIE["cookie_name"]);

/* 
OR 
setcookie("cookie_name", "checking_value", time()-1);
*/
?>