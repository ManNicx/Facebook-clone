<?php

include "database.php";

$email = $_POST["email"] ;
   $pass = $_POST["password"];
   
 
   
   
  $sql = "INSERT INTO Sample (email,password)
VALUES ('$email','$pass')";

if (mysqli_query($connect,$sql)){
 
  echo "Successfully added";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    
    
?>    
    