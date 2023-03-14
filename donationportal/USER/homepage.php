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
 //------------------------------------------------------------------------------------
 $suggestion="";
 $error="";
 if(isset($_POST['add']))
 {
 $suggestion=$_POST["suggestion"];
 
if($suggestion=="" )
{
 $error="<label style='color:red;'>Please write your suggestion here</label>";
}
else
{
 
 $sql ="INSERT INTO suggestion ( `s_Time`, `s_By`,`suggestion`)
 VALUES ('".date('m/d/Y h:i:s', time())."','".$userData['u_Email']."','".$suggestion."')";
 echo $sql;
 if ($conn->query($sql) === TRUE) 
 {
 
 header('Location: homepage.php');
 } 
 
 else
 {
 echo "please add suggestions";
 }

} 
 }
 
?>
<!DOCTYPE html>
<html>
<head>
<title>homepage</title>
 <link rel="stylesheet" type="text/css" href="../css/faq.css">
 <link rel="stylesheet" type="text/css" href="../css/add.css">
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
<body style="background-image: url(../IMAGES/5.jpg);">
<form action="" method="post">
<div class="container" style="width: 100%">
<!------------------------------------------------------------------------------------->
<center>
<!-------------------------------------first row------------------------------------------>
<div class="row" style="width: 100%; border-style: 1; height: 43px; 
background-color: black; margin-top: 18PX;">
<div class="col-md-3" style="width: 20%; 
color:white;"><h4><i><b>Medicine Donation Portal</b></i></h4></div>
<div class="col-md-2" style="width: 25%; "></div>
<div class="col-md-1" style="width: 15%; ">
<a href="medicine_Status.php" style="color:#dc2392; 
"><H4><b> <i class="fa fa-home" aria-hidden="true"></i> Medicine Status</b></H4></a>
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
<!------------------------------------second row--------------------------------------->
<div class="row" style="height: 50px;">
<h4 style="color: white;">
 <center><marquee><b> Welcome To Unused Medicine Portal Signup 
or Login Now To Help Others Who Need It.</b></marquee>
 </center>
 </h4>
</div>
<div class="row" style="height: 200px;"></div>
 <div class="row" style="height: 100px;">
 <a href="donation_page.php">
 <center><h2 style="color: #d9d729;font-weight: 800;">Donate Now</h2></center>
 </a>
 </div>
 <div class="row" style="height: 100px;"></div>
<!-----------------------------------third row-------------------------------------------->
<div class="row" style="height: 200px;border: 2px; width: 100%; 
background-color: #0000009e;">
<div class="col-md-1" style="height: 150px; width: 15%"></div>
<div class="col-md-1" style="height: 150px; background-color: 
#e91e63;width: 20%;margin-top: -72px;">
<h3 style="color: white;">“Maybe you couldn’t help everyone 
survive, but you could, at least, save one life.”</h3>
</div>
<div class="col-md-1" style="height: 150px; width: 5%"></div>
<div class="col-md-1" style="height: 150px; background-color: 
black;width: 20%;margin-top: -72px;">
<h3 style="color: white;">"It's not the amount that matters but 
the meaning behind your donation."</h3>
</div>
<div class="col-md-1" style="height: 150px; width: 5%"></div>
<div class="col-md-1" style="height: 150px; background-color: 
#e91e63;width: 20%;margin-top: -72px;">
<h3 style="color: white;">"The journey to finding your best 
self starts by giving your best self to others."</h3>
</div>
<div class="col-md-1" style="height: 150px; width: 15%"></div>
</div>
 <!------------------------------------------------------------------------------->
 <div class="row" style="width: 100%; margin-left: 70px;">
 <center>
 	<br>
 <input type="text" name="suggestion" placeholder="Write your suggestion here" 
class="faq">
 <input type="submit" name="add" value="Add" class="add">
 </center>
 <br><center><u><h3><?php echo $error;?></h3></u></center>
 </div>
<!------------------------------------------------------------------------------->
<div class="row" style="height: 40px; background-color: #0000009e; ">
<div class="col-md-1" style="width: 33%"><a 
href="terms_page.php"><h4><center style="color: #faebd7b5;">Terms of 
use</center></h4></a></div>
 <div class="col-md-1" style="width: 34%">
 	<h4><center style="color: #faebd7b5;">©2022,Brought to you by Ritika Tyagi</center></h4>
 </div>
 <div class="col-md-1" style="width: 33%"><a 
href="terms_page.php"><h4><center style="color: #faebd7b5;">Privacy 
Policy</center></h4></a>
 </div>
</div>
<!------------------------------------------------------------------------------->
</center>
<!------------------------------------------------------------------------------->
</div>
</form>
</body>
</html>