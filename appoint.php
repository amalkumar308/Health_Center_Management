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
<body style="background-image:url(back/01.jpg) ;background-repeat:no-repeat;background-attachment: fixed;">

	<div style="background-color:none;">
	<!-- Static navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
		 <<div class="container">
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
				<li class="active"><a href="index.php">Home</a></li>
				<li class="active" data-toggle="modal" data-target="#add_blog_modal"><a href="search.php">Search Doctor</a></li>
				<li class="active"><a href="appoint.php">Book Appointment</a></li>
				<li class="active"><a href="login.php">Member login</a></li>
				
			</ul>
		</div>
		</div>
	</nav>
  

	<br><br>

	<!-- End-->
	
	<div class="container">    
		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
			<div class="panel panel-info" >
				<div class="panel-heading">
					<div class="panel-title" align="center">Select Disease</div>

				</div>     

				<div style="padding-top:30px;" class="panel-body" >

					<div style="display:none" id="alert" class="alert alert-danger col-sm-12"></div>

					<form id="loginform" class="form-horizontal" role="form" action="search_backend.php" method="post" style="background-image:url(back/10.jpg);">
<br><br>
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-plus-sign"></i></span>
							
							    
								   <select  class="form-control" name="search">
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

						<input type="text" value="2" name="check" style="display:none">


						<div style="margin-top:10px" class="form-group">
							<!-- Submit Button -->

							<div class="col-sm-12 controls">
								<input type="submit" id="btn-login" action="search_backend.php" class="btn btn-success" value="Select"></a>
							</div>
						</div>
					<!--Candidate SignUp Page Link -->
						<div class="form-group">
							<div class="col-md-12 control">
								<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
									
								</div>
							</div>
						</div>    
					</form>     



				</div>                     
			</div>  
		</div>
	</div>		
               

<br><br><br><br>


<br><br><br><br>

<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold">
		devloped By Choubeyji &copy; 2018
	</div>
</footer>


</body>
</html>