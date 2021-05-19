<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
	?>
	<script>alert("Invalid email or password");</script>
<?php
}
if($msg==4)
{
?>
<script>alert("Logout Successfully");</script>
<?php
}
?>










<html>
<head>
<style>
body
{
background-image:url("images/green8.jpg");

width:100%;
background-repeat:no repeat;

background-size:1520px 760px;
}


</style>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<link href="images/ggl3.png" rel="icon"/>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<form action="logcode.php" method="post">



<div id="dv1"style="height:730px;width:100%">

<div class="container-fluid" style="height:730px;width:100%">

<div style="height:700px;width:100%">

<div style="height:700px;width:50%;float:left">
<div class="container" style="border:0px solid;margin-top:190px;margin-left:150px;height:450px;width:600px">



<div style="height:100px;width:120px;margin-left:10px;"><img src="images/ggl.jpg" height="100px";width="80px"></img></div>




<div style="height:300px;width:550px"><p style="text-align:justify;color:white;margin:10px 10px 10px 10px">Green Gas Limited (GGL), a joint venture of GAIL (India) Limited &amp; Indian Oil Corporation
Limited (IOCL), is executing Projects for City Gas Distribution in Agra &amp; Lucknow cities of Uttar
Pradesh. Green Gas Limited (GGL) (hereinafter referred as Owner), is supplying Piped Natural
Gas (PNG) to Domestic, Commercial and Industrial consumers and Compressed Natural Gas
(CNG) to automobiles in Lucknow &amp; Agra city of Uttar Pradesh through its CGD and CNG
networks. GGL intends to develop its CGD and CNG network in Lucknow &amp; Agra to supply
Natural gas to Domestic, Commercial consumers through PE network and to new CNG stations
through Steel pipeline network by setting up new facilities.</p></div>
</div>

</div>
<div style="height:700px;width:50%;float:right">
<div class="container" style="border:0px solid;margin-top:190px;height:400px;width:350px;">
<h1 class=" h1 text-left" style="color:white;margin-right:50px">
	<b>LOGIN</b></h1>
	
		
		<div class="form-group" style="color:white;">

<label for="user"></label>
<select class="form-control" name="user">
	<option>Select User</option>
	<option>Admin</option>
	<option>Employee</option>						
</select>
</div>
		
	<div class="form-group" style="color:white;">
	<label for="Email"></label>
	<input type="email" class="form-control" id="Email" placeholder="Enter Your Email " name="email">
</div>
				  
<div class="form-group" style="color:white;">
	<label for="Password"></label>
	<input type="password" class="form-control" id="Password" placeholder="Enter Your Password" name="password">
</div>
		<input type="submit" value="Login" class="btn" style="background-color:red; text-color:white;">
		<p  style="color:white;">Forgotten Password? <a style="color:#37DB61;" href="forget.php">Click Here</a></p>

		</div>


</div>


</div></div>
<div style="height:30px;width:100%;background-color:rgba(51,51,51,0.6)">
<div style="height:30px;width:35%;float:right;">
<h6 style="color:white">
&copy COPYRIGHT 2018 Designed & Developed By Abhishek Pandey
</h6>
</div>
<div style="height:30px;width:30%;float:left;"><a style="margin-left:10px;color:white"href="team.php">Team</a></div>

</div>
</div>
</form>
</body>
</html>