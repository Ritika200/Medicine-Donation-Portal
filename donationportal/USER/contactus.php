<?php
 //==================connection create with function====================================
session_start();
 $sess=0;
 if(isset($_SESSION['usersession']))
 {
 $userData=$_SESSION['usersession'];
 //print_r($userData);
 $sess=1;
 }
 include("../functions/connectionfunction.php");
 $conn=getConnection();
?>
<!DOCTYPE html>
<html>
<head>
<title>contact page</title>
 <!----------------------------link---------------------------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script 
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <!------------------------------------------------------------------------> 
</head>
<body style="background-color: #ffccbc87;">
<div class="container" style="width: 100%;">
 
 <!-------------------------------------first row------------------------------------------>
 <center>
<div class="row" style="width: 100%; border-style: 1; height: 43px; 
background-color: black; margin-top: 18PX;">
<div class="col-md-3" style="width: 20%; 
color:white;"><h4><i><b>Medicine Donation Portal</b></i></h4></div>
<div class="col-md-2" style="width: 30%; "></div>
<div class="col-md-1" style="width: 10%; ">
<a href="homepage.php" style="color:#dc2392; "><H4><b> <i 
class="fa fa-home" aria-hidden="true"></i> Home</b></H4></a>
</div>
<div class="col-md-1" style="width: 10%; ">
<a href="aboutus.php" style="color:#dc2392; "><H4><b> <i 
class="fa fa-user-o" aria-hidden="true"></i> About Us</b></H4></a></div>
<div class="col-md-1" style="width: 10%; ">
<a href="contactus.php" style="color:#dc2392; "><H4><b><i 
class="fa fa-compress fa-lg" aria-hidden="true"></i> Contact</b></H4></a>
</div>
<div class="col-md-1" style="width: 10%;">
<a href="login_page.php" style="color:#dc2392; "><h4><b><i 
class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Login</b></h4></a>
</div>
<div class="col-md-1" style="width: 10%;">
<a href="logout.php" style="color:#dc2392; "><h4><b><i 
class="fa fa-sign-out" aria-hidden="true"></i>Logout</b></h4></a>
</div>
</div>
</center>
<!--------------------------------------image portion-------------------------------------
-------->
 <div class="row" style="width: 100%; height: 20px;"></div>
 <div class="row" style="width: 100%; height: 300px;">
 <div class="col-md-1" style="width: 15%;"></div>
 <div class="col-md-1" style="width: 70%;">
 <img src="../IMAGES/9.jpg" style="width: 100%; height: 
300px;">
</div>
 <div class="col-md-1" style="width: 15%;"></div>
 </div>
 <div class="row" style="width: 100%; height: 40px;">
 <center><h2><i><b>Medicine Donation Portal</b></i></h2></center>
 </div>
 <div class="row" style="width: 100%; height: 20px;"></div>
 <center>
 <div class="row" style="width: 100%;">
 <div class="col-md-1" style="width: 47%; background-color: #ebbe87a1;">
 <center><h3 style="color: #20058ceb;"><b style="font-weight: 
800;">Hours</b></h3></center>
 <div class="row" style="width: 100%;">
 <h4>Monday-Saturday(9:00-6:00)<br>Sunday (9:00-5:00)</h4> 
 </div>
 </div>
 <div class="col-md-1" style="width: 6%;"></div>
 <div class="col-md-1" style="width: 47%; background-color: #ebbe87a1;"><center>
 <h3 style="color: #20058ceb;"><b style="font-weight: 800;">Phone And 
Email</b></h3></center>
 <div class="row" style="width: 100%;">
 <h4>Phone-9811526677/7476565678<br>Email-medicinedonate@gmail.com</h4> 
 </div>
 </div>
 <div class="col-md-1" style="width: 50%;"></div>
 </div>
 </center>
 <div class="row" style="width: 100%; height: 20px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="col-md-1" style="width: 15%;"></div>
 <div class="col-md-1" style="width: 70%;">
 <div class="row" style="width: 100%; border-style: solid;border-width: 2px;">
 <div class="col-md-1" style="width: 50%;"><img src="../IMAGES/3.jpg" 
style="width: 100%; height: 200px;margin-left: -30px;"></div>
 <div class="col-md-1" style="width: 50%;">
 <center>
 <h4><b>We know only too well that what we are doing is nothing more than a 
drop in the ocean. But if the drop were not there, the ocean would be missing 
something.<br><br>Wealth isn’t always measured in dollar signs. We each have time, talent 
and creativity, all of which can be powerful forces for positive change. Share your blessings 
in whatever form they come and to whatever level you have been blessed.</b></h4>
 </center>
 </div>
 </div>
 </div>
 <div class="col-md-1" style="width: 15%;"></div>
 </center>
 </div>
 <div class="row" style="width: 100%; height: 20px;"></div>
<!------------------------------------------------------------------------------->
 </div>
</body>
</html>

