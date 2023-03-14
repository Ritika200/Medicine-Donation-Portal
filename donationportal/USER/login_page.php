<?php
 //==================connection create with function====================================
 include("../functions/connectionfunction.php");
 $conn=getConnection();
 
//=================================================================
 session_start();
if(isset($_SESSION['usersession']))
{
 header('Location: homepage.php');
}

 $uemail="";
 $password="";
 $error="";
 if(isset($_POST['login']))
 {
 $uemail=$_POST["uid"];
 $password=$_POST["password"];
 $hash=md5($password);
 echo $hash;
 if( $uemail=="" || $password=="" )
 {
 $error="<label style='color:red;'>Please provide complete details</label>";
 }
 else
 {
 echo $sql ="SELECT * FROM `user_Data` WHERE `u_Email`='$uemail' AND `u_password`='$hash'";
 "successful";
 $result = $conn->query($sql);
 $email;
 $email='u_Email';
 // if($array['u_Email']==$uemail)
 // {
 // echo "please enter correct id and password";
 // }
 // elseif($array['u_password']==$uemail)
 // {
 // echo "please enter correct id and password";
 if($result->num_rows > 0) 
 {
 // output data of each row
 while($row = $result->fetch_assoc())
 {
 $array=array();
 $array['u_Email']=$row["u_Email"];
 $array['u_Name']=$row["u_Name"];
 $array['u_Id']=$row["u_Id"];
 $array['u_password']=$row["u_password"];
 $array['u_Status']=$row["u_Status"];
 $array['u_Location']=$row["u_Location"];
 $array['u_Type']=$row["u_Type"];
 $array['u_Gender']=$row["u_Gender"];
 
 $_SESSION['usersession']=$array;
 
 print_r($array); 
 
 header('Location: homepage.php');
 } 
 } 
 else
 {
 echo "please enter correct id and password";
 }
 }
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<!------------------------------------BOOTSTRAP , CSS AND FONT AWESOME---------------------------->
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
 <form action="" method="post">
 <div class="container" style="width: 100%;">
 <div class="row" style="width: 100%;height: 100px;"></div>
 <div class="row" style="width: 100%;height: 400px;">
 <div class="col-md-1" style="width: 20%;"></div>
 <div class="col-md-1" style="width: 60%; height: 500px; background-color:#0d0707d4;">
 <!-----------------------------------login content--------------------------------
--->
 <div class="container" style="width: 100%;">
 <div class="row" style="width: 100%;">
 <center><h2 style="color: white;"><b style="margin-left: 
31px;">Login</b></h2></center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <img src="../IMAGES/user.png" class="img-circle" alt="ritika" 
width="100" height="100" style="margin-bottom: 54px;border-color: white; border-style:solid;border-width: 5px;margin-left: 28px;">
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></i></span><input type="text" class="form-control" name="uid" 
placeholder="Enter Your Email Id" style="width: 440px;background-color: #000000ba;">
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 10px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <div class="input-group" style="MARGIN-LEFT: 192px;">
 <span class="input-group-addon"><i><i class="fa fa-key fa-lg" aria-hidden="true"></i></i></span><input type="password" class="form-control" 
name="password" placeholder="Enter Your Password Here" style="width: 
440px;background-color: #000000ba;"> 
 </div>
 </center>
 </div>
 <div class="row" style="width: 100%;height: 20px;"></div>
 <div class="row" style="width: 100%;">
 <center>
 <input type="submit" name="login" value="Login" class="signup">
 </center>
 </div>
 <div class="row" style="width: 100%;height: 20px;"></div>
 <div class="row" style="width: 100%;">
 <center><a href="forgotPassword.php"><b style="color: red;">Forget Password</b></a></center>
 </div>
 <div class="row" style="width: 100%;height: 5px;"></div>
 <div class="row" style="width: 100%;">
 <center><h3 style="color: white;"><b>Don't have an account?<a 
href="signup_page.php">signup</a></b></h3></center>
 <br><center><?php echo $error;?></center>
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