<?php
session_start();

if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
include("header.php");

include("connection.php");
$query="select * from tbl_ques";
$res=mysql_query($query);
?>
<html>
<head>
<style>


#dv1{
height:320px;
width:250px;
padding:20px 20px;
float:left;
margin-top:100px;
background-color:rgba(51,51,51,0.4);
}

#tr1{
	font-size:25px;
	height:70px;
color:white;
	background-color:#F77B70;
	
}
#tr2
{
	
	height:50px;
color:white;
	background-color:rgba(51,51,153,0.6);
	font-size:20px;
	
	
}
#a1
{
	color:white;
}
</style>
</head>
<body style="background-image:url('images/green4.jpg'); background-size:1600px 800px; background-repeat:no repeat">
<body>
<form action="question.php" method="post">

<div style="height:50px;width:100%;border:0px solid;margin-top:10px;background-color:rgba(51,51,51,0.4); align=center;"><h1 align="center"style="color:white;margin-right:50px;">Discussion Board</h1>
</div>
<div id="dv1">
<h3 style="color:white">Ask Your Question Here</h3>
<textarea cols="30" rows="5" class="form-control" name="ques"></textarea>
<br/>

<input style="height:30px;width:50px;background-color:#85E794"type="submit" value="Ask">
</form>
</div>
<table style="width:700px;margin-top:50px"border="1" align="center">
<tr id="tr1">
<th>S.No</th>
<th>Questions</th>
<th>Post Answer</th>
<th>View Answer</th>
</tr>

<?php
$a=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>

<tr id="tr2">
<td><?php echo $a;?></td>
<td><?php echo $row['question'];?></td>
<td><a id="a1"href="pans.php?qid=<?php echo $row['0'];?>">post</a></td>
<td><a id="a1"href="vieew.php?qid=<?php echo $row['0'];?>">view</a></td>
</tr>

<?php
$a++;
}
?>

</table>



</body>
</html>