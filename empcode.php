<?php
$name=$_POST['name'];
//echo $name;
//echo "<br/>";
$fname=$_POST['fname'];

//echo $fname;
//echo "<br/>";

$gender=$_POST['a'];
//echo $gender;
//echo "<br/>";

$email=$_POST['email'];
//echo $email;
//echo "<br/>";

$password=$_POST['password'];
//echo $password;
//echo "<br/>";

$mobile=$_POST['mobile'];
//echo $mobile;
$dob=$_POST['dob'];
$address=$_POST['address'];
$department=$_POST['department'];
include("connection.php");

$query="insert into tbl_employee(name,fname,gender,email,password,mobile,dob,address,department,dor) values ('$name','$fname','$gender','$email','$password','$mobile','$dob','$address','$department',CURDATE())";
mysql_query($query);
header("location:view.php");









?>
