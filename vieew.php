<?php
session_start();

if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
include("header.php");
$qid=$_REQUEST['qid'];
include("connection.php");
$query="select * from tbl_answer where ques_id='$qid'";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>	
<html>
<head>
<style>
body{
	background-image:url("images/greenbg.jpg");


background-repeat:no repeat;

background-size:cover;
	
}
</style>
<body>
<center>
<div style="height:400px;width:350px;padding:20px 20px;margin-top:100px;background-color:rgba(51,51,51,0.4);"><h1>Answer of question.</h1>
	<h2 style="color:white;font-size:40px"><?php echo $row['answer'];
	echo "<br/>";?></h2>
	</div>
	</center>
	</body>
<?php
}


?>