<?php
session_start();
require('function.php');
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
      // username and password sent from form 
      $con = con();
      $myusername = mysqli_real_escape_string($con,$_POST['user_id']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      $c =  mysqli_real_escape_string($con,$_POST['c']); 

       //query to check user_id is present or not
      if($c==1)
      {
      $sql = "SELECT user_id FROM admin WHERE user_id = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) 
      {
         //session_register("myusername");
         $_SESSION['user_id'] = $row['user_id'];
         
         header("location: admin_home.php");
      }
      else 
      {
        // $error = "Your Login Name or Password is invalid and control goes to candidate login page";
         echo "<script>alert('invalid user id and password');window.location='login.php';</script>";
         die();
      } 
      }
      else
      {

         $sql = "SELECT user_id FROM doctors WHERE user_id = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) 
      {
         //session_register("myusername");
         $_SESSION['user_id'] = $row['user_id'];
         
         header("location: doctor_home.php");
      }
      else 
      {
        // $error = "Your Login Name or Password is invalid and control goes to candidate login page";
         echo "<script>alert('invalid user id and password');window.location='login.php';</script>";
         die();
      } 

      }  
}


?>