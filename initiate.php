<?php
session_start();

if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==2)
{
	?>
	<script>alert("file initiated successfully");</script>
<?php	
}
?>
<?php
include("connection.php");
$query="select * from tbl_employee";
$res=mysql_query($query);
include("header.php");
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
background-image:url("images/green7.jpg");
height:80%;
width:100%;	
background-repeat:no repeat;

background-size:cover;
}

</style>
</head>
<body>


	
<form action="initiatecode.php" method="post">
    
<div class="container" style="border:1px solid;background-color:rgba(51,51,51,0.4); align=center;height:650px;width:400px;margin-top:50px">

<h1 class=" h1 text-center"style="color:white"><b>Initiate File</b></h1>
	<div class="row" style="border:0px solid;">
		<div class="col-lg" style="margin-left:20px;margin-right:20px">

<div style="color:white;">
	<label for="ref">File Reference No.</label>
	<input type="text" class="form-control" placeholder="Enter File Reference No." name="fileref">
	
</div>
<div style="color:white;">
	<label for="ref">File Name</label>
	<input type="text" class="form-control" placeholder="Enter File Name" name="filename">
	
</div>
<div style="color:white;">
	<label>Subject</label>
	<input type="text" class="form-control" placeholder="Enter Subject" name="subject">
	
</div>





<div style="color:white;">
<label>Route</label>
<select class="form-control" name="route">
	<option>Select Route</option>
	<option>Normal</option>
	<option>Green_Line</option>						
</select>
</div>
<div style="color:white;">
<label>File Status</label>
<select class="form-control" name="file_status">
	<option>Select Status</option>
	<option>Pending_File</option>
	<option>Completed_File</option>						
</select>
</div>





<div style="color:white;">
<label>Send To</label>
<select class="form-control"  name="send_to">
<option>Select Employee</option>
<?php

while($row=mysql_fetch_assoc($res))
{
?>



	<option value="<?php echo $row['emp_id'];?>"><?php echo $row['name'];?></option>
<?php
}
?>						
</select>
</div>

<div style="color:white;">
	<label for="remark">Remarks</label>
	<textarea cols="10" rows="2" class="form-control" name="remark"></textarea>
	
</div>
<div style="margin-top:20px">

<input type="submit" class="btn btn-default" style="background-color:#ff6666; text-color:white;" value="Send"></div>
</div>
</div>
</div>



</form>
</body>
</html>