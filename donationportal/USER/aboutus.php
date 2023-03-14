<?php
session_start();
 $sess=0;
 if(isset($_SESSION['usersession']))
 {
 $userData=$_SESSION['usersession'];
 //print_r($userData);
 $sess=1;
 }
 $se="";
 
 $data="";
 //==================connection create with function====================================
 include("../functions/connectionfunction.php");
 $conn=getConnection();
 //------------------------------------------------------------------------------------
 $faq="";
 $error="";
 $sql="";
 $date="";
 
 if(isset($_POST['add']))
 {
 $faq=$_POST["faq"];
 if($faq=="")
 {
 $error="<label style='color:red;'>Please write your question here</label>";
 }
 else
 {
 // echo "hello";
 //echo $date = date('Y-m-d H:i:s');
 $sql ="INSERT INTO faq (`faq_By`, `faq_Date`, `faq`)
 VALUES('".$userData['u_Email']."','".date('m/d/Y h:i:s', time())."','".$faq."')";
 
 if ($conn->query($sql) === TRUE) 
 {
 // echo "New record created successfully";
 }
 else 
 {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 
 } 
 }
 $sql = "SELECT faq, faq_Ans FROM faq";
 $result = $conn->query($sql);
 if ($result->num_rows > 0)
 {
 // output data of each row
 while($row = $result->fetch_assoc())
 {
 $data .="<div class='row' style='width: 100%; margin-left: 70px;'>
          <h3><i class='fa fa-circle fa-1x' aria-hidden='true' style='color: #e90f66;'> " .$row["faq"] ."</i></h3><br>
          <h4><i>" .$row["faq_Ans"] ."</i></h4>
          </div>";
 
 }
 } 
 else 
 {
 echo "0 results";
 }
 $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<title>about us</title>
 <link rel="stylesheet" type="text/css" href="../css/faq.css">
 <link rel="stylesheet" type="text/css" href="../css/add.css">
<!-------------------------------------------link----------------------------------------------------->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script 
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <!----------------------------------------------------------------------------------------------------> 
</head>
<body>
 <form method="post" action="">
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
<a href="" style="color:#dc2392; "><H4><b> <i class="fa fa user-o" aria-hidden="true"></i> About Us</b></H4></a></div>
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
<div class="row" style="width: 100%;"><h1 style="color: black;"><i><b 
style="margin-left: 70px;">About Us</b></i></h1></div>
 <div class="row" style="width: 100%; height: 20px;"></div>
 <div class="row" style="width: 100%;">
 <div class="col-md-1" style="width: 70%;">
 <div class="row" style="width: 100%;">
 <div class="col-md-1" style="width: 5%;"></div>
 <div class="col-md-1" style="width: 90%;background-color: #ffee5891;">
 <h4 style="text-align-last: justify;">The aim and objective of this Online medicine 
donation portal are to prepare a portal for the collection of unused medicine for further 
utilization by a needy person. The website must be like user can donate the unused medicine 
to NGO. That NGO can help needy people. The user can donate the medicine.
 It’s can be claimed by NGO. They can collect from a particular place. There must be a 
login for the user, ngo, admin. Admin can see all details of user donated medicine. There 
must be a form like registration of the new user.
 Medicine donate form. It’s must be tracked in the SQL Server database.
 medicine donation portal is a web application, part of an online service for all needy 
persons. This provides a wide range of medicines to the peoples who need those medicines. 
 The Project is about the collection of medicine which is unused by the patient who 
recovers completely and medicine becomes waste that medicine can be collected and used 
further. MEDICINE DONATOIN PORTAL commit to establish an online platform for 
donators who want to donate unused medicines and needy people who cannot afford 
medicines.One of the objectives is to provide medicines to needy people at free of 
cost.4.Medicine donation portal provides better quality of medicines to its user, which will 
help many needy people will get cured.It will help to maintain records of medicines.</h4>
 </div>
 <div class="col-md-1" style="width: 5%;"></div>
 </div>
 </div>
 <div class="col-md-1" style="width: 30%;">
 <img src="../IMAGES/01.jpg" style="width: 100%; height: 277px;">
 </div>
 </div>
 <!------------------------------------------faq----------------------------------------------->
 <div class="row" style="width: 100%;">
 <h1 style="color: black;"><i><b style="margin-left: 70px;">FAQ</b></i></h1>
 </div>
 <div class="row" style="width: 100%; margin-left: 70px;">
 <h3><i class="fa fa-circle fa-1x" aria-hidden="true" style="color: #e90f66;"> Can i 
donate unused medicines?</i></h3><br>
 <h4><i>Yes, you can donate us your unused medicines but please avoid medicines which 
are near to expiry.</i></h4>
 </div>
 <div class="row" style="width: 100%; margin-left: 70px;">
 <h3><i class="fa fa-circle fa-1x" aria-hidden="true" style="color: #e90f66;"> There is 
some cough syrup left in the bottle which I used for my child, can I donate the 
same?</i></h3><br>
 <h4><i>No, We do not accept unsealed bottles of medicines. Please avoid the 
same.</i></h4>
 </div>
 <div class="row" style="width: 100%; margin-left: 70px;">
 <h3><i class="fa fa-circle fa-1x" aria-hidden="true" style="color: #e90f66;"> Can you 
please send someone at my home to pick-up the medicines?</i></h3><br>
 <h4><i>Frankly, it is not possible for us to depute someone. You are requested to please 
visit our centre or alternately send the same through courier.</i></h4>
 </div>
 <div class="row" style="width: 100%; margin-left: 70px;">
 <h3><i class="fa fa-circle fa-1x" aria-hidden="true" style="color: #e90f66;"> Can I 
organise a donation camp in my office or housing society?</i></h3><br>
 <h4><i>Sure, we encourage you to please organise a donation camp in your office, 
school, college, residential society and with all like minded people.</i></h4>
 </div>
 <?php echo $data; ?>
 <div class="row" style="width: 100%; margin-left: 70px;">
 <center>
 	<h3><i style="color: blue;"> If you want to ask any questoion please write 
here</i></h3><br>
 <input type="text" name="faq" placeholder="Write your question here" class="faq">
 <input type="submit" name="add" value="Add" class="add">
 </center>
 <br><center><u><h3><?php echo $error;?></h3></u></center>
 </div>
 <div class="row" style="width: 100%; height: 20px;"></div>
 <!-------------------------------------------------------------------------------------------->
 </div>
</form>
</body>
</html>