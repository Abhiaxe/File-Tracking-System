<?php
session_start();
$fileref=$_POST['fileref'];
$filename=$_POST['filename'];
$subject=$_POST['subject'];



$route=$_POST['route'];


$file_status=$_POST['file_status'];



$send_to=$_POST['send_to'];

$remark=$_POST['remark'];
$email=$_SESSION['user'];


include("connection.php");
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$emp_id= $row['emp_id'];
}

$query2="insert into tbl_initiate(file_reference_no,file_name,subject,route,file_status,send_to,send_from,remark,date_in) values ('$fileref','$filename','$subject','$route','$file_status','$send_to','$emp_id','$remark',curdate())";
mysql_query($query2);
$query3="select initiate_id from tbl_initiate";
$res3=mysql_query($query3);
while($row2=mysql_fetch_array($res3,MYSQL_BOTH))

	$eid=$row2['initiate_id'];
$query4="insert into tbl_transfer(file_reference_no,initiate_id,file_name,subject,route,file_status,send_to,send_from,remark,date_in) values ('$fileref','$eid','$filename','$subject','$route','$file_status','$send_to','$emp_id','$remark',curdate())";
mysql_query($query4);
	header("location:initiate.php?msg=2");

?>
