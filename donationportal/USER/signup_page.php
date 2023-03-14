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
 $name="";
 $dob="";
 $phone="";
 $gender="";
 $email="";
  $password="";
 $address="";
 $utype="";
 $error="";
 if(isset($_POST['signup']))
 {
 $name=$_POST["name"];
 $dob=$_POST["dob"];
 $phone=$_POST["phno"];
 $gender=$_POST["gender"];
 $email=$_POST["email"];
 $password=$_POST["password"];
 $address=$_POST["address"];
 $utype=$_POST["utype"];
 $hash=md5($password);
 if($name=="" || $dob=="" || $phone=="" || $gender=="" || $email=="" || $hash==""|| 
$address==""|| $utype=="")
 {
 $error="<label style='color:red;'>Please provide complete details</label>";
 }
 else
 { $passlength=strlen($password);
 $phonelen=strlen($phone);
 if($passlength<6)
 {
 $error="<label style='color:red;'>Please enter atleast 6 characters in password </label>";
 }
 
 elseif($phonelen>10 || $phonelen<10)
 {
 $error="<label style='color:red;'>Please enter 10 digit mobile no</label>";
 }
 else
 {
 echo $sql ="INSERT INTO user_Data ( u_Name,u_DOB,u_Phone,u_Gender,u_Email,u_Password,u_Location,u_Type)
 VALUES ('".$name."','".$dob."','".$phone."','".$gender."','".$email."','".$hash."','".$address."','".$utype."')";
 
 if ($conn->query($sql) === TRUE) 
 {
 
 header('Location: login_Page.php');
 }
 else
 {
 echo "Error in inseertion";
 }
 }
 
 } 
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>signup page</title>
 <!------------------------------------BOOTSTRAP , CSS AND FONT AWESOME----------------->
 <link rel="stylesheet" type="text/css" href="../css/signup.css">
<!----------------------------------------link----------------------------------------->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script 
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <!-------------------------------------------------------------------------------->
</head>
<body style="background-image: url(../IMAGES/0.jpg);">
 <form method="POST" action="">
 <div class="container" style="width: 100%;">
 <div class="row" style="width: 100%;height: 100px;"></div>
 <div class="row" style="width: 100%;height: 400px;">
 <div class="col-md-1" style="width: 20%;"></div>
 <div class="col-md-1" style="width: 60%; height: 550px; background-color:#0d0707d4;">
 <!-----------------------------------signup content------------------------------
----->
 <div class="container" style="width: 100%;">
 <div class="row" style="width: 100%;">
 <center><h2 style="color: white;"><b>Sign Up</b></h2></center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i></i></span><input type="text" class="form-control" name="name" 
placeholder="Enter Your Name Here" style="width: 440px;background-color: #000000ba;">
 </div>
 </center> 
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-user-circle-o fa-lg" aria-hidden="true" style="font-size: smaller;">DOB</i></i></span><input type="date" class="form-control" name="dob" placeholder="Enter Your DOB Here" style="width: 423px;background-color: #000000ba;color: #faebd799;">
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-phone fa-lg" aria-hidden="true"></i></i></span><input id="phno" type="text" class="form-control" name="phno" placeholder="Enter Your Phone No." style="width: 444px;background-color: #000000ba;">
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i></i></span>
 <select name="gender" style="width: 50%;background-color: #000000ba;height: 33px; width: 440px; color:#faebd7b5;">
 
<option>Gender</option><option>Male</option><option>Female</option><option>Others
</option>
</select>
 </div>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 	<span class="input-group-addon"><i><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i></i></span><select name="utype" style="width: 50%;background-color: #000000ba;height: 33px; width: 440px;color: #faebd7b5;">
 <option>Type of user</option><option>Donator</option><option>NGO</option><option>Needy People</option></select>
 </div>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 	<div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></i></span><input type="text" class="form-control" name="email" placeholder="Enter Your Email Id" style="width: 440px;background-color: #000000ba;">
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-key fa-lg" aria-hidden="true"></i></i></span><input type="password" class="form-control" name="password" placeholder="Enter Your Password Here" style="width: 440px;background-color: #000000ba;"> 
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-address-book fa-lg" aria-hidden="true"></i></i></span><input type="text" class="form-control" name="address" 
placeholder="Enter Your address Here" style="width: 440px;background-color: 
#000000ba;"> 
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <input type="submit" name="signup" value="Signup" class="signup">
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center><h3 style="color: white;"><b>Already have an account?<a 
href="login_page.php">Login</a></b></h3></center>
 <br><center><u><h3><?php echo $error;?></h3></u></center>
 </div>
 </div>
 <!------------------------------------------------------------------------------------>
 </div>
 <div class="col-md-1" style="width: 20%;"></div>
 </div>
 <div class="row" style="width: 100%;height: 100px;"></div>
 </div>
 </form>
 </body>
</html>