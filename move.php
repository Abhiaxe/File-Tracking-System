<?php
session_start();

if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
include("header.php");
error_reporting(0);
$id=$_REQUEST['id'];


$msg=$_REQUEST['msg'];
if($msg==3)
{
	?>
	<script>alert ("file moved successfully");</script>
<?php	
}
?>
<?php
include("connection.php");
$query="select * from tbl_transfer where initiate_id='$id'";
$res=mysql_query($query);

$query2="select * from tbl_employee";
$res2=mysql_query($query2);




if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
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
background-image:url("images/green9.jpg");
height:80%;
width:100%;	
background-repeat:no repeat;

background-size:cover;
}

</style>
</head>
<body>


	
<form action="movecode.php?id=<?php echo $row['initiate_id'];?>" method="post">
    
<div class="container" style="border:1px solid;background-color:rgba(51,51,51,0.4); align=center;height:650px;width:400px;margin-top:50px">

<h1 class=" h1 text-center"style="color:white"><b>Move File</b></h1>
	<div class="row" style="border:0px solid;">
		<div class="col-lg" style="margin-left:20px;margin-right:20px">
<input type="hidden" name="id" value="<?php echo $row['0'];?>" readonly="true"/>
<div style="color:white;">
	<label for="ref">File Reference No.</label>
	<input type="text" class="form-control" value="<?php echo $row['file_reference_no'];?>" readonly="true" name="fileref">
	
</div>
<div style="color:white;">
	<label for="ref">File Name</label>
	<input type="text" class="form-control" value="<?php echo $row['file_name'];?>" readonly="true" name="filename">
	
</div>
<div style="color:white;">
	<label>Subject</label>
	<input type="text" class="form-control" value="<?php echo $row['subject'];?>" readonly="true" name="subject">
	
</div>

<div style="color:white;">
<label>Route</label>
<select class="form-control" name="route" value="<?php echo $row['route'];?>">
	<option>Select Route</option>
	<option <?php if ($row['route']=='Normal'){ ?> selected <?php }?>>Normal</option>
	<option <?php if ($row['route']=='Green_line'){ ?> selected <?php }?>>Green_Line</option>						
</select>
</div>
<div style="color:white;">
<label>File Status</label>
<select class="form-control" name="file_status" value="<?php echo $row['file_status'];?>">
	<option>Select Status</option>
	<option <?php if ($row['file_status']=='Pending_file'){ ?> selected <?php }?>>Pending_File</option>
	<option <?php if ($row['file_status']=='Completed_File'){ ?> selected <?php }?>>Completed_File</option>						
</select>
</div>








<div style="color:white;">
<label>Send To</label>
<select class="form-control"  name="send_to">
<option>Select Employee</option>
<?php

while($row2=mysql_fetch_assoc($res2))
{
?>



	<option value="<?php echo $row2['emp_id'];?>"><?php echo $row2['name'];?></option>
<?php
}
?>						
</select>
</div>

<div style="color:white;">
	<label for="remark">Remarks</label>
	<textarea cols="10" rows="2" class="form-control" value="<?php echo $row['remark'];?>" name="remark"></textarea>
	
</div>
<div style="margin-top:20px">

<input type="submit" class="btn btn-default" style="background-color:#ff6666; text-color:white;" value="Move"></div>
</div>
</div>
</div>



</form>
</body>
</html>
<?php
}
?>