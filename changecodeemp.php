<?php
session_start();
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
$email=$_SESSION['user'];
include("connection.php");
$query="select password from tbl_employee where email='$email'";
$pp=mysql_query($query);
if($row=mysql_fetch_array($pp,MYSQL_BOTH))
{
 $pp=$row['password'];
 
}

if($pp=$op)
	{	
     	if($op==$np)
{
		header("location:changepassemp.php?msg=7");
}

elseif($np==$cnp)
	
	{	$query2="update tbl_employee set password='$np' where email='$email'";
		mysql_query($query2);
		session_destroy();
		header("location:index.php");
		}
	else
	{
		header("location:changepassemp.php?msg=9");
	}
	}
	else{
		header("location:changepassemp.php?msg=10");
	}

?>