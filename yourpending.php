<?php
session_start();


if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
error_reporting(0);
$id=$_REQUEST['id'];


$msg=$_REQUEST['msg'];
if($msg==6)
{
	?>
	<script>alert ("File is Completed successfully");</script>
<?php	
}
?>
<?php
include("connection.php");
$email=$_SESSION['user'];
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
$emp_id=$row['emp_id'];
}
$query2="select * from tbl_transfer where send_to='$emp_id' and file_status='Pending_File'";
$res2=mysql_query($query2);
include("header.php");
?>
<html>
<head>
<style>
body
{
	background-image:url("images/green2.jpg");
	background-repeat:no repeat;

background-size:cover;
}
#tb1{
	font-family:verdana;
	color:white;
	margin-top:50px;
	width:100%;
	background-color:rgba(51,51,153,0.6) ;
	
}
#tr1{
	background-color:#19B479;
}
</style>
</head>
<body>
<table id="tb1"  align="center">
<tr id="tr1"style="font-size:30px">
	<th>S.No</th>
	<th>File_Ref_No</th>
	<th>File_Name</th>
	
	<th>Send_From</th>
	<th>Move</th>
	<th>Complete</th>
	
	
</tr>

<?php
$i=1;
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<tr style="font-family:verdana">	
	<td><?php echo $i;?></td>
	<td><?php echo $row2['file_reference_no'];?></td>
	<td><?php echo $row2['file_name'];?></td>
	
		<?php $eid2=$row2['send_from'];
	$query3="select * from tbl_employee where emp_id='$eid2'";
	$res3=mysql_query($query3);
	if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
	{
		$ename2=$row3['name'];
	}
	
	?><td><?php echo $ename2;?></td>
	
	
	<td><a href="move.php?id=<?php echo $row2['initiate_id'];?>">Move</a></td>
	<td><?php
	$eid4=$row2['initiate_id'];
	$query4="select send_from from tbl_initiate where initiate_id='$eid4'";
	$res4=mysql_query($query4);
	while($row4=mysql_fetch_array($res4,MYSQL_BOTH))
		$n1=$row4['send_from'];
	

	$query5="select send_to from tbl_transfer where initiate_id='$eid4'";
	$res5=mysql_query($query5);
	while($row5=mysql_fetch_array($res5,MYSQL_BOTH))
		$n2=$row5['send_to'];
	if($n1==$n2)
	{ ?><a href="complete.php?id=<?php echo $row2['initiate_id'];?>">complete</a></td>
	<?php } ?></tr>
	
	
	
	
<?php
$i++;
}
?>
</table>

</body>
</html>
