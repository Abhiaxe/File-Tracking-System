<?php
session_start();

if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
include("header2.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js" ></script>

<style>
body
{
background-image:url("images/blue2.jpg");
height:80%;
width:100%;	
background-repeat:no repeat;

background-size:cover;
}

</style>
</head>
<body>
<form action="changecode.php" method="post">

	

    
<div class="container" style="border:1px solid;background-color:rgba(51,51,51,0.4); align=center;height:450px;width:400px;margin-top:80px;border-radius:20px;">

<h1 class=" h1 text-center"style="color:white;margin-top:40px"><b>Change Password</b></h1>
	<div class="row" style="border:0px solid;">
		<div class="col-lg" style="margin:20px 20px 20px 20px">
<div style="color:white;">	  
					<label for="op">Old Password</label>
					<input type="password" class="form-control"  placeholder="Enter Your Old Password" name="op">
</div>
<div style="color:white;">	  
					<label for="np">New Password</label>
					<input type="password" class="form-control"  placeholder="Enter Your New Password" name="np">
</div>
<div style="color:white;">	  
					<label for="cnp">Confirm Password</label>
					<input type="password" class="form-control"  placeholder="Confirm Your New Password" name="cnp">
</div>
<div style="margin-top:20px">
<input type="submit" class="btn btn-default" style="background-color:#ff6666; text-color:white;" value="Change"></div>
</div>
</div>
</div>


</form>
</body>
</html>