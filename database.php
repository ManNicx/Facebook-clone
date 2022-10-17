<?php



   //php 7.3.0
   $user = "epiz_32668043";
   $password = "N6teCSfie3mYR";
   $database = "epiz_32668043_Sample";
   $host = "sql112.epizy.com";
   
   
   $connect = mysqli_connect($host,$user,$password,$database);
     
   if(mysqli_connect_error()) {
      echo  "Error! Connection failed";
     
   } 
else
 {
    echo "Successfully Connected";
   }
    
   
   
   

?>
