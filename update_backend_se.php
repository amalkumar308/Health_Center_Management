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
	echo "<script>alert('name must be field.');window.location='update.php';</script>";

}
else if($userid==NULL)
{
	echo "<script>alert('userid must be field.');window.location='update.php';</script>";

}
else if($pass==NULL)
{
	echo "<script>alert('Password must be field.');window.location='update.php';</script>";

}
else if($email==NULL)
{
	echo "<script>alert('Email must be field.');window.location='update.php';</script>";

}
else if($mob==NULL)
{
	echo "<script>alert('Mobile number  must be field.');window.location='update.php';</script>";

}
else if($di=="Choice")
{
	echo "<script>alert('Disease must be select.');window.location='update.php';</script>";

}
else if($add1==NULL)
{
	echo "<script>alert('Address line1 must be field.');window.location='update.php';</script>";

}
   
 
   
    $query = "UPDATE doctors SET first_name='$firstname',middle_name='$middlename',last_name='$lastname',email='$email',mob='$mob',address_line1=' $add1',address_line2=' $add2',address_line3=' $add3',diesis1='$di' WHERE user_id='$userid'";
    
    $result = $con->query($query);

echo "<script>alert('successfully updated.');window.location='update_se.php';</script>";


    

}
?>
