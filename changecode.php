<?php
session_start();
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
$email=$_SESSION['user'];
include("connection.php");
$query="select password from tbl_admin where email='$email'";
$pp=mysql_query($query);
if($row=mysql_fetch_array($pp,MYSQL_BOTH))
{
 $pp=$row['password'];
 
}

if($pp=$op)
	{	
     	if($op==$np)
{
		header("location:changepass.php");
}

elseif($np==$cnp)
	
	{	$query2="update tbl_admin set password='$np' where email='$email'";
		mysql_query($query2);
		session_destroy();
		header("location:index.php");
		}
	else
	{
		header("location:changepass.php");
	}
	}
	else{
		header("location:changepass.php");
	}

?>