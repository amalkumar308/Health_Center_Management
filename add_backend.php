<?php
session_start();
require('function.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //fetching data from form
    $firstname = validate($_POST["first_name"]);
    $middlename = validate($_POST["middle_name"]);
    $lastname = validate($_POST["last_name"]);
    $userid = validate($_POST["user_id"]);
    $pass = validate($_POST["password"]);
    $mob = validate($_POST["mo"]);
    $email = validate($_POST["email"]);
    $add1 = validate($_POST["add1"]);
    $add2 = validate($_POST["add2"]);
    $add3 = validate($_POST["add3"]);
    $di = validate($_POST["di"]);
    

    $con = con();
   // echo "alert('hi')";
    
    //query for "this user_id is present or not"
    
if($firstname==NULL)
{
	echo "<script>alert('name must be field.');window.location='add.php';</script>";

}
else if($userid==NULL)
{
	echo "<script>alert('userid must be field.');window.location='add.php';</script>";

}
else if($pass==NULL)
{
	echo "<script>alert('Password must be field.');window.location='add.php';</script>";

}
else if($email==NULL)
{
	echo "<script>alert('Email must be field.');window.location='add.php';</script>";

}
else if($mob==NULL)
{
	echo "<script>alert('Mobile number  must be field.');window.location='add.php';</script>";

}
else if($di=="Choice")
{
	echo "<script>alert('Disease must be select.');window.location='add.php';</script>";

}
else if($add1==NULL)
{
	echo "<script>alert('Address line1 must be field.');window.location='add.php';</script>";

}
    $query = "SELECT * FROM doctors C where C.user_id='$userid' "  ;
    
    $result = $con->query($query);
  
    if($result->num_rows>0)
    {
        echo "<script>alert('Doctor with this user id is exist.');window.location='add.php';</script>";
        die();
    }  
    else
    {

        //if user_id is not present then insert all data in candidate table in database

        $ins_query = "INSERT INTO doctors (user_id,password,first_name,middle_name,last_name,email,mob,address_line1,address_line2,address_line3,diesis1)
        VALUES ('$userid','$pass','$firstname','$middlename','$lastname','$email','$mob','$add1','$add2','$add3','$di')";
        $ins_res = $con->query($ins_query);


        //again insert only user_id and password in candi_login table for security purpose

        


        echo "<script>alert('Successfully Doctort added.');window.location='admin_home.php';</script>";
        die(); 




    }

}
?>

