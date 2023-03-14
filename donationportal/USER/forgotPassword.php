<?php
 //==================connection create with function====================================
 include("../functions/connectionfunction.php");
 $conn=getConnection();
?>
<!DOCTYPE html>
<html>
<head>
<title>Forget password</title>
 <link rel="stylesheet" type="text/css" href="../css/login.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script 
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(../images/tree.jpg);">
<form action="" method="get">
 <!-----------------------------------first row---------------------------------------------->
 <div class="container" style="width: 50%;background-color: #0e0200cc;margin-top: 
10%;">
 <div class="row" style="height: 50px;width: 100%">
 <h2 style="font-family: sans-serif;color: antiquewhite;margin-left: 19px;">
 <b>Forgot Password</b></h2>
 </div>
 
 
 <div class="row" style="height: 10px;width: 100%"></div>
 <div class="row" style="height: 50px;width: 100%">
 <center style="margin-left: 184px;">
 <div class="input-group" style="margin-bottom: 45px; margin-left: -17px;">
 <span class="input-group-addon"><i><i class="fa fa-phone fa-2x" ariahidden="true"></i></i></span><input id="phone" type="text" class="form-control" 
name="phone" placeholder="Email Id" style="height: 42px;background-color: black;width: 
384px;">
 </div>
 </center>
 </div>
 
 <div class="row" style="height: 9px;width: 100%"></div>
 <div class="row" style="height: 50px;width: 100%">
 <center style="margin-left: 184px;">
 <div class="input-group" style="margin-bottom: 45px; margin-left: -17px;">
 <span class="input-group-addon"><i><i class="fa fa-user-o fa-2x" ariahidden="true"></i></i></span><input id="hobbie" type="text" class="form-control" 
name="hobbie" placeholder="New password" style="height: 42px;background-color: 
black;width: 382px;">
 </div>
 </center>
 </div>
 <div class="row" style="height: 9px;width: 100%"></div>
 <div class="row" style="height: 50px;width: 100%">
 <center style="margin-left: 184px;">
 <div class="input-group" style="margin-bottom: 45px; margin-left: -17px;">
 <span class="input-group-addon"><i><i class="fa fa-heart fa-2x" ariahidden="true"></i></i></span><input id="colour" type="text" class="form-control" 
name="colour" placeholder="Confirm password" style="height: 42px;background-color: 
black;width: 378px;">
 </div>
 </center>
 </div>
 
 <div class="row" style="height: 30px;width: 100%">
 <center><input type="button" name="forget" value="Done" class="login"></center>
 </div>
 <div class="row" style="height: 9px;width: 100%"></div>
 <div class="row" style="height: 10px;width: 100%">
 </div>
 
 <div class="row" style="height: 60px;width: 100%">
 <center style="color: #f0f8ff66">Correctly answer minimum five questions</center>
 <center><h4 style="color: #f36862;"><b>Don't have an account?<a 
href="signup_page.php">Signup</a></b></h4></center>
 </div>
 </div>
 <!--------------------------------------second section------------------------------------->
 <div>
 
 </div>
</form>
</body>
</html>
