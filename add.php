<?php
session_start();


//include funtion.php file

require('function.php');
$con = con();

//here check, where "session with user_id" is set or not

if(isset($_SESSION['user_id']))
{
$id=$_SESSION['user_id'];
}
else
{

//if session is not set then control goes to homepage

header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}

$user = $_POST["user_id"];
$userid = $_SESSION['user_id'];

//QUERY TO FIND THE DETAILS ABOUT THE LOGGED-IN USER
$query = "SELECT * FROM doctors";

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

	<script>

function ncheck()
{
var na,nc,n;
nc=/^[a-zA-Z ]+$/;
n=document.getElementById("na");
na=document.getElementById("na").value;
if(!n.value.match(nc) || na.charAt(0)==' ')
{
document.getElementById("spn").innerHTML="Invalid Name";
}
else
{
document.getElementById("spn").innerHTML="";
}
}

function uscheck()
{
var na,nc,n;
n=document.getElementById("na");
na=document.getElementById("na").value;
if(!n.value.match(nc) || na.charAt(0)==' ')
{
document.getElementById("spn").innerHTML="Not blank";
}
else
{
document.getElementById("spn").innerHTML="";
}
}



function mncheck()
{
var mna,mnc,mn;
mnc=/^[a-zA-Z ]+$/;
mn=document.getElementById("mna");
mna=document.getElementById("mna").value;
if(!mn.value.match(mnc) || mna.charAt(0)==' ')
{
document.getElementById("mspn").innerHTML="";
}
else
{
document.getElementById("mspn").innerHTML="";
}
}

function lncheck()
{
var lna,lnc,ln;
lnc=/^[a-zA-Z ]+$/;
ln=document.getElementById("lna");
lna=document.getElementById("lna").value;
if(!ln.value.match(lnc) || lna.charAt(0)==' ')
{
document.getElementById("lspn").innerHTML="Invalid Name";
}
else
{
document.getElementById("lspn").innerHTML="";
}
}

function echeck()
{
var ea,ec;
ec=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+.[a-zA-Z.]{2,6}$/;
ea=document.getElementById("ea");
if(!ea.value.match(ec))
{
document.getElementById("spe").innerHTML="Invalid Email";
}
else
{
document.getElementById("spe").innerHTML="";
}
}

function pcheck()
{
var co,pc;
pc=/^[0-9]{10,10}$/;
co=document.getElementById("co");
if(!co.value.match(pc))
{
document.getElementById("spp").innerHTML="Invalid Phone";
}
else
{
document.getElementById("spp").innerHTML="";
}
}
</script>
</head>


</head>
<body style="background-image:url(back/01.jpg) ;background-repeat:no-repeat;background-attachment: fixed;">

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

				<li class="active"><a href="add.php">Add Doctor</a></li>
				<li class="active" data-toggle="modal" data-target="#add_blog_modal"><a href="Delete.php">Delete Doctor</a></li>
				<li class="active"><a href="update.php">Update Doctor</a></li>
				<li class="active"><a href="paitent.php">See patient</a></li>
				<li class="active"><a href="logout.php">Logout</a></li>


			</ul>
			<div>
		</div>
	</nav>
  

	<br><br>

	<!-- End-->
	<div class="container">    
				<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-3">
			          <div class="panel panel-info">
				         <div class="panel-heading">
				         	<div class="panel-title">ADD DOCTOR DETAILS</div>
					           <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="appoint.php">you also provide username and password</a></div>
				           </div>  
				           <div class="panel-body" >
					           <form style="background-image:url(back/10.jpg);" id="book" class="form-horizontal" role="form" action="add_backend.php" method="post">



<br><br>

						      <div class="form-group">
							   <label for="first_name" class="col-md-3 control-label">First Name *</label>
							    <div class="col-md-9">
								   <input type="text" class="form-control" name="first_name" placeholder="First Name" size="30" id="na" onblur="ncheck();"><span id="spn" style="color:red"></span>
							    </div>
						      </div>

						      <div class="form-group">
							    <label for="middle_name" class="col-md-3 control-label">Middle Name</label>
							      <div class="col-md-9">
								    <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" size="30" id="mna" onblur="mncheck();"><span id="mspn" style="color:red"></span>
							      </div>
						      </div>
						      <div class="form-group">
							    <label for="last_name" class="col-md-3 control-label">Last Name</label>
							      <div class="col-md-9">
							       	<input type="text" class="form-control" name="last_name" placeholder="Last Name" size="30" id="lna" onblur="lncheck();"><span id="lspn" style="color:red"></span>
							    </div>
						      </div>
						      <div class="form-group">
							    <label for="user_id" class="col-md-3 control-label">User Id *</label>
							     <div class="col-md-9">
								   <input type="text" class="form-control" name="user_id" placeholder="User Id" id="na" onblur="uscheck();"><span id="spn" style="color:red"></span>
							     </div>
						      </div>
						      <div class="form-group">
							    <label for="passworrd" class="col-md-3 control-label">Password *</label>
							     <div class="col-md-9">
								   <input type="password" class="form-control" name="password" placeholder="Password" id="pa"><span id="spn" style="color:red"></span>
							     </div>
						      </div>
						      <div class="form-group">
							    <label for="email" class="col-md-3 control-label">Email *</label>
							     <div class="col-md-9">
								   <input type="text" class="form-control" name="email" placeholder="Email Address" id="ea" onblur="echeck();"><span id="spe" style="color:red"></span>
							     </div>
						      </div>
                              <div class="form-group">
							    <label for="mo" class="col-md-3 control-label">Mo. Number *</label>
							     <div class="col-md-9">
								   <input type="text" class="form-control" name="mo" placeholder="Mobile number" id="co" onblur="pcheck();" maxlength="10"><span id="spp" style="color:red"></span>
							     </div>
						      </div>


						      	<div class="form-group">
							    <label for="mo" class="col-md-3 control-label">Select Your disease *</label>
							     <div class="col-md-9">
							
							    
								   <select  class="form-control" name="di">
								   	<option>Choice</option>
								   	<option>Acne</option>
								   	<option>Allergy</option>
								   	<option>Altitude sickness</option>
								   	<option>Asthma</option>
								   	<option>Back Pain</option>
								   	<option>Headache</option>
								   	<option>AIDS</option>
								   	<option>Hypertension</option>
								   	<option>Influenza</option>
								   	<option>diabetes</option>
								   	<option>Muscle Pain</option>
								   	<option>Cold fever</option>
								   	</select>
							     
						       </div>                                    
						</div>






						      <div class="form-group">
							    <label for="add1" class="col-md-3 control-label">Address Line1 *</label>
							     <div class="col-md-9">
								   <input type="text" class="form-control" placeholder="Line 1" name="add1" id="na" onblur="uscheck();"><span id="spn" style="color:red"></span>
							     </div>
						      </div>
						      <div class="form-group">
							    <label for="add2" class="col-md-3 control-label">Address Line2</label>
							     <div class="col-md-9">
								   <input type="text" class="form-control" name="add2" placeholder="Line 2">
							     </div>
						      </div>
						      <div class="form-group">
							    <label for="add3" class="col-md-3 control-label">Address Line3</label>
							     <div class="col-md-9">
								   <input type="text" class="form-control" name="add3" placeholder="Line 3">
							     </div>
						      </div>
						     
						     
						      



						      
<br>
						      <!--Reset Button -->
						     <div class="form-group">
							                                              
							     <div class=" col-md-offset-4 col-md-2">
								     <input type="reset" id="btn-reset" class="btn btn-info"><i class="icon-hand-right" value="Reset" onclick="#"></i>
							     </div>
						       
						

						       
							      <!--Submit Button -->                                        
							     <div class="col-md-offset-2 col-md-2">
								     <input type="submit" id="btn-signup" class="btn btn-info"><i class="icon-hand-right"></i>
							     </div>
						      </div>


<br><br>


					           </form>
				           </div>
			              </div>



 
		                </div> 
	                 </div>
                    </div>





<br><br><br><br>

<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold">
		devloped By Choubeyji &copy; 2018
	</div>
</footer>


</body>
</html>