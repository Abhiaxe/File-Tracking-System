<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from tbl_transfer where initiate_id='$id'";
mysql_query($query);
header("Location:completedfiles.php");

?>
