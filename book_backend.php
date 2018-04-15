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
    $mob = validate($_POST["mo"]);
    $email = validate($_POST["email"]);
    $add1 = validate($_POST["add1"]);
    $add2 = validate($_POST["add2"]);
    $add3 = validate($_POST["add3"]);
    $di = validate($_POST["di"]);
    $did = validate($_POST["did"]);
    $date1 = date("d/m/Y");
    

    $con = con();
   // echo "alert('hi')";
    
    //query for "this user_id is present or not"
    
if($firstname==NULL)
{
	echo "<script>alert('name must be field.');window.location='appoint.php';</script>";

}
else if($userid==NULL)
{
	echo "<script>alert('userid must be field.');window.location='appoint.php';</script>";

}
else if($email==NULL)
{
	echo "<script>alert('Email must be field.');window.location='appoint.php';</script>";

}
else if($mob==NULL)
{
	echo "<script>alert('Mobile number  must be field.');window.location='appoint.php';</script>";

}
else if($di=="Choice")
{
	echo "<script>alert('Disease must be select.');window.location='appoint.php';</script>";

}
else if($add1==NULL)
{
	echo "<script>alert('Address line1 must be field.');window.location='appoint.php';</script>";

}
    $query = "SELECT * FROM customer C where C.user_id='$userid' "  ;
    
    $result = $con->query($query);
  
    if($result->num_rows>0)
    {
        echo "<script>alert('User with this user id is exist.');window.location='appoint.php';</script>";
        die();
    }  
    else
    {

        //if user_id is not present then insert all data in candidate table in database

        $ins_query = "INSERT INTO customer(user_id,first_name,middle_name,last_name,email,mob,address_line1,address_line2,address_line3,diesis)
        VALUES ('$userid','$firstname','$middlename','$lastname','$email','$mob','$add1','$add2','$add3','$di')";
        $ins_res = $con->query($ins_query);


        //again insert only user_id and password in candi_login table for security purpose

        $ins1_query = "INSERT INTO apoint(duser_id,cuser_id,date1)
        VALUES ('$did','$userid','$date1')";
        $ins1_res = $con->query($ins1_query);

        if($ins1_res>=1)
        	echo "<script>alert('Successfully tttttt Booked.');</script>";

       $detail = "SELECT * FROM doctors where user_id='$did'";
       	$r=$con->query( $detail);
       	$a=$r->fetch_array();


        //echo "<script>alert('Successfully Appointment Booked.');window.location='index.php';</script>";
        //die(); 



//$arr = $result->fetch_array();


$dfirstname = $a[2]; 
$dmiddlename = $a[3];
$dlastname = $a[4];
$demail = $a[5];
$dmob = $a[6];



    }

}
?>


<html>
<head>
	<head>
		<br><br>
		<br>
		<title>print</title>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	
	<link href="./assets/css/font-awesome.css" rel="stylesheet">
	<link href="./assets/css/blog_page.css" rel="stylesheet">
	<link href="./assets/fonts/font.css" rel="stylesheet">
	<link href="./assets/css/index.css" rel="stylesheet">
	<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
	<script src="themes/1/js-image-slider.js" type="text/javascript"></script>

    <link href="generic.css" rel="stylesheet" type="text/css" />
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/jquery.min1.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>

		<h2 align="center">MNNIT HEALTH CENTER</h2>

<script>
document.getElementById("d").innerHTML = Date();
function pr() {
    window.print();
}
</script>


	</head>
	<body>

		 <div class="col-sm-12" align="center" >
		 	<div  class="form-group" align="center">
		<div id="d"></div>

<script>
document.getElementById("d").innerHTML = Date();
</script>
<hr>
<br>
<table align="center">
			<tr><th><label id="" class="col-md-6 control-label">Dr.Name:</label> </th>
				<th><label id="" class="col-md-6 control-label"><?php echo " Dr. $dfirstname $dmiddlename $dlastname" ?></label></th></tr>
				<tr><th><label id="" class="col-md-6 control-label">Mobile:</label> </th>
				<th><label id="" class="col-md-6 control-label"><?php echo "  $dmob" ?></label></th></tr>
				<tr><th><label id="" class="col-md-6 control-label">Email:</label> </th>
				<th><label id="" class="col-md-6 control-label"><?php echo "  $demail" ?></label></th></tr>
				
				</table>


<hr>
<div class="col-md-offset-2"  style="color:#D7DA0F  ;width:500 ">
<div class="col-md-6" style="color:#000000;" align=""><h4><b>Your Details :</b></h4></div>
<br><br>		<table align="center">
			<tr><th><label id="" class="col-md-6 control-label">Name:</label> </th>
				<th><label id="" class="col-md-6 control-label"><?php echo "  $firstname $middlename $lastname" ?></label></th></tr>
				<tr><th><label id="" class="col-md-6 control-label">Identification Key:</label> </th>
				<th><label id="" class="col-md-6 control-label"><?php echo "$userid " ?></label></th></tr>
				<tr><th><label id="" class="col-md-6 control-label">Address:</label> </th>
				<th><label id="" class="col-md-6 control-label"><?php echo "  $add1 $add2 $add3" ?></label></th></tr>
				<tr><th><label id="" class="col-md-6 control-label">Mobile:</label> </th>
				<th><label id="" class="col-md-6 control-label"><?php echo "  $mob" ?></label></th></tr>
				<tr><th><label id="" class="col-md-6 control-label">Email:</label> </th>
				<th><label id="" class="col-md-6 control-label"><?php echo "  $email" ?></label></th></tr>
				<tr><th><label id="" class="col-md-6 control-label">Disease:</label> </th>
				<th><label id="" class="col-md-6 control-label"><?php echo "  $di" ?></label></th></tr>

				<tr><th><label id="" class="col-md-6 control-label"></label> </th>
				<th><label id="" class="col-md-6 control-label"></label></th></tr>

				<tr><th><label id="" class="col-md-6 control-label"></label> </th>
				<th><label id="" class="col-md-6 control-label"></label></th></tr>

				<tr><th><label id="" class="col-md-6 control-label">Appointment Date : </label> </th>
				<th><label id="" class="col-md-6 control-label">Your Appointment is Conformed Tomorrow</label></th></tr>

				<tr><th><label id="" class="col-md-6 control-label">Time:</label> </th>
				<th><label id="" class="col-md-6 control-label">10 o'clock Morning</label></th></tr>

				<tr><th><label id="" class="col-md-6 control-label"></label> </th>
				<th><label id="" class="col-md-6 control-label"></label></th></tr>

				<tr><th><label id="" class="col-md-6 control-label"></label> </th>
				<th><label id="" class="col-md-6 control-label"></label></th></tr>

				<tr><th><label id="" class="col-md-6 control-label">open:</label> </th>
				<th><label id="" class="col-md-6 control-label"><p>
					Mon - Fri 10 o'clock Morning - 5 o'clock Eviening
					<br>Sat-Sun Closed</p></label></th></tr>



		</table>
		

</div>

<hr>
		
		
	<br><br><br>

<form action="index.php">
		<input type="button" id="p" value="print" onclick="pr()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="p" value="Go to Home page">
	</form>
</div>
</div>
</body>
<html>

