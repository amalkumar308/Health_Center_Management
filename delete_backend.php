<?php
session_start();
require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    
    $userid = validate($_POST["id"]);


    $con = con();
   
  
       $sql="DELETE FROM doctors where user_id='$userid'"; 
       $result2 = $con->query($sql);



echo "<script>alert('Doctor Delete successfully ');window.location='Delete.php';</script>";
        die(); 
    }

?>