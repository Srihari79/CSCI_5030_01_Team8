<?php

$con = mysqli_connect("localhost","root","") or die("Unable to connet");
$sql = 'CREATE Database easymeds';
$retval = mysqli_query($con,$sql);

if($retval){
	echo "<script>alert('Database Created Sucessfully')</script>";
}
else{
	echo "<script>alert('Database already exists')</script>";
}

$query = "CREATE TABLE `easymeds`.`login` ( `uname` VARCHAR(30) NOT NULL,PRIMARY KEY (`uname`), `password` VARCHAR(30) NOT NULL ,`full_name` VARCHAR(100) NOT NULL , `role` VARCHAR(20) NOT NULL , `email` VARCHAR(100) NOT NULL , `phone_no` VARCHAR(15) NOT NULL,`address` VARCHAR(200) NOT NULL,`gender` VARCHAR(50) NOT NULL)";
$query_run = mysqli_query($con,$query);

if($query_run){
	echo "<script>alert('Created Sucessfully')</script>";
}
else{
	echo "<script>alert('Tables already exists')</script>";
}
?>