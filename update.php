<?php

$id=$_POST['id'];
$name=$_POST['name'];
//echo $name;

$fname=$_POST['fname'];

//echo $fname;


$gender=$_POST['a'];
//echo $gender;


$email=$_POST['email'];
//echo $email;


$password=$_POST['password'];
//echo $password;


$mobile=$_POST['mobile'];
//echo $mobile;

$dob=$_POST['dob'];
$address=$_POST['address'];
$department=$_POST['department'];


include("connection.php");

$query="update tbl_employee set name='$name',fname='$fname',gender='$gender',email='$email',password='$password',mobile='$mobile',dob='$dob',address='$address',department='$department' where emp_id='$id'";
mysql_query($query);
//header("Location:view.php");






?>
