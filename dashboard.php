<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
?>
<html>
<head>


</style>
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
height:80px;
width:200px;
}

</style>
</head>
<body>

<div style="height:80px;width:100%">
<div style="height:70px;width:100%;border:0px solid;background-color:rgba(51,51,51,0.4); align=center;"><h1 align="center"style="color:white;margin-right:50px;">ADMIN DASHBOARD</h1>
</div>
<div class="container-fluid" style="height:360px;width:900px;margin-top:100px">
<div class="row" style="height:120px">
<div id="first" class="col-md" style="height:120px">


<button type="button" id="btn"class="btn btn-primary"><a href="empreg.php" style="color:white">Employee Registration</a><span class="badge"></span></button>

</div>

<div id="two"class="col-md" style="height:120px">

<button type="button" id="btn" class="btn btn-primary"><a href="pending_files.php" style="color:white">All Pending Files </a><span class="badge"></span></button></div>


	<div id="three" class="col-md" style="height:120px">
	<button type="button" id="btn" class="btn btn-primary"><a href="completedfiles.php" style="color:white">Completed Files</a><span class="badge"></span></button></div>
	
	</div>
	<div class="row" style="height:120px;width:835px">
	<div id="four" class="col-md-6" style="height:120px;">
	<button type="button" id="btn" class="btn btn-success" style="float:right"><a href="view.php" style="color:white">View Employee </a><span class="badge"></span></button></div>

	<div id="five" class="col-md" style="height:120px">
	<button type="button"  id="btn"class="btn btn-success"><a href="changepass.php" style="color:white">Change password </a><span class="badge"></span></button></div>
	</div>
	
<div class="row" style="height:120px;width:531px">	
	<div id="six" class="col-md" style="height:120px">
	<button style="float:right"type="button" id="btn" class="btn btn-danger"><a href="logout.php" style="color:white">Logout </a><span class="badge"></span></button></div>
	</div>
</div>
	</body>
</html>