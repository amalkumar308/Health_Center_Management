<?php
session_start();


//include funtion.php file

require('function.php');
$con = con();

//here check, where "session with user_id" is set or not

if(isset($_SESSION['user_id'])){
$id=$_SESSION['user_id'];
}
else
{

//if session is not set then control goes to homepage

header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}

//$user = $_POST["user_id"];
$userid = $_SESSION['user_id'];

//QUERY TO FIND THE DETAILS ABOUT THE LOGGED-IN USER
$query = "SELECT * FROM doctors where user_id='$userid'";

$result = $con->query($query);



?>





<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.ico">
<style type="text/css">
            
            * {
                margin: 0;
                padding: 0;
            }
            body {
                font-family: Calibri;
            }
            h3
            {
            	font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #EAECEE;
                padding: 10px 0 20px 10px;
                margin-bottom: 50px;
            }
            h2 {

                font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 20px 10px;
                margin-bottom: 1px;
                border-left: 6px solid red;
            }
             
             .mySlides {display:none;}        
            
        </style>
	<title>Health center</title>
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
</head>
<body style="background-image:url(back/10.jpg) ;background-repeat:no-repeat;background-attachment: fixed;">

	<div style="background-color:none;">
	<!-- Static navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>

        
        <a class="navbar-brand" href="#"><?php echo "MNNIT Health Center" ;?></a>
      </div>
      
     <div class="collapse navbar-collapse" id="myNavbar">
  
      
      <ul class="nav navbar-nav">
<li class="active"><a href="doctor_home.php">Home</a></li>
        <li class="active"><a href="update_se.php">Update Your information</a></li>
             <li class="active"><a href="logout.php">Logout</a></li>



      </ul>
      <div>
    </div>
  </nav>

	<br><br>

	<!-- End-->
	
	<div class="col-sm-12" >
				<h2 style="opacity: 0.8;"><marquee><label align="center" style="color:#FFFFFF;opacity:1px;">Dr. CAN YOU SURE TO UPDATE DATA ?</label></marquee></h2>
				<hr>
	<br><br><br><br>
<div class="container">    
            <div class="col-sm-12" >
              <div style="color:#red  ;background-color:#071d36;opacity: 0.9; ">

                      <?php
                        $a=0;
                        echo "<table class='table' border='1' align='center'>";
                        echo "<caption style='color:#D7DA0F '> Availebel Doctors</capiton>";
                          echo "<tr style=' border-left: 6px solid red;color:#D7DA0F' align='center'><th>Name</th><th>Phone Number</th><th>Email</th><th>Address</th><th>Speciliest</th><th>Delete</th></tr>";
       
                         while($row=$result->fetch_array())
                           {
                            $a=1;
                            echo "<tr style=' border-left: 6px solid red; color:#D7DA0F' align='center'><form action='update_step_se.php' method='post'><td>Dr. $row[2] $row[3] $row[4]</td><td>$row[6]</td><td>$row[5]</td><td>$row[7]<br>$row[8]<br>$row[9]</td><td>$row[10]</td>
                            <td>              <div class='col-sm-12 controls'>
                <input type='text' value='$row[0]' style='display:none' name='id'><input type='submit' id='btn-login' action='book.php' class='btn btn-success' value='Update Your Details'></a>
              </div></td></form></tr>";
                           }
                       echo "</table>";

                       if($a==0)
                        echo "<div align='center' class='col-sm-12 controls' style='color:#D7DA0F  ;background-color:#071d36;opacity: 0.8; '><b>No Doctor Availebel</b></div>";
                      ?>


                     
     </div>
                          
     </div>              
     </div>


<br><br>
              
<br><br><br><br>
<br><br><br><br>

<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold">
		devloped By Choubeyji &copy; 2018
	</div>
</footer>


</body>
</html>