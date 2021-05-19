<?php
session_start();

if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
include("header2.php");	
include("connection.php");
$query="select * from tbl_employee";
$res=mysql_query($query);

?>
<html>
<head>
<style>
body
{
	background-image:url("images/blue-energy.jpg");
	background-repeat:no repeat;

background-size:1600px 800px;
}
#tb1{
	margin-top:10px;
	height:200px;
	width:100%;
	background-color:rgba(155, 241, 182,0.8 ) ;
	
}
#tr1{
	font-size:30px;
	
	background-color:rgba(51,51,153,0.6);
}
#tr2{
	font-size:15px;
	font-family:verdana;
	background-color:037F3B;
	color:white;
}
</style>
</head>
<body>
<table id="tb1" border="1" align="center">
<tr id="tr1">
	<th>S.No</th>
	<th>Name</th>
	<th>Father's Name</th>
	<th>Gender</th>
	<th>Email</th>
	<th>Password</th>
	<th>Mobile</th>
	<th>DOB</th>
	<th>Address</th>
	<th>Department</th>
	<th>DOR</th>
	<th>Edit</th>
	<th>Delete</th>
</tr>

<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr id="tr2">	
	<td><?php echo $i;?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['fname'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['password'];?></td>
	<td><?php echo $row['mobile'];?></td>
	<td><?php echo $row['dob'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['department'];?></td>
	<td><?php echo $row['dor'];?></td>
	<td><a href="edit.php?id=<?php echo $row['0']?>">edit</a></td>
	<td><a href="delete.php?id=<?php echo $row['0']?>">delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>

</body>
</html>
