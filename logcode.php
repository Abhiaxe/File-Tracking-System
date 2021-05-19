<?php
session_start();
$user=$_POST['user'];
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
include("connection.php");
if($user=='Admin')
{
   $query="select * from tbl_admin where email='$email' and password='$password'";
   $res=mysql_query($query);
    if($row=mysql_fetch_array($res,MYSQL_BOTH))
    {
	$_SESSION['user']=$email;
	header("Location:dashboard.php");
   }
  else
  {
	  header("Location:index.php?msg=1");
  }
}
     
else
{
	  if($user=="Employee")
	  {
	$query2="select * from tbl_employee where email='$email' and password='$password'";
    $res2=mysql_query($query2);

     if($row=mysql_fetch_array($res2,MYSQL_BOTH))
    {
	 $_SESSION['user']=$email;
	 header("Location:profile.php");
    }
	else
	{
		header("Location:index.php?msg=1");
	}
	  }
	  else
	  {
		  header("Location:index.php?msg=1");
	  }
}
?>