<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="favicon.ico">
<style type="text/css">
            .container {
       position: relative;
    width: 25%;
}

.image {
  opacity: 1;
  display: block;
  width: 50%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
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
                background-color: #A3A3A3;
                padding: 10px 0 20px 10px;
                margin-bottom: 50px;
            }
            h2 {

                font-weight: 300;
                font-size: 4em;
                color: #fff;
                background-color: #071d36;
                padding: 10px 0 20px 10px;
                margin-bottom: 50px;
            }
                     
            
        </style>
	<title>MNNIT Sports</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
        <a class="navbar-brand" href="#"><?php echo "MNNIT Health Center" ;?></a>
      </div>
      
     
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="active" data-toggle="modal" data-target="#add_blog_modal"><a href="search.php">Search Doctor</a></li>
        <li class="active"><a href="appoint.php">Book Appointment</a></li>
        <li class="active"><a href="login.php">Member login</a></li>
        
      </ul>
    </div>
  </nav>
  
   
	<br><br><br><br>
	

	             <h2><ul align="center" style="color:#FFFFFF" algin="center">WEB TEAM</ul></h2>
	
               
              
                
                <br>

		            <a href="https://www.facebook.com/amalkumarchoubey"><div class="container">
                <img src="images/amal.jpg" alt="Avatar" class="image" style="width:20%"></a>
                <div class="middle">
                <div class="text">Amal Kumar Choubey</div>
                </div>
               
               </div>
				<hr>

<footer class="container-fluid">
  <div style="text-align:center;padding:1%;font-weight:bold">
    devloped By Choubeyji &copy; 2018
  </div>
</footer>


</body>
</html>