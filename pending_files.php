<?php
session_start();


if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
include("connection.php");
$query="select * from tbl_transfer where file_status='Pending_File'";
$res=mysql_query($query);


$email=$_SESSION['user'];


   $query4="select * from tbl_admin where email='$email'";
   $res4=mysql_query($query4);
    
	if($row4=mysql_fetch_array($res4,MYSQL_BOTH))
    {
	
	$eid4=$row4['email'];
	if($email==$eid4)
	{
		include("header2.php");
	}}
	else
	{include("header.php");
	}
	


?>
<html>
<head>
<style>
body
{
	background-image:url("images/green3.jpg");
	background-repeat:no repeat;

background-size:1540px 760px;;
}
#tb1{
	margin-top:50px;
	height:200px;
	width:100%;
	
	border-radius:10px;
}

</style>
</head>
<body>
<table id="tb1" border="0" align="center">
<tr style="font-size:30px;background-color:#000000;color:#4dff88
">
	<th>S.No</th>
	<th>File_Ref_No</th>
	<th>File_Name</th>
	<th>Subject</th>
	<th>Route</th>
	<th>File_Status</th>
	<th>Send_To</th>
	<th>Send_From</th>
	<th>Remark</th>
	<th>Date_In</th>
	
</tr>

<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr style="font-family:verdana;background-color:rgba(51,51,153,0.6);color:white">	
	<td><?php echo $i;?></td>
	<td><?php echo $row['file_reference_no'];?></td>
	<td><?php echo $row['file_name'];?></td>
	<td><?php echo $row['subject'];?></td>
	<td><?php echo $row['route'];?></td>
	<td><?php echo $row['file_status'];?></td>
	<?php $eid=$row['send_to'];
	$query2="select * from tbl_employee where emp_id='$eid'";
	$res2=mysql_query($query2);
	if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
	{
		$ename=$row2['name'];
	}
	
	
	?>
	<td><?php echo $ename;?></td>
	<?php $eid2=$row['send_from'];
	$query3="select * from tbl_employee where emp_id='$eid2'";
	$res3=mysql_query($query3);
	if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
	{
		$ename2=$row3['name'];
	}
	
	?><td><?php echo $ename2;?></td>
	<td><?php echo $row['remark'];?></td>
	<td><?php echo $row['date_in'];?></td>
	
</tr>
<?php
$i++;
}
?>
</table>

</body>
</html>
