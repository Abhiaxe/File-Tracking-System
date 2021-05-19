<?php
error_reporting(0);
session_start();


if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}

?>
<html>
<head>


<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>

<script src="js/bootstrap.min.js"></script>



<style>
body
{background-size:100%;
background-repeat:no repeat;
	background-image:url("images/greenbg2.jpg");
}
#btn
{
height:50px;
width:150px;
}

</style>
</head>
<body>












<div class="container-fluid" style="height:50px;width:100%;margin-top:10px;background-color:rgba(51,51,51,0.4)">
<div class="row" style="height:120px">
<div id="first" class="col-md" style="height:120px">


<button type="button" id="btn"class="btn btn-success"><a href="profile.php" style="color:white">Dashboard</a><span class="badge"></span></button>

</div>
<div id="first" class="col-md" style="height:120px">


<button type="button" id="btn"class="btn btn-primary"><a href="initiate.php" style="color:white">Initiate Files</a><span class="badge"></span></button>

</div>

<div id="two"class="col-md" style="height:120px">

<button type="button" id="btn" class="btn btn-primary"><a href="pending_files.php" style="color:white">All Pending Files</a><span class="badge"></span></button></div>


	<div id="three" class="col-md" style="height:120px">
	<button style="height:50px"type="button" id="btn1" class="btn btn-primary"><a href="yourpending.php" style="color:white">Pending Files In My Tray</a><span class="badge"></span></button></div>
	<div id="three" class="col-md" style="height:120px">
	<button style="margin-left:35px" type="button" id="btn" class="btn btn-primary"><a href="completedfiles.php" style="color:white">Completed Files</a><span class="badge"></span></button></div>
	<div id="two"class="col-md-2" style="height:120px">

<button style="margin-left:30px" type="button" id="btn" class="btn btn-danger"><a href="logout.php" style="color:white">Logout</a><span class="badge"></span></button></div>

</div>
	
	</div>
	</body>
	</html>