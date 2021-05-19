<?php
session_start();

if($_SESSION['user']=="")
{
	session_destroy();
	header("location:index.php");
	
	
}
include("header.php");
$qid=$_REQUEST['qid'];

?>
<html>
<head>
<style>
#t1{
	margin-top:30px;
}
body{
	background-image:url("images/greenbg.jpg");


background-repeat:no repeat;

background-size:cover;
	
}
#dv1{
height:420px;
width:350px;
padding:20px 20px;

margin-top:100px;
background-color:rgba(51,51,51,0.4);
}
</style>
</head>
<body>
<center>

<form action="answer.php" method="post">

<input type="hidden" name="qid" value="<?php echo $qid;?>"/>

</div>
<div id="dv1">
<h3 style="color:#85E794;font-size:25px">Enter Your Answer Here</h3>
<textarea id="t1" cols="30" rows="8" class="form-control" name="ans"></textarea>
<br/>

<input style="height:50px;width:80px"type="submit" value="Submit">
</form>
</div>

</div>
</form>

<center>
</body>
</html>