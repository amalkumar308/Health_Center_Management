<?php
session_start();


//include funtion.php file
require('function.php');
$con = con();







$diesis = validate($_POST["search"]);
$ce = validate($_POST["check"]);



//QUERY TO FETCH ALL details of candidates

$detail = "SELECT * FROM doctors where diesis1='$diesis'";
$result = $con->query($detail);

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
               

<br><br><br><br>
<div class="container">    
            <div class="col-sm-12" >
              <div style="color:#D7DA0F  ;background-color:#071d36;opacity: 0.8; ">

                      <?php
                        $a=0;
                        echo "<table class='table' border='1' align='center'>";
                        echo "<caption style='color:#D7DA0F '> Availebel Doctors</capiton>";
                          echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align='center'><th>Name</th><th>Phone Number</th><th>Email</th><th>Address</th><th>Speciliest</th><th>Book</th></tr>";
       
                         while($row=$result->fetch_array())
                           {
                            $a=1;
                            echo "<tr style=' border-left: 6px solid red; color:#D7DA0F ' align='center'><form action='book.php' method='post'><td>Dr. $row[2] $row[3] $row[4]</td><td>$row[6]</td><td>$row[5]</td><td>$row[7]<br>$row[8]<br>$row[9]</td><td>$row[10]</td><td>              <div class='col-sm-12 controls'>
                <input type='text' value='$row[0]' style='display:none' name='id'><input type='submit' id='btn-login' action='book.php' class='btn btn-success' value='Book Appointment'></a>
              </div></td></form></tr>";
                           }
                       echo "</table>";

                       if($a==0)
                        echo "<div align='center' class='col-sm-12 controls' style='color:#D7DA0F  ;background-color:#071d36;opacity: 0.8; '><b>No Data Found releted to \"$diesis\" disease</b></div>";
                      ?>


                     
     </div>
                          
     </div>              
     </div>


<br><br>
              <div class="col-sm-12 controls" align="center">
                
                  <?php
                  if($ce==1)
                  {
                echo "<form action='search.php'><input type='submit' id='btn-login' action='search.php' class='btn btn-success' value='Search again'> </form>";
               }
               else
               {
               
                echo "<form action='appoint.php' method='post'><input type='submit' id='btn-login' action='appoint.php' class='btn btn-success' value='Select disease again'></form>";
              
                }
                ?>
               
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