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
?>
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "medicinedonation";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) 
 {
 die("Connection failed: " . $conn->connect_error);
 }
 $sql = "SELECT m_Id, m_Name, m_Type 
,d_Phone,d_Address,m_Quantity,m_MFG,m_EXP,d_Name FROM medicine";
 $result = $conn->query($sql);
 if ($result->num_rows > 0)
 {
 // output data of each row
 while($row = $result->fetch_assoc())
 {
 
 $data .="<div class='row' style='height: 50px; width: 100%;border-style:solid;borderwidth: 2px; background-color: #e0e0e0;border-color: #e0e0e0;'>
<div class='col-md-1' style='width: 5%;'><h6>" 
.$row["m_Id"] ."</h6></div>
 <div class='col-md-1' style='width: 20%;'><h6>" 
.$row["m_Name"] ."</h6></div>
 <div class='col-md-1' style='width: 10%;'><h6>" 
.$row["m_Type"] ."</h6></div>
 <div class='col-md-1' style='width: 10%;'><h6>" 
.$row["m_EXP"] ."</h6></div>
 <div class='col-md-1' style='width: 10%;'><h6>" 
.$row["m_MFG"] ."</h6></div>
 <div class='col-md-1' style='width: 10%;'><h6>" 
.$row["m_Quantity"] ."</h6></div>
 <div class='col-md-1' style='width: 15%;'><h6>" 
.$row["d_Name"] ."</h6></div>
 <div class='col-md-1' style='width: 10%;'><h6>" 
.$row["d_Address"] ."</h6></div>
 <div class='col-md-1' style='width: 10%;'><h6>" 
.$row["d_Phone"] ."</h6></div>
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
<title>medicine status</title>
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
<body>
<form method="post" action="">
<div class="content" style="width: 100%">
<!------------------------------------------------------------------------------------->
<center>
<!-------------------------------------first row------------------------------------------>
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
<!------------------------------------second row------------------------------------------->
<div class="row" style="width: 100%; height: 50px;"></div>
<div class="row" style="width: 100%;">
<div class="col-md-1" style="width: 5%;"></div>
<div class="col-md-1" style="width: 90%;background-color: 
#616161b5; height: 500px;">
<div class="row" style="height: 50px; width: 100%;">
<div class="col-md-1" style="width: 
5%;"><h5><b>Medicine Id</b></h5></div>
<div class="col-md-1" style="width: 
20%;"><h5><b>Medicine Name</b></h5></div>
 <div class="col-md-1" style="width: 
10%;"><h5><b>Medicine Type</b></h5></div>
 <div class="col-md-1" style="width: 10%;"><h5><b>Exp. Date</b></h5></div>
  <div class="col-md-1" style="width: 10%;"><h5><b>Mfg. 
Date</b></h5></div>
 <div class="col-md-1" style="width: 
10%;"><h5><b>Quantity</b></h5></div>
 <div class="col-md-1" style="width: 
15%;"><h5><b>Donator</b></h5></div>
 <div class="col-md-1" style="width: 
10%;"><h5><b>D_Address</b></h5></div>
 <div class="col-md-1" style="width: 
10%;"><h5><b>D_Phone</b></h5></div>
</div>
<?php echo $data; ?>
</div>
<div class="col-md-1" style="width: 5%;"></div>
</div>
</div>
</form>
</body>
</html>