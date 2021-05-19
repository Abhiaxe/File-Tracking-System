<?php
$id=$_REQUEST['id'];
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
	$emp_id=$row['emp_id'];
}

$query2="update tbl_transfer set file_reference_no='$fileref',file_name='$filename',subject='$subject',route='$route',file_status='$file_status',send_to='$send_to',send_from='$emp_id',remark='$remark',date_in=curdate() where initiate_id='$id'";
mysql_query($query2);
header("location:move.php?msg=3");

?>


