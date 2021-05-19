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
background-image:url("images/greenbg3.jpg");
height:100%;
width:100%;	
background-repeat:no repeat;

background-size:cover;
}


</style>

</head>
<body>


<form action="empcode.php" method="post">	

    
<div class="container" style="border:0px solid;margin-top:20px;background-color:rgba(51,51,51,0.4); align=center;height:720px;width:400px;">	
	<h1 class=" h1 text-center"style="color:#68E486;"><b>EMPLOYEE REGISTRATION</b></h1>
	<div class="row" style="border:0px solid;">
		<div class="col-md-12 "style="border:0px solid;">
			
				  <div class="form-group" style="color:white;">
					<label for="name"></label>
					<input type="text" class="form-control"  placeholder="Enter your Name" name="name">
				  </div>
				   <div class="form-group" style="color:white;">
	<label for="fname"></label>
	<input type="text" class="form-control" placeholder="Enter Your Father's Name" name="fname">
</div>
<div class="form-group" style="color:white;">
	<label>Gender</label>
	<input type="radio" name="a" value="male"/>M
	<input type="radio" name="a" value="female"/>F
</div>
					  
					  
					  
<div class="form-group" style="color:white;">
	<label for="Email"></label>
	<input type="email" class="form-control" id="Email" placeholder="Enter Your Email " name="email">
</div>
				  
<div class="form-group" style="color:white;">
	<label for="password"></label>
	<input type="password" class="form-control" id="Password" placeholder="Enter Your Password" name="password">
</div>

<div class="form-group" style="color:white;">
	<label for="mobile"></label>
	<input type="number" class="form-control" placeholder="Enter Your Mobile.No" name="mobile">
</div>


<div class="form-group" style="color:white;">
	<label for="dob"></label>
	<input type="date" class="form-control" placeholder="Enter Your dob" name="dob">
</div>


<div class="form-group" style="color:white;"><div class="form-group" style="color:white;">
	<label for="address"></label>
	<textarea cols="10" rows="2" class="form-control" placeholder="Enter Your Address" name="address"></textarea>
</div>

<label for="department"></label>
<select class="form-control" name="department">
	<option>Select Department</option>
	<option>Accounts</option>
	<option>HR</option>						
	<option>IT</option>						
	<option>Marketing</option>						
	<option>C-Suit</option>						
</select>
</div>

<div>
		
	 <input type="submit" class="btn btn-default" style="background-color:#ff6666; text-color:white;" value="Register">
	</div>		</form>
		</div>
	</div>	
</div>	
</form>
</body>
</html>