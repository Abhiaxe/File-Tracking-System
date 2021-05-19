<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from tbl_employee where emp_id='$id'";
mysql_query($query);
header("Location:view.php");

?>
