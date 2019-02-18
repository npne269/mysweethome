<?php
session_start();
header('location:index.html');

$conn = mysqli_connect('localhost','root');

if($conn){
	echo "connection sucessfuul";
}
else{
	echo "no conn";
}

mysqli_select_db($conn,'session');

$name = $_POST['userid'];
$pass = $_POST['passid'];

$q = "select * from signup where name = '$name'";
$result = mysqli_query($conn,$q);

$num = mysqli_num_rows($result);

if($num==0)
{
	$qy = " insert into signup(name,password) values('$name','$pass')";
	mysqli_query($conn,$qy);
	
}
else{
	echo "user name already used";
}




?>