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
 $mname="";
 $mtype="";
 $dphone="";
 $daddress="";
 $dname="";
 $mfg="";
 $exp="";
 $quantity="";
 $error="";
 if(isset($_POST['donate']))
 {
 $mname=$_POST["mname"];
 $mtype=$_POST["mtype"];
 $dphone=$_POST["dphone"];
 $daddress=$_POST["daddress"];
 $dname=$_POST["dname"];
 $mfg=$_POST["mfg"];
 $exp=$_POST["exp"];
 $quantity=$_POST["quantity"];
if($mname=="" || $mtype=="" || $dphone=="" || $daddress=="" || $dname=="" || $mfg==""|| 
$exp==""|| $quantity=="")
{
 $error="<label style='color:red;'>Please provide complete details</label>";
 }
else
{
 
 $sql ="INSERT INTO medicine (m_Name,m_Type,m_MFG,M_EXP,M_Quantity,m_Status,d_Name,d_Phone,d_Address,Date_Time)
 VALUES ('".$mname."','".$mtype."','".$mfg."','".$exp."','".$quantity."','1','".$dname."','".$dphone."','".$daddress."','".date('m/d/Y h:i:s', time())."')";
 echo $sql;
 if ($conn->query($sql) === TRUE) 
 {
 
 header('Location: homepage.php');
 } 
 
 else
 {
 echo "New record created successfully";
 }
 
} 
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>donation page</title>
<!------------------------------------BOOTSTRAP , CSS AND FONT AWESOME----------------------------->
 <link rel="stylesheet" type="text/css" href="../css/signup.css">
<!-------------------------------------------link--------------------------------------------------->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script 
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <!---------------------------------------------------------------------------------------------------->
</head>
<body style="background-image:url(../IMAGES/7.jpeg);">
 <form action="" method="post">
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
<!--------------------------------------------------------------------------------------------------->
<div class="row" style="width: 100%;height: 50px;"></div>
<div class="row" style="width: 100%;height: 20px;">
<div class="col-md-1" style="width: 20%;"></div>
<div class="col-md-1" style="width: 60%; background-color: #00000063;">
<div class="row" style="width: 100%;height: 10px;">
	<h4 style="color: white;">
 <center><marquee><b> After filling the form you have to deliver the medicine to our destination, want to know our details click on contact.</b></marquee>
 </center>
 </h4>
</div>
<div class="row" style="width: 100%;height: 50px;">
<center><h2 style="font-weight: 800;color: black;">Donate Medicines</h2></center>
</div>
<div class="row" style="width: 100%;height: 10px;"></div>
<div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-user-circle-o fa-lg" ariahidden="true"></i></i></span><input type="text" class="form-control" name="dname" 
placeholder="Enter Your Name Here" style="width: 440px;background-color: #000000ba;">
 </div>
 </center> 
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 	<center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-phone fa-lg" ariahidden="true"></i></i></span><input id="phno" type="text" class="form-control" 
name="dphone" placeholder="Enter Your Phone No." style="width: 444px;background-color: #000000ba;">
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-address-book fa-lg" ariahidden="true"></i></i></span><input type="text" class="form-control" name="daddress" 
placeholder="Enter Your address Here" style="width: 440px;background-color: #000000ba;"> 
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-medkit fa-lg" ariahidden="true"></i></i></span><input type="text" class="form-control" name="mname" 
placeholder="Enter name of medicines Here" style="width: 440px;background-color: 
#000000ba;"> 
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-medkit fa-lg" ariahidden="true"></i></i></span><input type="text" class="form-control" name="mtype" 
placeholder="Enter type of medicines Here" style="width: 440px;background-color: 
#000000ba;"> 
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-medkit fa-lg" ariahidden="true"></i></i></span><input type="text" class="form-control" name="quantity" 
placeholder="Enter quantity of medicines Here" style="width: 440px;background-color: 
#000000ba;"> 
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-user-circle-o fa-lg" ariahidden="true" style="font-size: smaller;">DO MFG</i></i></span><input type="date" 
class="form-control" name="mfg" placeholder="Enter Manufacturing Date Here" 
style="width: 394px;background-color: #000000ba;color: #faebd799;">
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-user-circle-o fa-lg" ariahidden="true" style="font-size: smaller;">DO EXP</i></i></span><input type="date" 
class="form-control" name="exp" placeholder="Enter Date of Expiry Here" style="width: 394px;background-color: #000000ba;color: #faebd799;">
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <input type="submit" name="donate" value="Donate" class="signup">
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center><h3 style="color: white;"><b>Don't have an account?<a 
href="signup_page.php">Signup</a></b></h3></center>
 <br><center><u><h3><?php echo $error;?></h3></u></center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
</div>
<div class="col-md-1" style="width: 20%;"></div>
</div>
<div class="row" style="width: 100%;height: 20px;"></div>
</div>
</form>
</body>
</html>