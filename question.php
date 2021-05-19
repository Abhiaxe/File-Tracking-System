<?php


session_start();


if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}

//include("");
$ques=$_POST['ques'];

//echo $ques;
$email=$_SESSION['user'];
include("connection.php");


$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
	$eid=$row['0'];
}
$query2="insert into tbl_ques(question,emp_id,date)values('$ques','$eid',curdate())";
mysql_query($query2);

header("location:discuss.php");
?>