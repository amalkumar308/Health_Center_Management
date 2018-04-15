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
$a;
$user = $_POST["user_id"];
$userid = $_SESSION['user_id'];

//QUERY TO FIND THE DETAILS ABOUT THE LOGGED-IN USER

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
<body style="background-image:url(back/09.jpg) ;background-repeat:no-repeat;background-attachment: fixed;">

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
	
	
               

                <div class="div2">
   
		<div class="container"  >
			<div class="col-sm-12" >
				<h2 style="opacity: 0.8;"><marquee><label align="center" style="color:#FFFFFF;opacity:1px;">WELCOME  DR. <?php echo " \"$userid\"";?></label></marquee></h2>
				<hr>
				<h2 style="opacity: 0.8;"><form action="doctor_home_se.php" method="post"><label align="center" style="color:#D7DA0F"><div style="margin-bottom: 25px" class="input-group col-md-offset-12 col-md-12" align="center">
							Search Patient By Date&nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-calendar"></i><br><br>
							<input id="user_id" type="text" class="form-control" name="date1" value="" placeholder="dd/mm/yyyy">  <br><br> <input type="submit" id="btn-login" action="search_backend.php" class="btn btn-success" value="Search">                                    
						</div></label></form></h2>
				
				
					
<br><br>
						

<br><br>
              
<br><br><br><br>








<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold">
		devloped By Choubeyji &copy; 2018
	</div>
</footer>


</body>
</html>