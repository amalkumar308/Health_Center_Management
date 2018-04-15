<?php
require('function.php');
$notice="WELCOME TO MNNIT SPORTS CLUB."
//if($_SERVER["REQUEST_METHOD"] == "POST") 
//      // username and password sent from form 
      
      //$notice=$_POST['user_id'];
       
      

       
//

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
            
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


</head>
<body>

	
	<!-- Static navbar -->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		 <div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><?php echo "Welcome to MNNIT Sports club" ;?></a>
			</div>
			
		 
			<ul class="nav navbar-nav">
				<li class="active"><a href="home.php">Home</a></li>
				<li class="active" data-toggle="modal" data-target="#add_blog_modal"><a href="#">Athlete</a></li>
				<li class="active"><a href="#">Volleyball</a></li>
				<li class="active"><a href="#">Basketball</a></li>
				<li class="active"><a href="#">Cricket</a></li>
				<li class="active"><a href="#">Football</a></li>
				<li class="active"><a href="handler_login.php">Co-ordinator Login</a></li>
				<li class="active"><a href="candi_login.php">Candidate login</a></li>
			</ul>
		</div>
	</nav>

	<br><br>
	<div class="modal-body">
        <form method="POST" align="center" action="">
          <div class="form-group">
            <h3><label for="blog title" align="center" style="color:#FFFFFF">" PRACTICE MAKES A MAN PERFECT "</label>
            <div style="display:block;"><marquee><?php echo $notice; ?> </marquee></div></h3>
          </div>

        </form>
      </div>

	<!-- End-->
	<div class="container-fluid" style="margin-top: 0px">
		<div class="container">
			<div class="jumbotron">
                <div id="sliderFrame">
                   <div id="slider">
		
	
                      <img src="images/image-slider-1.jpg" alt="Welcome to MNNIT Sports Club" />
                      <img src="images/image-slider-2.jpg" alt="" />
                      <img src="images/image-slider-3.jpg" alt="" />
                      <img src="images/image-slider-4.jpg" alt="" />
                      <img src="images/image-slider-5.jpg" />
       
	                </div>
                    <div id="htmlcaption" style="display: none;">
            
                    </div>
                </div>

                <div class="div2">
       
    </div>
			</div>
		</div>
		<div class="container" >
			<div class="col-sm-12" >
				<h2><label align="center" style="color:#FFFFFF">ABOUT SPORTS</label></h2>
				<hr>
				<h2><label align="center" style="color:#FFFFFF">Etymology</label></h2>
				<br>
					<p>
					     The word Sport comes from the Old French desport meaning leisure, with the oldest definition in English from around 1300 being anything humans find amusing or entertaining.
               Other meanings include gambling and events staged for the purpose of gambling; hunting; and games and diversions, including ones that require exercise. Roget's defines
               the noun sport as an activity engaged in for relaxation and amusement with synonyms including diversion and recreation.</p>
					<br><br>
					<hr>


				

				
					<h2><label align="center" style="color:#FFFFFF">Definition</label></h2>
					
					<p>The International Olympic Committee recognizes some board games as sports including chess.
             Show jumping, an equestrian sport The precise definition of what separates a sport from other 
             leisure activities varies between sources. The closest to an international agreement on a
             definition is provided by SportAccord, which is the association for all the largest international 
             sports federations (including association football, athletics, cycling, tennis, equestrian sports, and more),
             and is therefore the de facto representative of international sport.<br>
             SportAccord uses the following criteria, determining that a sport should:<br><br>

               1-have an element of competition<br>
               2-be in no way harmful to any living creature<br>
               3-not rely on equipment provided by a single supplier (excluding proprietary games such as arena football)<br>
               4-not rely on any "luck" element specifically designed into the sport.<br><br>
             They also recognise that sport can be primarily physical (such as rugby or athletics), primarily 
             mind (such as chess or go), predominantly motorised (such as Formula 1 or powerboating), primarily 
             co-ordination (such as billiard sports), or primarily animal-supported (such as equestrian sport).
<br>         The inclusion of mind sports within sport definitions has not been universally accepted, leading 
             to legal challenges from governing bodies in regards to being denied funding available to sports.
             Whilst SportAccord recognises a small number of mind sports, it is not open to admitting any 
             further mind sports.<br>

             There has been an increase in the application of the term "sport" to a wider set of non-physical 
             challenges such as video games, also called esports, especially due to the large scale of participation 
             and organised competition, but these are not widely recognised by mainstream sports organisations. 
             According to Council of Europe, European Sports Charter, article 2.i, " "Sport" means all forms of physical 
             activity which, through casual or organised participation, aim at expressing or improving physical fitness 
             and mental well-being, forming social relationships or obtaining results in competition at all levels."</p>
					<br><br>
				
					<hr>
					
				</div>
			</div>
		</div>
	</div>
</div>


<footer class="container-fluid">
	<div style="text-align:center;padding:1%;font-weight:bold">
		All rights reserved &copy; 2017
	</div>
</footer>


</body>
</html>