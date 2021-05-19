<?php
session_start();

if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
$id=$_REQUEST['id'];



include("connection.php");

$query="update tbl_transfer set file_status='Completed_File' where initiate_id='$id'";
mysql_query($query);
header("location:yourpending.php?msg=6");



?>