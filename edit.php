<?php
session_start();

if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
$id=$_REQUEST['id'];
//echo $id;
include("header2.php");
include("connection.php");
$query="select * from tbl_employee where emp_id='$id'";
$res=mysql_query($query);
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
background-image:url("images/green6.jpg");
height:100%;
width:100%;	
background-repeat:no repeat;

background-size:150%;
}


</style>

</head>
<body>
<form action="update.php" method="post">


<div class="container" style="border:0px solid;margin-top:10px;background-color:rgba(51,51,51,0.4); align=center;width:400px;">
	
	<h1 class=" h1 text-center"style="color:#99e699;"><b>UPDATE FORM</b></h1>
	<div class="row" style="border:0px solid;">
		<div class="col-md-12 "style="border:0px solid;">
			<input type="hidden" name="id" value="<?php echo $row['0'];?>" readonly="true"/>
				  <div class="form-group" style="color:white;">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name"
					value="<?php echo $row['name'];?>">
				  </div>
				  
				  
				  
				  
				   <div class="form-group" style="color:white;">
	<label for="fname">Father's Name</label>
	<input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>">
</div>
<div class="form-group" style="color:white;">
	<label>Gender</label>
	<input type="radio" name="a" value="male" <?php if($row['gender']=='male'){?> checked <?php } ?>/>M

<input type="radio" name="a" value="female" <?php if($row['gender']=='female'){ ?> checked <?php } ?>/>F
</div>
					  
					  
					  
<div class="form-group" style="color:white;">
	<label for="Email">Email</label>
	<input type="email" class="form-control" id="Email"  name="email" value="<?php echo $row['email'];?>">
</div>
				  
<div class="form-group" style="color:white;">
	<label for="password">Password</label>
	<input type="password" class="form-control" id="Password" name="password" value="<?php echo $row['password'];?>">
</div>

<div class="form-group" style="color:white;">
	<label for="mobile">Mobile</label>
	<input type="number" class="form-control" name="mobile" value="<?php echo $row['mobile'];?>">
</div>


<div class="form-group" style="color:white;">
	<label for="dob">DOB</label>
	<input type="date" class="form-control" name="dob" value="<?php echo $row['dob'];?>">
</div>

<div class="form-group" style="color:white;">
	<label for="address">Address</label>
	<textarea cols="10" rows="2" class="form-control" name="address"><?php echo $row['address'];?></textarea>
</div>
<div>
<label for="department"></label>
<select class="form-control" name="department" value=" <?php echo $row['department'];?>">
	<option>Select Department</option>
	
	<option <?php if ($row['department']=='HR'){ ?> selected <?php }?>>HR</option>
	<option <?php if ($row['department']=='HR'){ ?> selected <?php }?>>HR</option>						
	<option <?php if ($row['department']=='IT'){ ?> selected <?php }?>>IT</option>						
	<option <?php if ($row['department']=='Marketing'){ ?> selected <?php }?>>Marketing</option>						
	<option <?php if ($row['department']=='C-Suit'){ ?> selected <?php }?>>C-Suit</option>						
	<option <?php if ($row['department']=='Accounts'){ ?> selected <?php }?>>Accounts</option>						
</select>
</div>


		
	 <input type="submit" class="btn btn-default" style="background-color:#99e699; text-color:white;margin-top:20px" value="Update">
			
		</div>
	</div>	
</div>	
</form>
</body>
</html>
<?php
}
?>
