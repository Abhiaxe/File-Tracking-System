<?php
session_start();
include("connection.php");
$ans=$_POST['ans'];
//echo $ans;

$qid=$_POST['qid'];
$email=$_SESSION['user'];

$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
	$eid=$row['0'];
}
$query2="insert into tbl_answer(ques_id,emp_id,answer,date) values ('$qid','$eid','$ans',curdate())";
mysql_query($query2);
header("location:discuss.php");
?>